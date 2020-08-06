<?php


include_once '../includes/conn.php';

$name = $_POST['name'];

$sql = "DELETE FROM phonelist WHERE name='$name'";
mysqli_query($conn, $sql);

header("Location: ../admin.php?submit=success");