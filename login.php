<?php
session_start();
include 'config.php';

$error = '';
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT `id`, `password` FROM `users` WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if ($password) {
            $_SESSION['user_id'] = $id;
            header("Location: admin.php");
            exit();
        } else {
            $error = "Invalid credentials.";
        }
    } else {
        $error = "No user found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>

</head>

<body>
    <div class="login-card">
        <div class="login-header">
            <h1>Login Admin Panel</h1>
            <p>Please Login to continue </p>
        </div>

        <?php if (!empty($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn" name="login">Sign In</button>
        </form>

        <div class="login-footer">
            <p>I don't have a account
                <a href="register.php">Register now</a>
            </p>
        </div>
    </div>
</body>

</html>