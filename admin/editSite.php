<?php include '../includes/adminHead.php'; ?>
<?php include '../includes/conn.php'; ?>
<?php 


$name = $_POST['search'];



$sql = "SELECT * from sites WHERE siteName='$name';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='forms'>";
        echo "<h2>Edit ".$row['siteName']."</h2>";
        echo "<form class='meters' action='processEditSite.php?id=".$row['id']."' method='POST'>";
        echo "<p>";
        echo "<label for='siteName'>What is the new site name?</label>";
        echo "<input type='text' value='".$row['siteName']."' name='siteName'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='region'>What is the new region?</label>";
        echo "<input type='text' value='".$row['region']."' name='region'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='imageUrl'>What is the new image Url?</label>";
        echo "<input type='text' value='".$row['imageUrl']."' name='imageUrl'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='siteManager'>Who is the new site manager?</label>";
        echo "<input type='text' value='".$row['siteManager']."' name='siteManager'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='siteEmail'>What is the new siteEmail?</label>";
        echo "<input type='text' value='".$row['siteEmail']."' name='siteEmail'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='siteNumber'>What is the new site number?</label>";
        echo "<input type='text' value='".$row['siteNumber']."' name='siteNumber'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='salesEmail'>What is the new sales email?</label>";
        echo "<input type='text' value='".$row['salesEmail']."' name='salesEmail'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='salesNumber'>What is the new sales number?</label>";
        echo "<input type='text' value='".$row['salesNumber']."' name='salesNumber'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='siteAddress'>What is the new site address?</label>";
        echo "<input type='text' value='".$row['siteAddress']."' name='siteAddress'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='longitude'>What is the new longitude?</label>";
        echo "<input type='text' value='".$row['longitude']."' name='longitude'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='latitude'>What is the new latitude?</label>";
        echo "<input type='text' value='".$row['latitude']."' name='latitude'></input>";
        echo "</p>";
        echo "<p>";
        echo "<label for='salesExec'>Who is the new sales exec?</label>";
        echo "<input type='text' value='".$row['salesExec']."' name='salesExec'></input>";
        echo "</p>";
        echo "<p>";
        echo "<button type='submit' class='btn' id='submitButton'>Update</button>";
        echo "</p>";
        echo "</form>";
        echo "</div>";
    }
}


 include '../includes/footer.php'; ?>