<?php
include ("connect_db.php");
$lid = $_GET["lid"];

if (isset($_POST)) {
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $health = $_POST['health'];

    $query = "UPDATE livestock SET Age = '$age', Weight = '$weight', Health = '$health' 
                WHERE Livestock_ID = '$lid'";
    $conn -> execute_query($query);
    header("Location: ../livestock.php");
}
?>