<?php 

include_once '../includes/conn.php'; 

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

$sql = "UPDATE sites SET siteName= '$siteName', region='$region', imageUrl='$imageUrl', siteManager='$siteManager', siteEmail='$siteEmail',siteNumber='$siteNumber', salesEmail='$salesEmail', salesNumber='$salesNumber', siteAddress='$siteAddress', longitude='$longitude',latitude='$latitude', salesExec='$salesExec' WHERE siteName='$siteName'";
mysqli_query($conn, $sql);

header("Location: ../admin.php?submit=success");