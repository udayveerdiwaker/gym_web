<?php
session_start();

if (!isset($_SESSION['reset_allowed'])) {
    header("Location: forgot_password.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword === $confirmPassword) {
        // In real-world, update password in database
        $_SESSION['reset_allowed'] = false;
        echo "<p style='color:green;'>Password reset successful!</p>";
        echo '<a href="login.php">Go to Login</a>';
    } else {
        $error = "Passwords do not match!";
    }
}
?>

<h2>Reset Password</h2>
<form method="post">
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <input type="password" name="new_password" placeholder="New Password" required><br>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
    <button type="submit">Reset Password</button>
</form>