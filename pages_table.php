<?php
include 'admin.php';
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM pages WHERE id=$id");
    header('Location: pages_table.php');
}
?>

<div class="container">
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
                    <a href='update.php?edit={$page['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='pages_table.php?delete={$page['id']}' class='btn btn-danger btn-sm' onclick='return confirm('Are you sure?'')'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>

    <!-- <button type='submit' name='update'></button> -->
    <a href="add_pages.php" class="btn btn-primary mt-2">Add Pages</a>
</div>

