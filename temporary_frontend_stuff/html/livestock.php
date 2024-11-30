<?php ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Livestock Management</title>
    <link rel="stylesheet" href="livestock.css" />
  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="logo-container">
          <div class="logo"><img src="images/logo.jpeg" alt="AMS Logo" class="logo"></div>
          <h1>Agricultural Management System</h1>
        </div>
        <nav>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="vet.php">Veterianry Information</li>
          <li><a href="crops.php">Crop Management</a></li>
          <li><a href= "marketplace.php">Marketplace</a></li>
          <li><a href= "about.php">About</a></li>
        
        </nav>
      </div>
    </header>


    <main>
      <form>
        <label for="animalType">Animal Type:</label>
        <input type="text" id="animalType" name="animalType" required />

        <label for="feedSchedule">Feed Schedule:</label>
        <input type="text" id="feedSchedule" name="feedSchedule" required />

        <label for="healthRecord">Health Record:</label>
        <textarea id="healthRecord" name="healthRecord" required></textarea>

        <button type="submit">Save Livestock Data</button>
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

