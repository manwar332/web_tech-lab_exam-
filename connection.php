<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="social_network";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn)
{
	echo "ok";
}
else
{
	die ("conn faild".mysqli_connect_error());
}



?>