<?php
// index.php - Dynamic Page Rendering
include 'config.php';
$slug = isset($_GET['page']) ? $_GET['page'] : '';
$result = $conn->query("SELECT * FROM pages WHERE slug='$slug'");
$allPages = $conn->query("SELECT * FROM pages");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Gym Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Gym Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                //  while ($page = $allPages->fetch_assoc()) { 
                 foreach($allPages as $page) { 

                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=<?php echo $page['slug']; ?>"><?php echo $page['title']; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>