<?php
include 'admin_panel.php'; // Must define $conn here

// Handle form submission
if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $slug = mysqli_real_escape_string($conn, $_POST['slug']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    // $content = mysqli_real_escape_string($conn, $_POST['content']);

    $sql = "UPDATE pages SET slug='$slug', title='$title' WHERE id=$id";
    mysqli_query($conn, $sql);

    header('Location: pages_table.php');
    exit;
}
?>

<?php
if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $page = $conn->query("SELECT * FROM pages WHERE id=$id")->fetch_assoc();

    if ($page):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
        }
        .page-header {
            border-bottom: 1px solid #eee;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card">
            <div class="card-body form-container">
                <div class="page-header">
                    <h2 class="h4">Edit Page</h2>
                    <p class="text-muted">Update the page details below</p>
                </div>

                <form method='POST'>
                    <input type='hidden' name='id' value='<?php echo $page['id']; ?>'>

                    <div class="mb-4">
                        <label for="title" class="form-label fw-bold">Page Title</label>
                        <input type='text' name='title' id="title" value='<?php echo htmlspecialchars($page['title']); ?>' 
                               class="form-control form-control-lg" placeholder="Enter page title" required>
                        <div class="form-text">This will be displayed as the main heading of your page.</div>
                    </div>

                    <div class="mb-4">
                        <label for="slug" class="form-label fw-bold">Page Slug (URL)</label>
                        <div class="input-group">
                            <span class="input-group-text">/</span>
                            <input type='text' name='slug' id="slug" value='<?php echo htmlspecialchars($page['slug']); ?>' 
                                   class="form-control form-control-lg" placeholder="page-slug" required>
                        </div>
                        <div class="form-text">Use lowercase letters, numbers, and hyphens only (e.g., 'about-us').</div>
                    </div>

                    <!-- Uncomment if you need content field -->
                    <!--
                    <div class="mb-4">
                        <label for="content" class="form-label fw-bold">Content</label>
                        <textarea name='content' id="content" class="form-control" rows="8" required>
                            <?php echo htmlspecialchars($page['content']); ?>
                        </textarea>
                    </div>
                    -->

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <a href="pages_table.php" class="btn btn-outline-secondary me-md-2">Cancel</a>
                        <button type='submit' name='update' class="btn btn-primary px-4">
                            <i class="bi bi-save"></i> Update Page
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
    else:
        echo "<div class='container py-5'><div class='alert alert-danger'>Page not found.</div></div>";
    endif;
}
?>