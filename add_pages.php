<?php
// admin.php - Admin Panel with CRUD Operations
// session_start();
include 'config.php';
if (!isset($_SESSION['user']));

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $slug = strtolower(str_replace(' ', '-', $title));
    $conn->query("INSERT INTO pages (title, content, slug) VALUES ('$title', '$content', '$slug')");
    header('Location: pages_table.php');
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container">
    <!-- <h2 class="mt-4">Welcome, <?php echo $_POST['user']; ?> | <a href='logout.php' class="btn btn-danger">Logout</a></h2> -->

    <h2 class="mt-3">Create a New Page</h2>
    <form method='POST'>
        <input type='text' name='title' placeholder='Page Title' class="form-control" required>
        <textarea name='content' placeholder='Page Content' class="form-control mt-2" required></textarea>
        <button type='submit' name='add' class="btn btn-success mt-2">Create Page</button>
    </form>



</html>

<?php
// logout.php - Logout Script
// session_start();
// session_destroy();
// header('Location: login.php');
?>