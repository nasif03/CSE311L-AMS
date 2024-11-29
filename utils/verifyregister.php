<?php

include ('connect_db.php');
session_start();

function validate_input($condition, $error_msg) {
    if ($condition) {
        $_SESSION['error_message'] = $error_msg;
        header("Location: ../register.php");
        exit;
    }
}

if (isset($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $phone_no = $_POST['phone-number'];
    $address = $_POST['address'];
}

//sanitize inputs
$username = htmlspecialchars($username);
$address = htmlspecialchars($address);
$phone_no = filter_var($phone_no, FILTER_SANITIZE_NUMBER_INT);


//validate inputs
validate_input(strlen($username) < 5, "Username must be atleast 5 characters.");
validate_input(strlen($password) < 8, "Password must be atleast 8 characters.");
validate_input(strlen($phone_no) != 11, "Phone number must be 11 characters.");


// create the account
$password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO farmer(name, dob, password, address, phone_no)
          VALUES('$username', '$dob', '$password', '$address', '$phone_no')";

if ($conn->execute_query($query)) {
    $_SESSION['success_message'] = "Your account has been created.";
} else {
    $_SESSION['error_message'] = "There was an unexpected error. Please try again.";
}

$conn->close();
header("Location: ../register.php");

?>