<?php 
session_start();

include ('connect_db.php');

if (isset($_POST)) {
    $phone_no = $_POST['phone-number'];
    $password = $_POST['password'];
}

// sanitize user input
$phone_no = htmlspecialchars($phone_no);

// query to find user
$query = "SELECT * FROM farmer WHERE phone_no = '$phone_no'";
$result = $conn->execute_query($query);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['Password'])) {
        $_SESSION['farmer_id'] = $row['Farmer_ID'];
        header("Location: ../dashboard.php"); // login success
        exit;
    } else {
        $_SESSION['error_message'] = "The password is incorrect.";
    }
} else {
    $_SESSION['error_message'] = "User not found.";
}

$conn->close();
header("Location: ../login.php");

?>