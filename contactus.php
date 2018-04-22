<?php

session_start();
?>



<?php
$Name=$_POST['Name'];
$EmailAddress=$_POST['EmailAddress'];

$Subject=$_POST['Subject'];

$con=mysqli_connect("localhost","root","","website") or die(mysqli_error());

$sql="insert into contact values( '$Name', '$EmailAddress','$Subject')";

$result=mysqli_query($con,$sql);

if($result>0){echo "THANKYOU FOR YOUR REGISTRATION";}

header("location:register1.php");

?>
