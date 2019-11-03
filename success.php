<?php
session_start();
session_destroy();


if(empty($_SESSION['email'])){
		header ("Location:success.php");
}


?>
<h1>Welcome <?php 


			echo $_SESSION['email']; 
	

?> </h1>


<a href ="Profile.php"> Profile </a> <br>
<a href ="Change Password.php"> Change password </a> <br>
<a href ="View Users.php"> View Users </a> <br>
<a href ="Log Out.php"> Logout </a> <br>


 

