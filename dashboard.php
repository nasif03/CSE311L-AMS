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
    <main>
        <div>
            <?php include("frontend/chart_animals.php"); ?>
            <?php include("frontend/chart_yield.php"); ?>
        </div>
    </main>
</body>
</html>

<?php 
    include("frontend/footer.php");
?> 

