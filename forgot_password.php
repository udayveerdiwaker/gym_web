<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Simulate checking email - in real case, use DB
    if ($email == "admin@gym.com") {
        $_SESSION['reset_allowed'] = true;
        header("Location: reset_password.php");
        exit();
    } else {
        $error = "Email not found.";
    }
}
?>

<h2>Forgot Password</h2>
<form method="post">
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <input type="email" name="email" placeholder="Enter your email" required><br>
    <button type="submit">Send Reset Link</button>
</form>