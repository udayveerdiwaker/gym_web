<?php
// index.php - Dynamic Page Rendering
include 'config.php';
$slug = isset($_GET['page']) ? $_GET['page'] : '';
$result = $conn->query("SELECT * FROM pages WHERE slug='$slug'");
$allPages = $conn->query("SELECT * FROM pages");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> -->

        <link rel="stylesheet" href="index.css">
        <title>Fitness Gym</title>
    </head>


<body>
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand fs-1 fw-bold text-wrap" href="index.php">
                    GYM FITNESS
                </a>
                <button class="navbar-toggler text-danger bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text_white justify-content-end" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($allPages as $page) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=<?php echo $page['slug']; ?>"><?php echo $page['title']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
                </div>
            </div>
        </nav>


    </header>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Dynamic Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($allPages as $page) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=<?php echo $page['slug']; ?>"><?php echo $page['title']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav> -->

    <!-- Hero Section (Jumbotron) -->
     
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Welcome to Our Gym</h1>
            <p class="lead">Your journey to a healthier lifestyle starts here.</p>
            <a href="index.php?page=about" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </div>

    <!-- Dynamic Page Content -->



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>