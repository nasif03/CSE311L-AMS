<?php 
  session_start();
  if (!isset($_SESSION['farmer_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
  }
  include("frontend/header.php");
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Livestock Management</title>
    <link rel="stylesheet" href="css/livestock.css" />
  </head>
  <body>

  <main>
        <form method="post" action="utils/addlivestock.php" class="livestock-form">
          <h3> Add Livestock </h3>
          <label for="animal">Animal type:</label>
          <input type="text" name="animal" required />
          
          <label for="age">Age:</label>
          <input type="number" name="age" required />
          
          <label for="gender">Gender:</label>
          <input type="text" name="gender" required />

          <label for="weight">Weight:</label>
          <input type="number" name="weight" required />

          <label for="health">Health status:</label>
          <input type="text" name="health" required />

          <label for="produces">Produces:</label>
          <input type="text" name="produces" required />

          <input type="submit" class="btn" name="addlivestock" value="Add">
        </form>

        <?php
          include("frontend/chart_animals.php");
        ?>
      </main>

  </body>
</html>

<?php
  include("frontend/footer.php");
?>