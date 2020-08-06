<?php

$dbServername ="localhost";
$dbUsername = "root";
$dbPassword = "ElanHomes01";
$dbName = "intranet";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);



// sql to create table
// $sql = "CREATE TABLE meterReadings (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     siteName VARCHAR(30) NOT NULL,
//     department VARCHAR(30) NOT NULL,
//     serialNumber VARCHAR(200),
//     blackReading VARCHAR(200),
//     colourReading VARCHAR(200)
//     )";