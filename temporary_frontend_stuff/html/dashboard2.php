<?php?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dashboard.css"> <!-- Link to CSS for styling -->
</head>
<body>

<div class="dashboard-container">
    <header class="dashboard-header">
        <h1>Welcome to Your Dashboard</h1>
        <p>Here is an overview of your details and sales performance.</p>
    <nav>
       <li><a href="about.html">About Us</a> </li>
       <li> <a href="crops.html">Crop</a></li>
       <li> <a href="livestock-management.html">Livestock Management</a></li>
    </nav>
    </header>

    

    <div class="user-info">
        <h2>User Information</h2>
        <p>Name: </p>
        <p>Phone Number: </p>
        <p>Total Sales: </p>
    </div>

    <div class="dashboard-bottom">
        <div class = "button Container" >
            <button><a href="crops.html">Crops</a></button>
            <button><a href="animal.html">Animals</a></button>
         </div>
      
    </div>
    

    <div class="user-image">
        <img src="path/to/user-image.jpg" alt="User Image">
    </div>
</div>


</body>
</html>



