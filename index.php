<?php include 'includes/head.php'; ?>
<?php include 'includes/conn.php'; ?>


        <div class="main-content">
            <div class="site-info">
                <div class="regional-buttons">
                    <button id="northbtn" class="activebtn" onclick="showNorth()">Northern</button>
                    <button id="midlandsbtn" onclick="showMidlands()">Midlands</button>
                </div>
                <div class="sites">
                    <div id="north" class="northern-sites active">
                        <?php 
                        $northSql = "SELECT * FROM sites WHERE region='Northern';";
                        $northResult = mysqli_query($conn, $northSql);
                        $resultCheck = mysqli_num_rows($northResult);

                        if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($northResult)){
                                echo "<div><a href='site.php?id=" . $row['id'] . "'><img src=" . $row['imageUrl'] . "></a></div>";
                            }
                        }
                        
                        ?>
                        <!-- <div><a href="#"><img src="img/culcheth.jpg"></a></div>
                        <div><a href="#"><img src="img/derwent.jpg"></a></div>
                        <div><a href="#"><img src="img/handforth.jpg"></a></div>
                        <div><a href="#"><img src="img/Kinnerton.jpg"></a></div>
                        <div><a href="#"><img src="img/lindow.jpg"></a></div>
                        <div><a href="#"><img src="img/mossley.jpg"></a></div>
                        <div><a href="#"><img src="img/dunes.jpg"></a></div> -->
                    </div>
                    <div id="midlands" class="sites midlands-sites hidden">
                    <?php 
                        $northSql = "SELECT * FROM sites WHERE region='Midlands';";
                        $northResult = mysqli_query($conn, $northSql);
                        $resultCheck = mysqli_num_rows($northResult);

                        if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($northResult)){
                                echo "<div><a href='site.php?id=" . $row['id'] . "'><img src=" . $row['imageUrl'] . "></a></div>";
                            }
                        }
                        
                        ?>
                        <!-- <div><a href="#"><img src="img/stthomas.jpg"></a></div>
                        <div><a href="#"><img src="img/brookmeadow.jpg"></a></div>
                        <div><a href="#"><img src="img/walcot.jpg"></a></div>
                        <div><a href="#"><img src="img/orchadside.jpg"></a></div>
                        <div><a href="#"><img src="img/stableford.jpg"></a></div>
                        <div><a href="#"><img src="img/hyde.jpg"></a></div>
                        <div><a href="#"><img src="img/avalon.jpg"></a></div>
                        <div><a href="#"><img src="img/gateway.jpg"></a></div>
                        <div><a href="#"><img src="img/weavers.jpg"></a></div>
                        <div><a href="#"><img src="img/pippards.jpg"></a></div> -->
                    </div>
                </div>
            </div>
            <div class="forms">
                <div class="meter-readings">
                    <h2 class="mreadings">Printer Meter Readings</h2>
                    <form class="meters" action="includes/meterReadings.php" method="POST">
                        <p>
                            <label for="sitename">Site Name:</label>
                            <input type="text" placeholder="What site are you on?" name="siteName" id="siteName">
                        </p>
                        <p>
                            <label for="department">Department:</label>
                            <input type="text" placeholder="Site or Sales?" name="department" id="department">
                        </p>
                        <p>
                            <label for="serial">Serial Number:</label>
                            <input type="text" placeholder="What is the Serial number of the printer?" name="serial" id="serial">
                        </p>
                        <p>
                            <label for="black">Black Reading:</label>
                            <input type="text" placeholder="what is the black reading?" name="black" id="black">
                        </p>
                        <p>
                            <label for="colour">Colour Reading:</label>
                            <input type="text" placeholder="what is the colour reading?" name="colour" id="colour">
                        </p>
                        <p>
                            <button type="submit" class="btn" id="submitButton">Submit</button>
                        </p>
                    </form>
                </div>
                <br>
                <div class="toner-request">
                <h2 class="mreadings">Printer Toner Request</h2>
                    <form class="meters" action="includes/tonerRequest.php" method="POST">
                        <p>
                            <label for="sitename">Site Name:</label>
                            <input type="text" placeholder="What site are you on?" name="siteName" id="siteName">
                        </p>
                        <p>
                            <label for="department">Department:</label>
                            <input type="text" placeholder="Site or Sales?" name="department" id="department">
                        </p>
                        <p>
                            <label for="serial">Serial Number:</label>
                            <input type="text" placeholder="What is the Serial number of the printer?" name="serial" id="serial">
                        </p>
                        <p>
                            <label for="black">Black Reading:</label>
                            <input type="text" placeholder="what is the black reading?" name="black" id="black">
                        </p>
                        <p>
                            <label for="colour">Colour Reading:</label>
                            <input type="text" placeholder="what is the colour reading?" name="colour" id="colour">
                        </p>
                        <p>
                            <label for="toners">Toners Needed:</label><br>
                            <input type="text" placeholder="what toners do you require?" name="toner" id="toner">
                        </p>
                        <p>
                            <button type="submit" class="btn" id="submitButton">Submit</button>
                        </p>
                    </form>
                </div>
                <div class="tardis">
                    <!-- this is a form -->
                </div>
            </div>
        </div>
   

<!-- SCRIPTS -->
<script src="js/main.js"></script>


<?php include 'includes/footer.php'; ?>