<?php

include ('connect_db.php');

if (isset($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $dob = $_POST['dob'];
    $phone_no = $_POST['phone-number'];
    $address = $_POST['address'];
}

$query_phone = "SELECT * FROM farmer WHERE phone_no = '$phone_no'";
$result = mysqli_query($conn, $query_phone);

if ($result -> num_rows > 0) {
    echo "Phone number is already in use.";
} else {
    $query_insert = "INSERT INTO farmer(name, password, dob, phone_no, address)
                     VALUES ('$username', '$hash', '$dob', '$phone_no', '$address')";
    
    if (mysqli_query($conn, $query_insert)) {
        header("location: ../login.php");
    }
}

mysqli_close($conn);

?>