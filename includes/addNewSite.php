<?php 

include_once 'conn.php'; 

$siteName = $_POST['siteName'];
$region = $_POST['region'];
$imageUrl = $_POST['imageUrl'];
$siteManager = $_POST['siteManager'];
$siteEmail = $_POST['siteEmail'];
$siteNumber = $_POST['siteNumber'];
$salesEmail = $_POST['salesEmail'];
$salesNumber = $_POST['salesNumber'];
$siteAddress = $_POST['siteAddress'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$salesExec = $_POST['salesExec'];


$sql = "INSERT INTO sites (siteName, region, imageUrl, siteManager, siteEmail, siteNumber, salesEmail, salesNumber, siteAddress, longitude, latitude, salesExec) VALUES ('$siteName', '$region', '$imageUrl', '$siteManager', '$siteEmail','$siteNumber','$salesEmail','$salesNumber','$siteAddress','$longitude','$latitude','$salesExec')";
mysqli_query($conn, $sql);

header("Location: ../index.php?submit=success");