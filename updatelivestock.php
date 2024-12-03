<?php 
  session_start();
  if (!isset($_SESSION['farmer_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
  }
  include("frontend/header.php");
  $lid = $_GET['lid'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crop Management</title>
    <link rel="stylesheet" href="css/manage.css" />
  </head>
  <body>
    
    <div class="parent">

    <div class="container">
      <form method="post" action="utils/updatelivestock.php?lid=<?php echo $lid; ?>" class="livestock-form">
        <h3>Update Crops</h3>
        <label for="Age">Update Age:</label>
        <input type="number" name="age" required />
        
        <label for="HealthStatus">Health Status:</label>
        <input type="text" name="health" required />

        <label for="Weight">New Weight:</label>
        <input type="number" name="weight" required />

        <input type="submit" class="btn" name="updatelivestock" value="Update">
      </form>    
    </div>

  </body>
</html>

<?php
  include("frontend/footer.php");
?>