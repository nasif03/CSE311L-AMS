<?php 
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

  </body>
</html>

<?php
  include("frontend/footer.php");
?>