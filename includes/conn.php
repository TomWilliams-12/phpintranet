<?php

$dbServername ="eu-cdbr-west-03.cleardb.net/heroku_c9893a73f923e06";
$dbUsername = "b56cb063f2b2a6";
$dbPassword = "e39651ee";
$dbName = "heroku_c9893a73f923e06";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



// sql to create table
// $sql = "CREATE TABLE meterReadings (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     siteName VARCHAR(30) NOT NULL,
//     department VARCHAR(30) NOT NULL,
//     serialNumber VARCHAR(200),
//     blackReading VARCHAR(200),
//     colourReading VARCHAR(200)
//     )";
