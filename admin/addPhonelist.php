<?php include '../includes/adminHead.php'; ?>
<?php include '../includes/conn.php'; ?>

<div class="forms">
                    <h2 class="mreadings">Add Phone List Entry</h2>
                    <form class="meters" action="../includes/addPhonelistEntry.php" method="POST">
                        <p>
                            <label for="sitename">Name:</label>
                            <input type="text" placeholder="What is the name?" name="name" id="name">
                        </p>
                        <p>
                            <label for="department">Job Title:</label>
                            <input type="text" placeholder="What is the job title?" name="jobTitle" id="jobTitle">
                        </p>
                        <p>
                            <label for="serial">Phone Number:</label>
                            <input type="text" placeholder="What is the landline number" name="phoneNumber" id="phoneNumber">
                        </p>
                        <p>
                            <label for="black">Phone Extension:</label>
                            <input type="text" placeholder="what is the extention number?" name="extension" id="extension">
                        </p>
                        <p>
                            <label for="colour">Mobile Number:</label>
                            <input type="text" placeholder="what is the mobile number?" name="mobileNumber" id="mobileNumber">
                        </p>
                        <p>
                            <label for="colour">Mobile Extension:</label>
                            <input type="text" placeholder="what is the mobile extension?" name="mobileExtension" id="mobileExtension">
                        </p>
                        <p>
                            <label for="colour">Region:</label>
                            <input type="text" placeholder="what is the region?" name="region" id="region">
                        </p>
                        <p>
                            <button type="submit" class="btn" id="submitButton">Submit</button>
                        </p>
                    </form>
                </div>

<?php include '../includes/footer.php'; ?>