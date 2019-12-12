<?php

include ("connection.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="" method="GET">
		ID<input type="text" name="id" value=""> <br>
		password<input type="password" name="password" value=""> <br>
		Confirm password<input type="password" name="cpassword" value=""> <br>
		<input type="submit" name="submit" value="Submit"> <br>

	</form>
	<?php
if ($_GET['submit'])
{
	$rn=$_GET['id'];
	$sn=$_GET['password'];
	$cl=$_GET['cpassword'];




if ($rn!="" && $sn!="" && $cl!="")
{
	$query ="insert into student1 values ('$rn','$sn','$cl')";

	$data = mysqli_query($conn, $query);
	
	//die(mysqli_error());
	if ($data)
	{
		echo "data inserted";
	}
}
	else
	{
		echo "all fields are required";
	}
	

}
?>
</body>
</html>