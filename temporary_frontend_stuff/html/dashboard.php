<?php ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dashboard.css"> <!-- Link to CSS for styling -->
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <div class="logo"><img src="images/logo.jpeg" alt="AMS Logo"></div>
                <h1>Agricultural Management System</h1>
            </div>
            <nav>
                <li><a href="crops.php">Crop Management</a></li>
                <li><a href="livestock.php">Livestock Management</a></li>
                <li><a href= "marketplace.php">Marketplace</a></li>
                <li><a href="about.php">About</a></li>
            </nav>
        </div>
    </header>

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

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: info@ams.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Address: 123 Farm Street, Agriculture City</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <p><a href="#">About Us</a></p>
                <p><a href="#">Services</a></p>
                <p><a href="#">Support</a></p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <p><a href="#">Facebook</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="#">LinkedIn</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 AMS - All rights reserved</p>
        </div>
    </footer>
</body>
</html>



