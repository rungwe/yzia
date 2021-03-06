<?php
 
error_reporting(E_ALL);
ini_set('display_errors', 1);
use backendless\Backendless;
use backendless\model\BackendlessUser;
use backendless\model\Data;
include "backendless/autoload.php";


//check login details
try {
  Backendless::initApp('CBB6E8A0-4CC0-F84C-FF35-33F5F6297C00', 'A2B672F3-69CD-207F-FF83-6EE9412EAD00', 'v1');
  $current_user = Backendless::$UserService->login($_POST["username"], $_POST["password"]);
  //If the exception is thrown, this text will not be shown
  
}

//catch exception
catch(Exception $e) {
  //echo 'error occurred, you either entered incorrect yzia username or yzia password';
  echo $e;
  //header("Location: error.php");
  exit;
}


var_dump($_POST);
//old id 2096
//old key "dc133897-2cf7-453d-af86-fc38a584ea0e"
$id =2350;
$key = "4481a3d3-610a-476d-9d78-51cb3c034289";
$IntegrationKey = $key ;  
$fields =  array( 
  "id"=>$id,
  "reference"=>$_POST["username"]." credit purchase",
  "amount" =>$_POST["package"],
  "additionalinfo"=> $_POST["username"],
  "returnurl" =>"https://yzia.herokuapp.com/success.php",
  "resulturl" =>"https://yzia.herokuapp.com/notification.php",
  "authemail"=>$_POST["email"],
  "username"=>$_POST["username"],
  "password"=>$_POST["password"],
  "status" =>"Message"
  );

WereCreatingATransaction($fields,$IntegrationKey);
//$hash = hash("sha512", "hello world");
//echo strtoupper($hash);

function WereCreatingATransaction($values,$integration_key)  
{   
              
    $fields_string = CreateMsg($values, $integration_key);  
    echo $fields_string;
    //exit;
      
    //open connection  
    $ch = curl_init();  
    $url = "https://www.paynow.co.zw/interface/initiatetransaction";  
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_POST, true);  
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
  
    //execute post  
    $result = curl_exec($ch);  
  
    if($result)  
    {  
        $msg = ParseMsg($result);  
         echo "transaction status".$msg["status"];
         //var_dump($msg);
        //first check status, take appropriate action  
        if ($msg["status"] == "Error"){  
            echo $msg["error"];
            exit;  
        }  
        else if ($msg["status"] == "Ok"){  
          
            //second, check hash  
            $validateHash = CreateHash($msg, $integration_key);  
            if($validateHash != $msg["hash"]){  
                $error =  "Paynow reply hashes do not match : " . $validateHash . " - " . $msg["hash"];  
                echo $error;
                exit;
            }  
            else  
            {  
                  
                $theProcessUrl = $msg["browserurl"];  

                //poll
                $p = curl_init();  
  
                //set the url, number of POST vars, POST data  
                curl_setopt($p, CURLOPT_URL, $msg["pollurl"]);  
                curl_setopt($p, CURLOPT_POST, 0);  
                curl_setopt($p, CURLOPT_POSTFIELDS, '');  
                curl_setopt($p, CURLOPT_RETURNTRANSFER, 1);  
                curl_setopt($p, CURLOPT_SSL_VERIFYPEER, false); 

                $poll_result = curl_exec($p);
                curl_close($p);
                $poll_data ="";
                if($poll_result){
                    
                    $poll_data = ParseMsg($poll_result);
                    //var_dump($poll_data);
                    $MerchantKey =  $integration_key;  
                    $validateHash = CreateHash($poll_data, $MerchantKey);  
  
                    if($validateHash != $poll_data["hash"]){  
                       echo "unexpected error, security violation";  
                      // exit;
                    }  
                }
                else{
                    echo "unexpected error, it could be a network problem";
                    //exit;
                }
  
                /***** IMPORTANT **** 
                On User has approved paying you, maybe they are awaiting delivery etc 
                 
                    Here is where you 
                    1. Save the PollURL that we will ALWAYS use to VERIFY any further incoming Paynow Notifications FOR THIS PARTICULAR ORDER 
                    1. Update your local shopping cart of Payment Status etc and do appropriate actions here, Save any other relavant data to DB 
                    2. Email, SMS Notifications to customer, merchant etc 
                    3. Any other thing 
                 
                *** END OF IMPORTANT ****/  
                $query = http_build_query([
                 'id' => $poll_data['paynowreference'],
                 'u' => $_POST['username'],
                 'p' => $_POST['password']
                ]);
                
                $w = curl_init();  
                $url_write = "https://people.cs.uct.ac.za/~rngkum001/notify.php?".$query;  
                //echo "<br>".$url_write."<br>";
                curl_setopt($w, CURLOPT_URL, $url_write);      
                curl_setopt($w, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($w, CURLOPT_SSL_VERIFYPEER, false);
                $res = curl_exec($w); 

                //echo $res."  result";
                curl_close($w);
                //exit;

                  
                              
                  
            }  
        }  
        else {                        
            //unknown status or one you dont want to handle locally  
            $error =  "Invalid status in from Paynow, cannot continue.";  
        }  
  
    }  
    else  
    {  
       $error = curl_error($ch);  
       echo $error;
    }  
      
    //close connection  
    curl_close($ch);  
  
              
    //Choose where to go  
    if(isset($error))  
    {  
        //back to checkout, show the user what they need to do  
        echo $error;  
    }  
    else  
    {  
        //redirect to paynow for user to complete payment  

        echo "successfull transaction<br>".$theProcessUrl;
        header("Location: $theProcessUrl"); 
    }  
    exit;     
      
}  




 function CreateHash($values, $IntegrationKey){
     $string = "";
     foreach($values as $key=>$value) {
         if( strtoupper($key) != "HASH" ){
         $string .= $value;
         }
     }
     $string .= $IntegrationKey;
     $hash = hash("sha512", $string);
     return strtoupper($hash);
 }

 function UrlIfy($fields) {  
        //url-ify the data for the POST  
        $delim = "";  
        $fields_string = "";  
        foreach($fields as $key=>$value) {  
            $fields_string .= $delim . $key . '=' . $value;  
            $delim = "&";  
        }  
  
        return $fields_string;  
    } 

function CreateMsg($values, $MerchantKey){  
        $fields = array();  
        foreach($values as $key=>$value) {  
           $fields[$key] = urlencode($value);  
        }  
  
        $fields["hash"] = urlencode(CreateHash($values, $MerchantKey));  
        //echo CreateHash($values, $MerchantKey);
        //exit;
        $fields_string = UrlIfy($fields);  
        return $fields_string;  
    } 

function ParseMsg($msg) {  
        //convert to array data  
        $parts = explode("&",$msg);  
        $result = array();  
        foreach($parts as $i => $value) {  
            $bits = explode("=", $value, 2);  
            $result[$bits[0]] = urldecode($bits[1]);  
        }  
  
        return $result;  
    }  


?>