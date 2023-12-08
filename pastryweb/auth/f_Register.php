<?php

include("userValidationClass.php");
$userClass = new UserClass();

$errorMessage = "" ;
$sucessMessage = "" ;
if (!empty($_POST['submitregistrationform'])) {
 
 
$username=$_POST['username'];
$email=$_POST['emailid'];
$servic=$_POST['service'];
$password=$_POST['userpassowrd'];
//$date= date();
/* Regular expression check */
$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
//$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

if($username_check && $email_check  ){
 
     $uid=$userClass->userRegistration($username,$email,$servic,$password);
 
 if($uid){
  
   $sucessMessage = "Registration successful, Pleases   "."<a href='login.php'>Login</a>" ;
  
 }
 else{
  $errorMessage = "Email-ID already exists";
 }
 
 
}
else{
 $errorMessage = "Veuillez entre le bo format du password. au moins une Lettre Majuscule+chfiffre ";
} 
 
}

?>