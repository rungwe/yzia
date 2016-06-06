<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
	
$w = curl_init();  
$url_write = "https://people.cs.uct.ac.za/~rngkum001/144025";  
//echo "<br>".$url_write."<br>";
curl_setopt($w, CURLOPT_URL, $url_write);      
curl_setopt($w, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($w, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($w); 

//echo $res."  result";
curl_close($w);

$data = json_decode($res,true);
var_dump($data);
/*
   $host        = "host=postgres://tfqqjzghxtlayd:SmothSsL1AHwYQLJT4RGW8GpTj@ec2-54-163-239-218.compute-1.amazonaws.com:5432/d9levj0hnf27er";
   $port        = "port=5432";
   $dbname      = "dbname=d9levj0hnf27er";
   $credentials = "user=tfqqjzghxtlayd password=SmothSsL1AHwYQLJT4RGW8GpTj";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

   */
?>


