<?php ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agricultural Management System</title>
    <link rel="stylesheet" href="marketplace.css" />
  </head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <div class="logo"><img src="images/logo.jpeg" alt="AMS Logo"></div>
                <h1>Agricultural Management System</h1>
            </div>
            <nav>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="crops.php">Crop Management</a></li>
                <li><a href="livestock.php">Livestock Management</a></li>
                <li><a href="about.php">About</a></li>
            </nav>
        </div>
    </header>

    <main>
        <section class="search-section">
            <div class="search-container">
                <input type="search" class="search-box" placeholder="Search for products (e.g., wheat, corn, soybeans)...">
            </div>
        </section>

        <section class="market-prices">
            <div class="price-header">
                <h2>Today's Market Prices</h2>
                <div class="price-date">November 22, 2024</div>
            </div>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Price Change</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Wheat</td>
                        <td>Grains</td>
                        <td>per bushel</td>
                        <td class="price-value">$7.25</td>
                        <td style="color: green">↑ $0.15</td>
                    </tr>
                    <tr>
                        <td>Corn</td>
                        <td>Grains</td>
                        <td>per bushel</td>
                        <td class="price-value">$4.80</td>
                        <td style="color: red">↓ $0.05</td>
                    </tr>
                    <tr>
                        <td>Soybeans</td>
                        <td>Legumes</td>
                        <td>per bushel</td>
                        <td class="price-value">$13.45</td>
                        <td style="color: green">↑ $0.30</td>
                    </tr>
                    <tr>
                        <td>Cotton</td>
                        <td>Fiber</td>
                        <td>per pound</td>
                        <td class="price-value">$0.85</td>
                        <td style="color: red">↓ $0.02</td>
                    </tr>
                    <tr>
                        <td>Rice</td>
                        <td>Grains</td>
                        <td>per cwt</td>
                        <td class="price-value">$14.75</td>
                        <td style="color: green">↑ $0.25</td>
                    </tr>
                </tbody>
            </table>
        </section>
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