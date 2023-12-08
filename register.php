<?php
include 'functions.php';
if(isset($_SESSION['id']))
{

} else  

 include 'f_register.php'; 

?>

	<?=template_header('Create')?>	
  
<br><br>
<center>
<div class="register">
    <h2>Enregistrer utilisateur</h2>

    <img src="images/dessin 2.jpg" alt="Avatar" class="avatar" width="50" height="50">
	
	<br><br>
	<hr>
 
   <form action="f_register.php" method="post">

  

  <table>
  <tr>
  <td>
   
	 <label for="psw">Code Employé</label>
</td>
<td>
    <input type="text" placeholder="Enter le code employé" name="code_employe" id="psw" required> 
	
	 	</td>
</tr>

<tr>
<td>
		<label for="name">Nom</label>
	</td>
	<td>
    <input type="text" placeholder="Enter le Nom" name="nom" id="name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)"   style="text-transform:uppercase" required>
</td>
</tr>
<tr>
<td>
	  <label for="name">Prénom</label>
</td>
<td>
    <input type="text" placeholder="Enter le Prenom" name="prenom" id="name"  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)"   style="text-transform:uppercase" required><br>
	

 </td>
</tr>
<tr>
<td>

    <label for="email">Email</label><br>
</td>
<td>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br>
	
	</td>
	</tr>
	<!--<tr>
<td>
	  <label for="name"><b>Pseudo</b></label> <br>
	  
 </td>
 <td>
    <input type="text" placeholder="Enter le Pseudo" name="username" id="name" required><br>
	
	</td>
	</tr> -->
	<tr>
	<td>
	
	
	 <label for="name">Rôle</label><br>
	  </td>
 <td>
	 <select name="role" id="name"  required>
    <option value="" id="name">--Selectionner une option--</option>
    <option value="Secretaire">Secretaire</option>
    <option value="Production">Production</option>
    <option value="Administrateur">Administrateur</option>

</select>    <br>

 </td>
</tr>
	
	<tr>
	<td>
    <label for="psw">Password</label><br>
	 </td>
	 <td>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br>
 </td>
 </tr>
 <tr>
 
  <td>
  
    <label for="psw-repeat">Repeat Password</label>
	 </td>
	 
	 <td>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br>
 </td>
	
		</tr>
</table>
    <!--<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

    <button type="submit" class="registerbtn">Enregistrer</button>
<!--
  
  <div class="container signin">
    <p>Vous avez déjà un compte? <a href="#">Connexion</a>.</p>
  </div> -->
  

</form>

</div>
 </center>
<?=template_footer()?>