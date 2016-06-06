<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use backendless\Backendless;
use backendless\model\BackendlessUser;
use backendless\model\Data;
include "backendless/autoload.php";

//variables
$id = "986D6461-07CC-02EE-FFFD-54CDD38B6800";
$amount = 20; 
 
 
    
Backendless::initApp('CBB6E8A0-4CC0-F84C-FF35-33F5F6297C00', 'A2B672F3-69CD-207F-FF83-6EE9412EAD00', 'v1');

//$current_user = Backendless::$UserService->login($_POST["username"], $_POST["password"]);
$current_user = Backendless::$UserService->login("chaddy", "dejanchaddy");


//var_dump($user);
//echo $current_user->getProperty("mari");

$current = (intval($current_user->getProperty("mari")));
$new_bal = $current+(intval($_POST["amount"]))*100;

$str = json_encode($_POST);

$current_user->setProperty("test",$str);

Backendless::$UserService->update( $current_user );

header("Location: success.php");

/*
//$last_contact = Backendless::$Persistence->of( 'Users ')->findLast( );

//$user = Backendless::$Persistence->of( 'Users')->findById("986D6461-07CC-02EE-FFFD-54CDD38B6800");

//Backendless::$Persistence->of("Users")->update( $user); 
$user = new BackendlessUser(); 78911
$user->setPassword("dejanchaddy");
$user->setProperty('name', "chaddy");
$user->setProperty('phone', "0603886630");
 
$registered_user = Backendless::$UserService->register( $user ); */

//echo "hello it works";


?>


