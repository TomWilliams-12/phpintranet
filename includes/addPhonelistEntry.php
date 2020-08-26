<?php 

include_once 'conn.php'; 

$name = $_POST['name'];
$jobTitle = $_POST['jobTitle'];
$phoneNumber = $_POST['phoneNumber'];
$extension = $_POST['extension'];
$mobileNumber = $_POST['mobileNumber'];
$mobileExtension = $_POST['mobileExtension'];
$region = $_POST['region'];


$sql = "INSERT INTO phonelist (name, jobTitle, phoneNumber, extension, mobileNumber, region) VALUES ('$name', '$jobTitle', '$phoneNumber', '$extension', '$mobileNumber','$region')";
mysqli_query($conn, $sql);

header("Location: ../admin.php?submit=success");