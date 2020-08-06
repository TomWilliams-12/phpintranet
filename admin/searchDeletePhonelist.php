<?php include '../includes/adminHead.php'; ?>
<?php include '../includes/conn.php'; ?>


    <div class="forms">
        <h2 class="mreadings">Delete Row from Phone List</h2>
        <form class="meters" action="processDeletePhonelist.php" method="POST">
            <p>
                <label for="search">What is the name of the person you want to delete?</label>
                <input type="text" placeholder="Person Name" name="name" id="name"></input>
            </p>
            <p>
                <button type="submit" class="btn" id="submitButton">Submit</button>
            </p>
        </form>
    </div>




<?php include '../includes/footer.php'; ?>