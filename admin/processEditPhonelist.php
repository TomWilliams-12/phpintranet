<?php 

include_once '../includes/conn.php'; 

$name = $_POST['name'];
$jobTitle = $_POST['jobTitle'];
$phoneNumber = $_POST['phoneNumber'];
$extension = $_POST['extension'];
$mobileNumber = $_POST['mobileNumber'];
$mobileExtension = $_POST['mobileExtension'];
$region = $_POST['region'];

$sql = "UPDATE phonelist SET name= '$name', jobTitle='$jobTitle', phoneNumber='$phoneNumber', extension='$extension', mobileNumber='$mobileNumber',mobileExtension='$mobileExtension', region='$region' WHERE name='$name'";
mysqli_query($conn, $sql);

header("Location: ../admin.php?submit=success");