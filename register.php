<?php
include 'config.php';

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username','$email', '$password')";
    $check = mysqli_query($conn, $sql);
    // $stmt->bind_param("ss", $username, $password);
    if ($check) {
        // Redirect before output
        header("Location: login.php");
        exit;
    } else {
        // You can show this on page or log it
        echo "Registration failed: ";
    }
}
?>
<!-- <form method="POST" action="login.php">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Register" name="register">
</form> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Gym Admin - Login</title>
    <style>

    </style>
</head>

<?php

// echo $successfull;
?>

<body>


    <div class="login-container">
        <div class="login-header">
            <h1>Register Admin Panel</h1>
            <p>Please Ragister in to continue</p>
        </div>

        <form method="post" action="" class="login-form">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your Username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your Email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <!-- <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot password?</a>
                </div>
            </div> -->

            <button type="submit" class="login-btn" name="register">Register</button>
        </form>

        <div class="login-footer">
            <p>I have a account
                <a href="login.php">Login</a>
            </p>
        </div>
    </div>
</body>

</html>