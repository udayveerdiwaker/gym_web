<?php
include 'admin.php';
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM pages WHERE id=$id");
    header('Location: pages_table.php');
}
$pages = $conn->query("SELECT * FROM pages");

?>
<style>
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table-dark {
        background-color: #343a40;
        color: white;
    }

    .btn {
        margin-right: 5px;
        /* Space between buttons */
    }
</style>
<div class="container p-4 mt-4">
    <h2 class="mb-4">Page Management</h2>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($page = $pages->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($page['title']); ?></td>
                    <td><?php echo htmlspecialchars(substr($page['content'], 0, 100)) . '...'; ?></td>
                    <td>
                        <a href="update.php?edit=<?php echo $page['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="pages_table.php?delete=<?php echo $page['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="add_pages.php">
        <button type="button" class="btn btn-success btn-block mt-3">
            <i class="fas fa-plus-circle"></i> Create Page
        </button>
    </a>
</div>