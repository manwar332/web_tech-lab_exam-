<?php
session_start();
    
	 

$email=$password="";


if ($_SERVER['REQUEST_METHOD']!="POST")



{
	header ("Location:index.php");
}
else {
	
	$email =$_POST['email'];
	$password=$_POST['password'];
	if ($email=='1' && $password=='1234'){
		$_SESSION['email'] =$email;
		$_SESSION['password']=$password;
		{
		header("Location:success.php");
	}
		//var_dump($_SESSION);

	} 
	else{
		if (isset($_POST['login'])){
			$email =$_POST['email'];
	      $password=$_POST['password'];
	      if(empty($email) and empty($password))
	      {
	      	echo "null submission";
	      }

       else{

	    if (strlen($email) <=3)

	{
		echo "user name should be 3 charecters";
	}
	else {
		echo"wrond user name and password";
	}
}

		}
}
	

}


?>