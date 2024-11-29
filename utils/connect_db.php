<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cse311l_project";

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
if ($conn -> connect_error) {
    die("connection failed: ". $conn -> connect_error);
}

?>