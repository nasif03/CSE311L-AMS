<?php 
  include("frontend/header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crop Management</title>
    <link rel="stylesheet" href="css/crops.css" />
    <link rel="stylesheet" href="css/select.css" />
  </head>
  <body>

    <div class="crops-container">
      
      <main>
        <form method="post" action="utils/addcrop.php" class="crop-form">
          <label for="cropName">Crop Name:</label>
          <input type="text" name="cropName" required />
          
          <label for="seedAmount">Seed Amount:</label>
          <input type="number" name="seedAmount" required />
          
          <label for="plantingDate">Planting Date:</label>
          <input type="date" name="plantingDate" required />

          <label for="harvestDate">Expected Harvest Date:</label>
          <input type="date" name="harvestDate" required />

          <label for="yieldEstimate">Expected Yield:</label>
          <input type="number" name="expectedYield" required />
          
          <label for="weather">Weather:</label>
          <select id="weather" name="weather" style="width:200px;">
            <option value="Any">Any</option>
            <option value="Winter">Winter</option>
            <option value="Summer">Summer</option>
            <option value="Monsoon">Monsoon</option>
          </select>

          <input type="submit" class="btn" name="addcrop" value="Add">
        </form>
      </main>
    </div>

    
  </body>
</html>

<?php
  include("frontend/footer.php");
?>