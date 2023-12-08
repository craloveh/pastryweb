<?php

include("userValidationClass.php");
$userClass = new UserClass();

$errorMessage = "" ;

if (!empty($_POST['submitloginform'])) {
 
 $email=$_POST['emailid'];
    $password=$_POST['userpassowrd'];
  
 if(strlen(trim($email))>1 && strlen(trim($password))>1 ){
  
  $uid=$userClass->userLogin($email,$password);
        if($uid){
   $url='../sima/index.php';
   // http://localhost/ma_clinique/views/auth/login.php
   //home.php
            header("Location: $url"); // Page redirecting to home.php 
  }
  else{
   $errorMessage = "Please enter the valid credential" ;
  }
  
 }
 else{
  $errorMessage = "Please Enter the valid details" ;
  
 }
 

} 
?>