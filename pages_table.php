<?php
include 'config.php';



if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM pages WHERE id=$id");
    header('Location: pages_table.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2 class="mt-4">Existing Pages</h2>
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        <?php
        $pages = $conn->query("SELECT * FROM pages");
        while ($page = $pages->fetch_assoc()) {
            echo "<tr>
                <td>{$page['title']}</td>
                <td>
                    <a href='pages_table.php?edit={$page['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='pages_table.php?delete={$page['id']}' class='btn btn-danger btn-sm' onclick='return confirm('Are you sure?'')'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>

    <!-- <button type='submit' name='update'></button> -->
    <a href="add_pages.php" class="btn btn-primary mt-2">Add Pages</a>
</body>

</html>