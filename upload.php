<?php
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "<script type='text/javascript'>alert('The file has been uploaded');</script>" ;
} else{
    echo "<script type='text/javascript'>alert('There was an error uploading the file, please try again!');</script>";
}
?>