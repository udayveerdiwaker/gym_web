<?php
// admin_panel.php - Admin Panel for Managing Pages with Content and Images
include 'admin.php';

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $slug = strtolower(str_replace(' ', '-', $title));
    $conn->query("INSERT INTO pages (title, content, image, slug) VALUES ('$title', '$content', '$image', '$slug')");
    header('Location: pages_table.php');
}
?>


<style>
    body {
        background: url('background.jpg') no-repeat center center fixed;
        background-size: cover;
    }

    .logo {
        width: 150px;
        display: block;
        margin: 20px auto;
    }

    .card {
        background: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
    }
</style>

<div class="container">
    <img src="logo.png" alt="Logo" class="logo">
    <h2 class="mt-4 text-center text-white">Manage Pages</h2>

    <div class="card p-4">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Page Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Page Content</label>
                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Page Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <button type="submit" name="add" class="btn btn-success">Create Page</button>
        </form>
    </div>
</div>
<!-- 
    <div class="card p-4 mt-4">
        <table class="table table-bordered table-striped">
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
                            <a href="admin_panel.php?delete=<?php echo $page['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page?');">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div> -->