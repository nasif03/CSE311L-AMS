<?php 

include ('connect_db.php');

if (isset($_POST)) {
    $phone_no = $_POST['phone-number'];
    $password = $_POST['password'];
}

$query_account = "SELECT * FROM farmer WHERE phone_no = '$phone_no' AND password = '$password'";
$result = mysqli_query($conn, $query_account);

if ($result -> num_rows != 1) {
    echo "Account does not exist.";
    header("location: ../login.php");
} else {
    
}

mysqli_close($conn);

?>