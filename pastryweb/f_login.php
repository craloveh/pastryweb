	<?php
include 'functions.php';
	 	$bdd = new PDO('mysql:host=localhost;dbname=db_gesttoken', 'root', '');
		
		  $email = ($_POST["email"]);
  //htmlspecialchars
 $pass = ($_POST["pass"]);

 //sha1
   if(!empty($email) AND !empty($pass)){
		
	$stmt = $bdd->prepare("SELECT * FROM tb_users WHERE email = ?");
$stmt->execute([$_POST['email']],);
$user = $stmt->fetch();

		if ($user && password_verify($_POST['pass'], $user['psw'])) 
		{
				$_SESSION['id'] = $user['id'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['pass'] = $user['pass'];
				$_SESSION['role'] = $user['role'];
		  	  $_SESSION['nom'] = $user['nom'];
			   $_SESSION['prenom'] = $user['prenom'];
			header("Location: index.php?id=".$_SESSION['id']);
		 
		} 	

		else 
		{
	
	   //
		if(isset($_SESSION['id']))
		{

		} else {  ?> 
     
		
	 
		<br><br><br><br><br><br><br><br>
	   <center>
	  
	   
	   <font color = "red" >
	   <h1>
	   Mot de passe incorrecte!
	   </h1>
	   </font>
	   
	   </center>
	   
	   <?php
	   
		}

//
		} 
		
 }		else
		{
	   
	   ?> 
     
		<?=template_header('register.php') ?>
	 
		<br><br><br><br><br><br><br><br>
	   <center>
	  
	   
	   <font color = "red" >
	   <h1>
	   les champs sont vide!
	   </h1>
	   </font>
	   
	   </center>
	   
	   <?php
		}
		

	

	
	
	//https://www.primfx.com/tuto-php-creer-espace-membre-2-3-profil-connexion-deconnexion-158/
	
	//https://www.oujood.com/ref-fonc-php/fonction-password_hash.php
	
	
	?>
	
	
	