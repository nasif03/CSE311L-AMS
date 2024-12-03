<?php
session_start();

include("connect_db.php");

$lid = $_GET["lid"];
$query = "DELETE FROM livestock WHERE livestock_id = '$lid'";
$conn->execute_query($query);

header("Location: ../livestock.php");
?>