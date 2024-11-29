<?php
session_start();
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
$success_message = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : '';
unset($_SESSION['error_message']);
unset($_SESSION['success_message']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - AMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    
    <div class="container" id="register">
        <h1 class="form-title">Register</h1>

        <?php if (!empty($error_message)): ?>
            <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
        <?php endif; ?>
        <?php if (!empty($success_message)): ?>
            <p style="color: green;"><?php echo htmlspecialchars($success_message); ?></p>
        <?php endif; ?>

        <form method="post" action ="utils/verifyregister.php">

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="User Name" required>
                <label for="username">User Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="tel" name="phone-number" pattern="[0-9]*" placeholder="01XXXXXXXXX" required>
                <label for="phone-number">Phone Number</label>
            </div>

            <div class="input-group">
                <i class="fas fa-calendar"></i>
                <input type="text" name="dob" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Birth" required>
                <label for="dob">Date Of Birth</label>
            </div>

            <div class="input-group">
                <i class="fas fa-house"></i>
                <input type="text" name="address" placeholder="Address" required>
                <label for="address">Address</label>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" name="register" value="Register">
        </form>
        
        <div class="link-other-form">
            <p>Already have an account?</p>
            <button id="login-button" onclick="window.location.href='login.php'">Log In</button>
        </div>
    </div>
    

</body>
</html>