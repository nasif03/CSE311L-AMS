<?php?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crop Management</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="crops.css" />
  </head>
  <body>
    <header>

      <div class="header-container">
        <div class="logo-container">
          <div class="logo"><img src="images/logo.jpeg" alt="AMS Logo" class="logo"></div>
          <h1>Agricultural Management System</h1>
        </div>
        <nav>
          <li><a href="livestock.html">Livestock Management</a></li>
          <li><a href="dashboard.html">Dashboard</a></li>
          <li><a href="about.html"> About</a></li>
        </nav>
      </div>
    </header>

    <div class="crops-container">
      <header class="crops-header">
        <h1>Crops Information</h1>
        <p>Detailed overview of crop information, planting schedules, and yield estimates.</p>
      </header>

      <main>
        <form class="crop-form">
          <label for="cropName">Crop Name:</label>
          <input type="text" id="cropName" name="cropName" required />

          <label for="plantingDate">Planting Date:</label>
          <input type="date" id="plantingDate" name="plantingDate" required />

          <label for="soilType">Soil Type:</label>
          <input type="text" id="soilType" name="soilType" required />

          <button type="submit">Save Crop Data</button>
        </form>
      </main>
    </div>

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
