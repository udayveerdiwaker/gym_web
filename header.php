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
    <title>Gym Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color:rgb(132, 180, 228);
        }

        .navbar {
            margin-bottom: 20px;
        }

        .jumbotron {
            background: url('gym-banner.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 20px;
            text-align: center;
        }

        .page-content {
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Gym Website</a>
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
    </nav>

    <!-- Hero Section (Jumbotron) -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Welcome to Our Gym</h1>
            <p class="lead">Your journey to a healthier lifestyle starts here.</p>
            <a href="index.php?page=about" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </div>

    <!-- Dynamic Page Content -->
    <div class="container page-content">
        <?php
        if ($result->num_rows > 0) {
            $page = $result->fetch_assoc();
            echo "<h2>" . htmlspecialchars($page['title']) . "</h2>";
            echo "<p>" . htmlspecialchars($page['content']) . "</p>";
        } else {
            echo "<h2>Welcome to Our Gym</h2>";
            echo "<p>Explore our website to learn more about our services, classes, and membership plans.</p>";
        }
        ?>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Gym Website. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>