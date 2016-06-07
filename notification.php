<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use backendless\Backendless;
use backendless\model\BackendlessUser;
use backendless\model\Data;
include "backendless/autoload.php";



//variables
$key = "4481a3d3-610a-476d-9d78-51cb3c034289";
$IntegrationKey = $key ;
$amount = 20; 
 
 
//fetch order
$w = curl_init();  
$url_write = "https://people.cs.uct.ac.za/~rngkum001/".$_POST["paynowreference"];  
//echo "<br>".$url_write."<br>";
curl_setopt($w, CURLOPT_URL, $url_write);      
curl_setopt($w, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($w, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($w); 

//echo $res."  result";
curl_close($w);

$data = json_decode($res,true);

if (file_exists($value)) {
        unlink($value);
    } else {
        // code when file not found
    }


    
Backendless::initApp('CBB6E8A0-4CC0-F84C-FF35-33F5F6297C00', 'A2B672F3-69CD-207F-FF83-6EE9412EAD00', 'v1');

$current_user = Backendless::$UserService->login($data["u"], $data["p"]);
//$current_user = Backendless::$UserService->login("chaddy", "dejanchaddy");


//var_dump($user);
//echo $current_user->getProperty("mari");

$current = (intval($current_user->getProperty("mari")));
$new_bal = $current+(intval($_POST["amount"]))*100;



$current_user->setProperty("mari",$new_bal);

Backendless::$UserService->update( $current_user );
/*

function poll($poll_url,$integration_key){
     $p = curl_init();  
  
    //set the url, number of POST vars, POST data  
    curl_setopt($p, CURLOPT_URL,$poll_url);  
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

    echo "successfull";
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
    */

?>


