<?php
// admin_panel.php - Admin Panel for Managing Pages with Content and Images
include 'admin_panel.php';

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $slug = strtolower(str_replace(' ', '-', $title));
    $sql = "INSERT INTO pages (title, content, slug) VALUES ('$title', '$content', '$slug')";
    mysqli_query($conn, $sql);
    header('Location: dashboard.php');
}
?>

<style>
    :root {
        --primary-color: #2a4365;
        /* Deep athletic blue */
        --secondary-color: #e53e3e;
        /* Strong red */
        --accent-color: #f6ad55;
        /* Energy orange */
        --light-color: #f7fafc;
        --dark-color: #1a202c;
    }

    body {
        /* background:
            url('foad.jpg') no-repeat center center fixed; */
        background-size: cover;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
    }

    .logo {
        width: 180px;
        display: block;
        margin: 30px auto 20px;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
    }

    .card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        border: none;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        max-width: 800px;
        margin: 0 auto;
    }

    .card-header {
        /* background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); */
        /* color: #fff; */
        padding: 15px 20px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 3px solid var(--accent-color);
    }

    .card-body {
        padding: 30px;
    }

    .form-label {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 8px;
        display: block;
    }

    .form-control {
        border: 2px solid #e2e8f0;
        border-radius: 6px;
        padding: 12px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--accent-color);
        box-shadow: 0 0 0 3px rgba(246, 173, 85, 0.3);
    }

    textarea.form-control {
        min-height: 200px;
    }

    .btn {
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 6px;
        padding: 12px 24px;
        border: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-success {
        background-color: #38a169;
        color: white;
    }

    .btn-success:hover {
        background-color: #2f855a;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(56, 161, 105, 0.3);
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .container {
        animation: fadeInUp 0.5s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<div class="container py-5">

    <div class="card mt-3">
        <div class="card-header">
            <h3 class="mb-0">Create New Page</h3>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="title" class="form-label">Page Title</label>
                    <input type="text" name="title" id="title" class="form-control" required
                        placeholder="Enter page title (e.g., 'Workout Plans')">
                </div>

                <div class="mb-4">
                    <label for="content" class="form-label">Page Content</label>
                    <textarea name="content" id="content" class="form-control" rows="" required
                        placeholder="Enter detailed content for this page..."></textarea>
                </div>



                <div class="d-grid gap-2 mt-5">
                    <button type="submit" name="add" class="btn btn-success btn-lg">
                        <i class="fas fa-dumbbell me-2"></i> Create Page
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php

// $msg = "";

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $stmt = $conn->prepare("INSERT INTO pages 
//         (slug, title, content, image, badge_text, highlight_years, description, 
//         feature1_icon, feature1_title, feature1_desc, 
//         feature2_icon, feature2_title, feature2_desc) 
//         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

//     $stmt->bind_param("sssssssssssss",
//         $_POST['slug'], $_POST['title'], $_POST['content'], $_POST['image'],
//         $_POST['badge_text'], $_POST['highlight_years'], $_POST['description'],
//         $_POST['feature1_icon'], $_POST['feature1_title'], $_POST['feature1_desc'],
//         $_POST['feature2_icon'], $_POST['feature2_title'], $_POST['feature2_desc']
//     );

//     if ($stmt->execute()) {
//         $msg = '<div class="alert alert-success">✅ Page added successfully.</div>';
//     } else {
//         $msg = '<div class="alert alert-danger">❌ Error: ' . $stmt->error . '</div>';
//     }

//     $stmt->close();
// }
?>
<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Add Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Add New Page</h2>
    <?= $msg ?>

    <form method="POST" class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Slug</label>
            <input name="slug" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Title</label>
            <input name="title" class="form-control" required>
        </div>
        <div class="col-12">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="3" required></textarea>
        </div>
        <div class="col-md-6">
            <label class="form-label">Image URL</label>
            <input name="image" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Badge Text</label>
            <input name="badge_text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Highlight Years</label>
            <input name="highlight_years" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="2"></textarea>
        </div>

        <h5 class="mt-4">Feature 1</h5>
        <div class="col-md-4">
            <label class="form-label">Icon</label>
            <input name="feature1_icon" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Title</label>
            <input name="feature1_title" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Description</label>
            <textarea name="feature1_desc" class="form-control" rows="2"></textarea>
        </div>

        <h5 class="mt-4">Feature 2</h5>
        <div class="col-md-4">
            <label class="form-label">Icon</label>
            <input name="feature2_icon" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Title</label>
            <input name="feature2_title" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Description</label>
            <textarea name="feature2_desc" class="form-control" rows="2"></textarea>
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary">Add Page</button>
        </div>
    </form>
</div>
</body>
</html> -->