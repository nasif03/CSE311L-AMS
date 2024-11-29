<?php 
    include("frontend/header.php");
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
        <form class="dashboard-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" readonly>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" readonly>
            </div>

            <div class="sales-info">
                <h3>Total Sales Information</h3>
                <p>Your total sales: $<span id="totalSales">25,480</span></p>
            </div>
        </form>
    </main>

</body>
</html>

<?php 
    include("frontend/footer.php");
?> 

