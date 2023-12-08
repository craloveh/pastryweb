
<html >
<head>
<link rel="Stylesheet" type="text/css" href="../../css/style.css"/>    
	
		<link rel="Stylesheet" type="text/css" href="../../css/menu.css"/>  

</head>

<body>

<div id="page">
<header>
			<div id="i1"></div>
			<h1>Connexion</h1>
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


<body>



<?php	
		include 'f_login.php';
 ?>
<div> 
<!--<a href="views/auth/Register.php">Register</a> -->
<a href="../auth/register.php"> Register</a>
</div>


<table  class='table table-hover table-responsive table-bordered'>
<tr>
<div id="login">
<h3>Login page</h3>

<form method="post" action="" name="login">
<label>Email</label>
<input type="text" name="emailid" autocomplete="off" />
<label>Password</label>
<input type="password" name="userpassowrd" autocomplete="off"/>

<div class="errorMsg"><?php echo $errorMessage; ?></div>
<input type="submit" class="button" name="submitloginform" value="Login">
</form>

</div>
</tr>
</table>


</div> <!-- end .container -->
     
     </article>
			
			
		
		</section>
		
		</div>
</body>

</html>