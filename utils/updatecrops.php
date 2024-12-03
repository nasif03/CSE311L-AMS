<?php
include ("connect_db.php");
$cid = $_GET["cid"];

if (isset($_POST)) {
    $seedamt = $_POST['seed'];
    $yield = $_POST['yield'];
    $hdate = $_POST['hdate'];

    $query = "UPDATE crops SET SeedAmount = '$seedamt', YieldEstimate = '$yield', HarvestDate = '$hdate' 
                WHERE Crop_ID = '$cid'";
    $conn -> execute_query($query);
    header("Location: ../crops.php");
}
?>