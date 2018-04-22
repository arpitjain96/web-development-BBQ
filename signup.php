<?php

session_start();
?>



<?php
$UserName=$_POST['UserName'];
$EmailAddress=$_POST['EmailAddress'];

$Password=$_POST['Password'];
$Contact=$_POST['Contact'];

$con=mysqli_connect("localhost","root","","website") or die(mysqli_error());

$sql="insert into rest values( '$UserName', '$EmailAddress','$Password','$Contact')";

$result=mysqli_query($con,$sql);

if($result>0){echo "THANKYOU FOR YOUR REGISTRATION";}

header("location:register1.php");

?>
