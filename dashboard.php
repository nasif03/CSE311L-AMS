<?php 
    session_start();
    if (!isset($_SESSION['farmer_id'])) {
        header("Location: login.php"); // Redirect to login if not logged in
        exit;
    }

    include("frontend/header.php");
    include("utils/connect_db.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div style="margin:50px auto;">
        <p>Expected Yield in future: 
        <?php 
            $id = $_SESSION['farmer_id'];
            $d = date("Y-m-d");
            $query = "SELECT SUM(YieldEstimate) FROM crops 
                        WHERE harvestdate > $d AND farmer_id = $id";
            $result = $conn->execute_query($query);
            while ($row = $result->fetch_assoc()) {
                echo $row['SUM(YieldEstimate)'];
            }
            echo "kgs";
        ?>
        </p>

    </div>

    <div>
        <?php include("frontend/chart_yield.php"); ?>
    </div>
    
</body>
</html>

<?php 
    include("frontend/footer.php");
?> 

