<?php
include 'header.php';
?>
<!-- <div class="mt-4">
    <?php
    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     echo "<h1>{$row['title']}</h1><p>{$row['content']}</p>";
    // } else {
    //     echo "<h1>Page Not Found</h1>";
    // }
    ?>
</div> -->

<div class="container page-content">
    <?php
    if ($result->num_rows > 0) {
        $page = $result->fetch_assoc();
        echo "<h2>" . htmlspecialchars($page['title']) . "</h2>";
        echo "<p>" . htmlspecialchars($page['content']) . "</p>";
    }
    if (!empty($page['image'])) {
        echo "<img src='uploads/" . htmlspecialchars($page['image']) . "' alt='Page Image' class='img-fluid mt-3'>";
    } else {
        echo "<h2>Welcome to Our Gym</h2>";
        echo "<p>Explore our website to learn more about our services, classes, and membership plans.</p>";
    }
    ?>
</div>


<?php
include 'footer.php';
?>