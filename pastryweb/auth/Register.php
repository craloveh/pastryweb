


<?php session_start(); 
include("../auth/session.php");
?>






<!DOCTYPE HTML>
<html>
<head>
    <title>Ma Clinique</title>
     
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
	 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    
	 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	 
	 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	
	
	
	
       <link rel="Stylesheet" type="text/css" href="../../css/style.css"/>    

	
		<link rel="Stylesheet" type="text/css" href="../../css/menu.css"/>  
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
 
</head>
<body>

<div id="page">
<header>

			<div id="i1"></div>
			<h1> Ma Clinique<span style="color:red;">

</span> </h1>

			<h2>______________________________</h2>
		
	
		</header>

		<!--  Partie de la section -->
		<section>
				
			<article>
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Read Data</h1>
        </div>
         

<?php	
		include 'f_Register.php';
 ?>


<div>
<a href="login.php">Login</a>
</div>

<div id="register">
<h3>Registration page</h3>
<form method="post" action="" name="register">
<label>Name</label>
<input type="text" name="username" autocomplete="off" />
<label>Email</label>
<input type="text" name="emailid" autocomplete="off" />
<label>Fonction</label>



													
																<select id="issuer" class="xlarge switchable" name="service" required="">
																<!--<option value=""> </option> -->
																<option value="Secretaire" class="issuer_1">Secretaire</option>
																<option  value="Administrateur" class="issuer_1">Administrateur</option>
																<option value="Medecin" class="issuer_1">Medecin</option>
																
																	

																</select>
													
	
											
<!--<input type="text" name="service" autocomplete="off" /> -->
<label>Password</label>
<input type="password" name="userpassowrd" autocomplete="off"/>
<div class="errorMsg"><?php echo $errorMessage; ?></div>
<div class="sucessMsg"><?php echo $sucessMessage; ?></div>
<input type="submit" class="button" name="submitregistrationform" value="Register">



</form>
</div>




</div> <!-- end .container -->
     
     </article>
			
			
		
		</section>
		
		</div>
</body>

</html>