<?php
include 'config.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("UPDATE pages SET title='$title', content='$content' WHERE id=$id");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $page = $conn->query("SELECT * FROM pages WHERE id=$id")->fetch_assoc();
    ?>
        <h2 class="mt-4">Edit Page</h2>
        <form method='POST'>
            <input type='hidden' name='id' value='<?php echo $page['id']; ?>'>
            <input type='text' name='title' value='<?php echo $page['title']; ?>' class="form-control" required>
            <textarea name='content' class="form-control mt-2" required><?php echo $page['content']; ?></textarea>
            <button type='submit' name='update' class="btn btn-primary mt-2">Update Page</button>
        </form>
    <?php } ?>
</body>

</html>