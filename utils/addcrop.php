<?php
session_start();

include("connect_db.php");

if (isset($_POST)) {
    $cropname = $_POST['cropName'];
    $seed = $_POST['seedAmount'];
    $planting = $_POST['plantingDate'];
    $harvest = $_POST['harvestDate'];
    $yield = $_POST['expectedYield'];
    $weather = $_POST['weather'];
}

$id = $_SESSION['farmer_id'];
$query = "INSERT INTO crops(farmer_id, cropname, weather, seedamount, yieldestimate, plantingdate, harvestdate)
          VALUES ('$id', '$cropname', '$weather', '$seed', '$yield', '$planting', '$harvest')";

$result = $conn->execute_query($query);
header("Location: ../crops.php");
?>