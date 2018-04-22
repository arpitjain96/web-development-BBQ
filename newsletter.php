<?php

session_start();
?>



<?php

$EmailAddress=$_POST['EmailAddress'];

$con=mysqli_connect("localhost","root","","website") or die(mysqli_error());

$sql="insert into news values('$EmailAddress')";

$result=mysqli_query($con,$sql);

if($result>0){echo "THANKYOU FOR YOUR REGISTRATION";}

header("location:register1.php");

?>
