<?php 
  include("frontend/header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crop Management</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="css/crops.css" />
  </head>
  <body>

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

    
  </body>
</html>

<?php
  include("frontend/footer.php");
?>