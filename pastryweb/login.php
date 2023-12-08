<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" >

<link rel="stylesheet"  type="text/css" href="css/style_login.css">

</head>
<body>

<h2></h2>

<form action="f_login.php" method="POST">


  <div class="imgcontainer">
    <img src="images/dessin 2.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
	<input type="text"  placeholder="Enter Username" name="email" >
    

    <label for="psw"><b>Password</b></label>
  <!--  <input type="password" placeholder="Enter Password" name="psw" required> -->
     <input type="password" placeholder="Enter Password" name="pass" >   
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
   <center>  <button type="button" class="cancelbtn">Cancel</button> <center>
    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
  </div>
</form>
<!-- a href="register.php">Vous inscrire</a> -->
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;  
?>  
</body>
</html>
