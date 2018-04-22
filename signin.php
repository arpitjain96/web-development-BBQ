
<?php

session_start();
?>



<?php
$UserName= $_POST['EmailAddress'];
$Password= $_POST['Password'];

$con=mysqli_connect("localhost","root","","website") or die(mysqli_error());

$sql="SELECT * FROM rest WHERE EmailAddress='$UserName' and Password='$Password'";

$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);

if($count<1){echo "Wrong Username or Password";}
else
	{
			header("location:index1.php");
			

	}

ob_end_flush();
?>
