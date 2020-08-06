<?php 

include_once 'conn.php'; 

    $siteName = $_POST['siteName'];
    $department = $_POST['department'];
    $serialNumber = $_POST['serial'];
    $blackReading = $_POST['black'];
    $colourReading = $_POST['colour'];
    $toners = $_POST['toner'];
    $subject = $siteName." ".$department." Toner Request";

    $mailTo = "tom.williams@elan-homes.co.uk";
    $headers = "From: ".$siteName." ".$department." Toner Request";
    $txt = "Can I please order the following toners ".$toners." .\n\n Serial Number: ".$serialNumber."\n Black Reading: ".$blackReading. "\n Colour Reading: ".$colourReading

    mail($mailTo, $subject, $txt, $headers);


 header("Location: ../index.php?mailsend=success");