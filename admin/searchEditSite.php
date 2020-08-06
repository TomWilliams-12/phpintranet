<?php include '../includes/adminHead.php'; ?>
<?php include '../includes/conn.php'; ?>


<div class="forms">
<h2 class="mreadings">Edit Site</h2>
<form class="meters" action="editSite.php" method="POST">
    <p>
        <label for="search">What is the site name you want to edit?</label>
        <input type="text" placeholder="Site Name" name="search" id="search"></input>
    </p>
    <p>
        <button type="submit" class="btn" id="submitButton">Submit</button>
    </p>
</form>
</div>




<?php include '../includes/footer.php'; ?>