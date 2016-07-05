<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use backendless\Backendless;
use backendless\model\BackendlessUser;
use backendless\model\Data;
include "backendless/autoload.php";
session_start();
//check login details
try {
  Backendless::initApp('CBB6E8A0-4CC0-F84C-FF35-33F5F6297C00', 'A2B672F3-69CD-207F-FF83-6EE9412EAD00', 'v1');
  $current_user = Backendless::$UserService->login($_REQUEST["username"], $_REQUEST["password"]);
  //If the exception is thrown, this text will not be shown
  if($_REQUEST["validate"]){
      $_SESSION["user"]= $current_user;
      $_SESSION["name"]=$current_user->name;
      echo "success";

  }
  
}

//catch exception
catch(Exception $e) {
  //echo 'error occurred, you either entered incorrect yzia username or yzia password';
  echo $e;
  //header("Location: error.php");
  exit;
}

?>

