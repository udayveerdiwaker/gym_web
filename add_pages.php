<?php
include 'admin_panel.php';

$msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $slug = trim($_POST['slug']);

    // Basic validation
    if (!empty($title) && !empty($slug)) {
        $stmt = $conn->prepare("INSERT INTO pages (title, slug) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $slug);

        if ($stmt->execute()) {
            $msg = "<div class='alert alert-success'>Page added successfully!</div>";
        } else {
            $msg = "<div class='alert alert-danger'>Error: Could not insert page.</div>";
        }

        $stmt->close();
    } else {
        $msg = "<div class='alert alert-warning'>Both title and slug are required.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>
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
                    <h2 class="h4">Add New Page</h2>
                    <p class="text-muted">Create a new page for your website</p>
                </div>

                <?php echo $msg; ?>

                <form method="POST" action="">
                    <div class="mb-4">
                        <label for="title" class="form-label fw-bold">Page Title</label>
                        <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="Enter page title" required>
                        <div class="form-text">This will be displayed as the main heading of your page.</div>
                    </div>

                    <div class="mb-4">
                        <label for="slug" class="form-label fw-bold">Page Slug (URL)</label>
                        <div class="input-group">
                            <span class="input-group-text">/</span>
                            <input type="text" name="slug" id="slug" class="form-control form-control-lg" placeholder="page-slug" required>
                        </div>
                        <div class="form-text">Use lowercase letters, numbers, and hyphens only (e.g., 'about-us').</div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <!-- <button type="reset" class="btn btn-outline-secondary me-md-2">Reset</button> -->
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="bi bi-save"></i> Save Page
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