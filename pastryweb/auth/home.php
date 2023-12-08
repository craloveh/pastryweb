<?php session_start(); 
include("session.php");
?>
<h1> welcome to home page, <span style="color:red;">
<?php echo $_SESSION['uname'] ; ?> </span> </h1>

<?php
echo "session ID is : ".$_SESSION['uid'] ;
?>
<br>
<a href="logout.php"> Logout </a>