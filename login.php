<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - AMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    
    <div class="container" id="login">
        <h1 class="form-title">Log In</h1>
        <form method="post" action ="">

            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="text" name="phone-number" placeholder="Phone Number">
                <label for="phone-number">Phone Number</label>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
        <input type="submit" class="btn" name="login" value="Log In">
        </form>

        <div class="link-other-form">
            <p>Don't have an account?</p>
            <button id="register-button" onclick="window.location.href='register.php'">Register</button>
        </div>
    </div>


</body>
</html>