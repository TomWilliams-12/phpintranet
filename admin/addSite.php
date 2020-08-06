<?php include '../includes/adminHead.php'; ?>
<?php include '../includes/conn.php'; ?>

<div class="forms">
                    <h2 class="mreadings">Add Site</h2>
                    <form class="meters" action="../includes/addNewSite.php" method="POST">
                        <p>
                            <label for="sitename">Site Name:</label>
                            <input type="text" placeholder="What is the site name?" name="siteName" id="siteName">
                        </p>
                        <p>
                            <label for="department">Region:</label>
                            <input type="text" placeholder="Which region is it in?" name="region" id="region">
                        </p>
                        <p>
                            <label for="serial">Image URL:</label>
                            <input type="text" placeholder="img/imageName.jpg?" name="imageUrl" id="imageUrl">
                        </p>
                        <p>
                            <label for="black">Site Manager:</label>
                            <input type="text" placeholder="who is the site manager?" name="siteManager" id="siteManager">
                        </p>
                        <p>
                            <label for="colour">Site Email:</label>
                            <input type="text" placeholder="what is the site email?" name="siteEmail" id="siteEmail">
                        </p>
                        <p>
                            <label for="colour">Site Number:</label>
                            <input type="text" placeholder="what is the site phone number?" name="siteNumber" id="siteNumber">
                        </p>
                        <p>
                            <label for="colour">Sales Email:</label>
                            <input type="text" placeholder="what is the sales email?" name="salesEmail" id="salesEmail">
                        </p>
                        <p>
                            <label for="colour">Sales Number:</label>
                            <input type="text" placeholder="what is the sales phone number?" name="salesNumber" id="salesNumber">
                        </p>
                        <p>
                            <label for="colour">Site Address:</label>
                            <input type="text" placeholder="what is the site address?" name="siteAddress" id="siteAddress">
                        </p>
                        <p>
                            <label for="colour">Site longitude:</label>
                            <input type="text" placeholder="what is the site longitude?" name="longitude" id="longitude">
                        </p>
                        <p>
                            <label for="colour">Site Latitude:</label>
                            <input type="text" placeholder="what is the site latitude?" name="latitude" id="latitude">
                        </p>
                        <p>
                            <label for="colour">Sales Exec:</label>
                            <input type="text" placeholder="who is the sales exec?" name="salesExec" id="SalesExec">
                        </p>
                        <p>
                            <button type="submit" class="btn" id="submitButton">Submit</button>
                        </p>
                    </form>
                </div>



<?php include '../includes/footer.php'; ?>