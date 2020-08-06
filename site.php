<?php include 'includes/head.php'; ?>
<?php include 'includes/conn.php'; ?>

<?php
    $sql = "SELECT * FROM sites WHERE id=".$_GET['id'];
    $sqlQuery = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($sqlQuery);
    $row = mysqli_fetch_assoc($sqlQuery)
?>

<div class="site-content">
    <div class="site-image"> 
        <img src="<?php echo $row['imageUrl'] ?>" />
    </div>
<div class="site-details">
    <h1>Site Details</h1>
    <hr>
    <ul>
        <li> Site Manager: <?php echo $row['siteManager'] ?></li>
        <li> Site Email: <?php echo $row['siteEmail'] ?></li>
        <li> Site Number: <?php echo $row['siteNumber'] ?></li>
    </ul>
</div>
<div class="sales-details">
<h1>Sales Details</h1>
<hr>
    <ul>
        <li> Sales Exec: <?php echo $row['salesExec'] ?></li>
        <li> Sales Email: <?php echo $row['salesEmail'] ?></li>
        <li> Sales Number: <?php echo $row['salesNumber'] ?></li>
    </ul>
</div>
</div>


<div id="map"></div>


<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $row['latitude'] ?>, lng: <?php echo $row['longitude'] ?>},
          zoom: 12
        });

        var myLatLng = {lat: <?php echo $row['latitude'] ?>, lng: <?php echo $row['longitude'] ?>};

        var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: '<?php echo $row['siteName'] ?>'
  });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCufbhCqoehfUwHR5WKoGtvpQmMazg4EsU&callback=initMap"></script>

<?php include 'includes/footer.php'; ?>

