<?php
include 'header.php';
?>
<div class="mt-4">
    <?php
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h1>{$row['title']}</h1><p>{$row['content']}</p>";
    } else {
        echo "<h1>Page Not Found</h1>";
    }
    ?>
</div>

<?php
include 'footer.php';
?>