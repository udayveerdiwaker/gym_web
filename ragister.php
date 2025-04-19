<?php
include 'config.php';

if (isset($_POST['ragister'])) {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO `ragister`(`username`, `email`, `password`) VALUE ('$username','$email','$password)";
    $check = mysqli_query($conn, $sql);
    // $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    // $stmt->bind_param("sss", $username, $email, $password);

    if ($check) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: ";
    }

    $stmt->close();
}
?>

<!-- <form method="post" action="">
    <h2>Register</h2>
    Username: <input type="text" name="username" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ragister.css">
    <title>Gym Admin - Login</title>
    <style>

    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Ragister Admin Panel</h1>
            <p>Please sign in to continue</p>
        </div>

        <form method="post" action="" class="login-form">

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter your Email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password" required>
            </div>
            <!-- 
            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot password?</a>
                </div>
            </div> -->

            <button type="submit" class="login-btn" name="ragister">Sign In</button>
        </form>

        <div class="login-footer">
            <p>Don't have an account?
                <!-- <a href="#">Contact administrator</a> -->
            </p>
        </div>
    </div>
</body>

</html>