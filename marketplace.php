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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agricultural Management System</title>
    <link rel="stylesheet" href="css/marketplace.css" />
  </head>
<body>

    <main>
        <div class="price-header">
                <h2>Today's Market Prices</h2>
                <div class="price-date">November 22, 2024</div>
            </div>
        <div>
            <?php 
                include("frontend/chart_market.php");
            ?>
        </div>
    </main>

</body>
</html>

<?php
    include("frontend/footer.php");
?> 