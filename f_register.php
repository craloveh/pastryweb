<?php
include 'functions.php';

$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
	
try{
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
  //  $code_employe = isset($_POST['code_employe']) ? $_POST['code_employe'] : '';
    $nom= isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	//$username = isset($_POST['username']) ? $_POST['username'] : '';
	$role = isset($_POST['role']) ? $_POST['role'] : '';
	$psw = isset($_POST['psw']) ? $_POST['psw'] : '';
	 // $psw = password_hash($_POST['psws'], PASSWORD_DEFAULT);
	$psw_repeat = isset($_POST['psw_repeat']) ? $_POST['psw_repeat'] : '';
    $created_at = isset($_POST['created_at']) ? $_POST['created_at'] : date('Y-m-d H:i:s');
    // Insert new record into the contacts table
	$options = array("cost"=>4);
	$hashedpassword= password_hash($psw,PASSWORD_BCRYPT,$options);
    $stmt = $pdo->prepare('INSERT INTO tb_users VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id,$nom, $prenom, $email ,$role,$hashedpassword,$psw_repeat,$created_at]);
    // ,$username Output message
	
    header("Location: read.php");
	}
	catch(Exception $e) {
	 header("Location: 	register.php");
  echo "verifier les informations code, email, username";
}
}
?><?=template_header('Create.php') ?>