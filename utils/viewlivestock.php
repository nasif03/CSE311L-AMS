<link rel="stylesheet" href="css/table.css">
<section style="margin: 50px 0;">
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Livestock_ID</th>
                <th scope="col">Animal Type</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Weight</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once "connect_db.php";
                    $id = $_SESSION['farmer_id'];
                    $query = "SELECT * FROM livestock WHERE farmer_id = $id";
                    if ($result = $conn ->execute_query($query)) {
                        while ($row = $result -> fetch_assoc()) { 
                            $lid = $row['Livestock_ID'];
                            $type = $row['AnimalType'];
                            $age = $row['Age'];
                            $gender = $row['Gender'];
                            $weight = $row['Weight'];   
                ?>
                
                <tr class="trow">
                    <td><?php echo $lid; ?></td>
                    <td><?php echo $type; ?></td>
                    <td><?php echo $age; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $weight; ?></td>
                    <td><a href="updatelivestock.php?lid=<?php echo $lid; ?>" class="btn">Edit</a></td>
                    <td><a href="deletelivestock.php?lid=<?php echo $lid; ?>" class="btn">Delete</a></td>
                </tr>

                <?php
                        } 
                    }
                ?>
            </tbody>
            </table>
    </div>
</section>