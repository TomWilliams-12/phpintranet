<?php include '../includes/adminHead.php'; ?>
<?php include '../includes/conn.php'; ?>


<div class="forms">
<h2 class="mreadings">Edit Phonelist</h2>
<form class="meters" action="editPhonelist.php" method="POST">
    <p>
        <label for="search">What is the name of the person you want to edit?</label>
        <input type="text" placeholder="Employee Name" name="search" id="search"></input>
    </p>
    <p>
        <button type="submit" class="btn" id="submitButton">Submit</button>
    </p>
</form>
</div>

<?php include '../includes/footer.php'; ?>