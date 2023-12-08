<?php
Class UserClass{

// connect to mysql database 
public function DBConnect(){

$dbhost ="localhost"; // set the hostname
$dbname ="db_sima" ; // set the database name
$dbuser ="root" ; // set the mysql username
$dbpass ="";  // set the mysql password


try {
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;

}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
 
 
 
} 
// logic and validation for user registration page
public function userRegistration($username,$email,$servic,$password){

try{
$dbConnection = $this->DBConnect();
$stmt = $dbConnection->prepare('SELECT * FROM `user` WHERE `EMAILID` = :EMAILID ');
$stmt->bindParam(":EMAILID", $email,PDO::PARAM_STR);
$stmt->execute();

$Count = $stmt->rowCount();
if($Count < 1){
// insert the new record when match not found...
$stmt = $dbConnection->prepare('INSERT INTO `user`(USERNAME,EMAILID,service,PASSWORD,JOINDATE) 
VALUES(:USERNAME,:EMAILID,:service,:PASSWORD,:JOINDATE)');
$joindate =  date("F j, Y, g:i a"); 
$hash_password= hash('sha256', $password); //Password encryption
$stmt->bindParam(':USERNAME', $username,PDO::PARAM_STR ); 
$stmt->bindParam(':EMAILID', $email,PDO::PARAM_STR); 
$stmt->bindParam(':service', $servic,PDO::PARAM_STR); 
$stmt->bindParam(':PASSWORD', $hash_password,PDO::PARAM_STR ); 
$stmt->bindParam(':JOINDATE', $joindate,PDO::PARAM_STR); 
$stmt->execute();

$Count = $stmt->rowCount();

if($Count  == 1 ) {
$uid=$dbConnection->lastInsertId(); // Last inserted row id
$dbConnection = null;

return true;  

}
else{
$dbConnection = null;
return false; 
}
 
}
else{
 //echo "Email-ID already exits";
$dbConnection = null;
return false; 
}
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
 
} 
 
// logic and validation for user login page
public function userLogin($email,$password){
 
 try{
  $dbConnection = $this->DBConnect();
        $stmt = $dbConnection->prepare('SELECT * FROM `user` 
  WHERE `EMAILID` = :EMAILID and `PASSWORD` = :PASSWORD');
  $hash_password= hash('sha256', $password); 
  $stmt->bindParam(":EMAILID", $email,PDO::PARAM_STR);
    $stmt->bindParam(":PASSWORD", $hash_password,PDO::PARAM_STR);
 
  $stmt->execute();

  $Count = $stmt->rowCount();
  $data=$stmt->fetch(PDO::FETCH_OBJ);
  if($Count == 1){
   session_start();
   $_SESSION['uid']=$data->UID; // Storing user session value
   $_SESSION['uname']=$data->USERNAME; 
     $_SESSION['service']=$data->service; 
	// Storing user session value
   $dbConnection = null ;
            return true;
      
  }
  else{
   $dbConnection = null ;
            return false ;
   
  }
  
 }
 catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
 }
 
} 
 
}
?>