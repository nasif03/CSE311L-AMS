<?php
session_start();

include("connect_db.php");

if (isset($_POST)) {
    $animaltype = $_POST['animal'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $health = $_POST['health'];
}

$id = $_SESSION['farmer_id'];
$query = "INSERT INTO livestock(farmer_id, animaltype, health, age, weight, gender)
          VALUES ('$id', '$animaltype', '$health', '$age', '$weight', '$gender')";

$result = $conn->execute_query($query);
header("Location: ../livestock.php");
?>