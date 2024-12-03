<?php
session_start();

include("connect_db.php");

$cid = $_GET["cid"];
$query = "DELETE FROM crops WHERE crop_id = '$cid'";
$conn->execute_query($query);

header("Location: ../crops.php");
?>