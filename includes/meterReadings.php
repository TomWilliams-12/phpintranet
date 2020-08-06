<?php 

include_once 'conn.php'; 

$siteName = $_POST['siteName'];
$department = $_POST['department'];
$serialNumber = $_POST['serial'];
$blackReading = $_POST['black'];
$colourReading = $_POST['colour'];

$sql = "INSERT INTO meterreadings (siteName, department, serialNumber, blackReading, colourReading) VALUES ('$siteName', '$department', '$serialNumber', '$blackReading', '$colourReading')";
mysqli_query($conn, $sql);

header("Location: ../index.php?reading=success");