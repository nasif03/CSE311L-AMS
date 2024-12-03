<?php 
  session_start();
  if (!isset($_SESSION['farmer_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
  }
  include("frontend/header.php");
  $cid = $_GET['cid'];
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
      <form method="post" action="utils/updatecrops.php?cid=<?php echo $cid; ?>" class="crop-form">
        <h3>Update Crops</h3>
        <label for="seedAmount">New Seed Amount:</label>
        <input type="number" name="seed" required />
        
        <label for="harvestDate">New Harvest Date:</label>
        <input type="date" name="hdate" required />

        <label for="yieldEstimate">New Expected Yield:</label>
        <input type="number" name="yield" required />

        <input type="submit" class="btn" name="updatecrop" value="Update">
      </form>    
    </div>

  </body>
</html>

<?php
  include("frontend/footer.php");
?>