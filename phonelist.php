<?php include 'includes/head.php'; ?>
<?php include 'includes/conn.php'; ?>

<div class="phonelist">
        <input type="text" id="myInput" onkeyup="filterTable()" placeholder="Search for Name or Region" title="Type in a name">

            
        <table id="myTable">
        <tr class="tableheader">
            <th style="width:15%;">Name</th>
            <th style="width:15%;">Job Title</th>
            <th style="width:15%;">Telephone Number</th>
            <th style="width:5%;">Extension</th>
            <th style="width:15%;">Mobile Number</th>
            <th style="width:5%;">Mobile Extension</th>
            <th style="width:5%;">Region</th>
        </tr>

<?php 
                        $sql = "SELECT * FROM phonelist ORDER BY name ASC;";
                        $phoneResult = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($phoneResult);

                        if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($phoneResult)){
                                echo "<tr'>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['jobTitle']."</td>";
                                echo "<td>".$row['phoneNumber']."</td>";
                                echo "<td>".$row['extension']."</td>";
                                echo "<td>".$row['mobileNumber']."</td>";
                                echo "<td>".$row['mobileExtension']."</td>";
                                echo "<td>".$row['region']."</td>";
                                echo "</tr>";
                            }
                        }
                        
                        ?>
</table>

</div>

<script>
        function filterTable(event) {
            var filter = event.target.value.toUpperCase();
            var rows = document.querySelector("#myTable").rows;
            
            for (var i = 1; i < rows.length; i++) {
                var firstCol = rows[i].cells[0].textContent.toUpperCase();
                var secondCol = rows[i].cells[6].textContent.toUpperCase();
                if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }      
            }
        }
        
        document.querySelector('#myInput').addEventListener('keyup', filterTable, false);
        </script>

<?php include 'includes/footer.php'; ?>