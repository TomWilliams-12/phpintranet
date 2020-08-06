<?php include '../includes/adminHead.php'; ?>
<?php include '../includes/conn.php'; ?>
<?php 


$name = $_POST['search'];



$sql = "SELECT * from phonelist WHERE name='$name';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='forms'>";
        echo "<h2>Edit ".$row['siteName']."</h2>";
        echo "<form class='meters' action='processEditPhonelist.php?id=".$row['id']."' method='POST'>";
        echo "<p>";
        echo "<label for='name'>What is the new name?</label>";
        echo "<input type='text' value='".$row['name']."' name='name'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='jobTitle'>What is the new job title?</label>";
        echo "<input type='text' value='".$row['jobTitle']."' name='jobTitle'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='phoneNumber'>What is the new phone number?</label>";
        echo "<input type='text' value='".$row['phoneNumber']."' name='phoneNumber'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='extension'>Who is the new extension?</label>";
        echo "<input type='text' value='".$row['extension']."' name='extension'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='mobileNumber'>What is the new mobile number?</label>";
        echo "<input type='text' value='".$row['mobileNumber']."' name='mobileNumber'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='mobileExtension'>What is the new mobile extension?</label>";
        echo "<input type='text' value='".$row['mobileExtension']."' name='mobileExtension'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='region'>What is the new region?</label>";
        echo "<input type='text' value='".$row['region']."' name='region'></input>";
        echo "</p>";
        echo "<p>";
        echo "<button type='submit' class='btn' id='submitButton'>Update</button>";
        echo "</p>";
        echo "</form>";
        echo "</div>";
    }
}


 include '../includes/footer.php'; ?>