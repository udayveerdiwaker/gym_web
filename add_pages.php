<?php
// admin.php - Admin Panel with CRUD Operations
// session_start();
include 'admin.php';
if (!isset($_SESSION['user']));

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $slug = strtolower(str_replace(' ', '-', $title));
    $conn->query("INSERT INTO pages (title, content, slug) VALUES ('$title', '$content', '$slug')");
    header('Location: pages_table.php');
}


?>

<div class="container">
    <div class="row">
        <div class="col-10">
            <!-- <h2 class="mt-4">Welcome, <?php echo $_POST['user']; ?> | <a href='logout.php' class="btn btn-danger">Logout</a></h2> -->

            <h2 class="mt-3">Create a New Page</h2>
            <form method='POST'>
                <input type='text' name='title' placeholder='Page Title' class="form-control" required>
                <textarea name='content' placeholder='Page Content' class="form-control mt-2" required></textarea>
                <button type='submit' name='add' class="btn btn-success mt-2">Create Page</button>
            </form>

        </div>
    </div>
</div>



<?php
// logout.php - Logout Script
// session_start();
// session_destroy();
// header('Location: login.php');
?>