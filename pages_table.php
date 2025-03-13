<?php
include 'admin.php';
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM pages WHERE id=$id");
    header('Location: pages_table.php');
}
$pages = $conn->query("SELECT * FROM pages");

?>
<div class="p-4 mt-4">
    <table class="table ">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($page = $pages->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $page['title']; ?></td>
                    <td><?php echo substr($page['content'], 0, 100) . '...'; ?></td>
                    <td>
                        <?php if (!empty($page['image'])) { ?>
                            <img src="uploads/<?php echo $page['image']; ?>" alt="Page Image" width="100">
                        <?php } else { ?>
                            No Image
                        <?php } ?>
                    </td>
                    <td>
                        <a href="update.php?edit=<?php echo $page['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="pages_table.php?delete=<?php echo $page['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="add_pages.php">
        <button type='submit' name='add' class="btn btn-success btn-block mt-3">
            <i class="fas fa-plus-circle"></i> Create Page
        </button></a>
</div>
<!-- Add Page Button -->
</div>