<link rel="stylesheet" href="css/table.css">
<section style="margin: 50px 0;">
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Crop ID</th>
                <th scope="col">Crop Name</th>
                <th scope="col">Yield Estimate</th>
                <th scope="col">Planting Date</th>
                <th scope="col">Harvest Date</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once "connect_db.php";
                    $id = $_SESSION['farmer_id'];
                    $query = "SELECT * FROM crops WHERE farmer_id = $id";
                    if ($result = $conn ->execute_query($query)) {
                        while ($row = $result -> fetch_assoc()) { 
                            $cid = $row['Crop_ID'];
                            $cropname = $row['CropName'];
                            $yield = $row['YieldEstimate'];
                            $pdate = $row['PlantingDate'];
                            $hdate = $row['HarvestDate'];   
                ?>
                
                <tr class="trow">
                    <td><?php echo $cid; ?></td>
                    <td><?php echo $cropname; ?></td>
                    <td><?php echo $yield; ?></td>
                    <td><?php echo $pdate; ?></td>
                    <td><?php echo $hdate; ?></td>
                    <td><a href="updatecrops.php?cid=<?php echo $cid; ?>" class="btn">Edit</a></td>
                    <td><a href="utils/deletecrops.php?cid=<?php echo $cid; ?>" class="btn">Delete</a></td>
                </tr>

                <?php
                        } 
                    }
                ?>
            </tbody>
            </table>
    </div>
</section>