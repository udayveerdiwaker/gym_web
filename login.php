<?php
// login.php - User Authentication
session_start();
include 'config.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $username;
            header('Location: admin.php');
        } else {
            echo "Invalid Credentials";
        }
    } else {
        echo "Invalid Credentials";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container">
    <form method='POST' class="mt-4">
        <input type='text' name='username' placeholder='Username' class="form-control" required>
        <input type='password' name='password' placeholder='Password' class="form-control mt-2" required>
        <button type='submit' class="btn btn-primary mt-2">Login</button>
    </form>
</body>

</html>