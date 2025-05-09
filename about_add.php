<?php
include 'admin_panel.php';
$id = $_GET['id'];
// Check if about data already exists
$check = mysqli_query($conn, "SELECT * FROM pages WHERE id = $id");
if (mysqli_num_rows($check) > 0) {
    echo "<p>About content already exists. <a href='about_edit.php'>Edit instead</a>.</p>";
    exit;
}


if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $badge_text = $_POST['badge_text'];
    $highlight_years = $_POST['highlight_years'];
    $description = $_POST['description'];

    $feature1_icon = $_POST['feature1_icon'];
    $feature1_title = $_POST['feature1_title'];
    $feature1_desc = $_POST['feature1_desc'];

    $feature2_icon = $_POST['feature2_icon'];
    $feature2_title = $_POST['feature2_title'];
    $feature2_desc = $_POST['feature2_desc'];

    // Handle image upload
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp, "../uploads/$image");

    // Insert data
    $query = "INSERT INTO pages (id, title, badge_text, highlight_years, description, image, 
        feature1_icon, feature1_title, feature1_desc,
        feature2_icon, feature2_title, feature2_desc)
        VALUES (1, '$title', '$badge_text', '$highlight_years', '$description', '$image',
        '$feature1_icon', '$feature1_title', '$feature1_desc',
        '$feature2_icon', '$feature2_title', '$feature2_desc')";

    mysqli_query($conn, $query);
    header("Location: about_edit.php");
}
?>


<h2>Add About Page Content</h2>
<form method="post" action="about_insert.php" enctype="multipart/form-data">
    <label>Title</label><br>
    <input type="text" name="title" required><br><br>

    <label>Image</label><br>
    <input type="file" name="image" required><br><br>

    <label>Badge Text</label><br>
    <input type="text" name="badge_text"><br><br>

    <label>Highlight Years</label><br>
    <input type="text" name="highlight_years"><br><br>

    <label>Description</label><br>
    <textarea name="description" rows="5"></textarea><br><br>

    <h4>Feature 1</h4>
    <label>Icon (e.g., 🏋️)</label><br>
    <input type="text" name="feature1_icon"><br>
    <label>Title</label><br>
    <input type="text" name="feature1_title"><br>
    <label>Description</label><br>
    <textarea name="feature1_desc"></textarea><br><br>

    <h4>Feature 2</h4>
    <label>Icon (e.g., 🏅)</label><br>
    <input type="text" name="feature2_icon"><br>
    <label>Title</label><br>
    <input type="text" name="feature2_title"><br>
    <label>Description</label><br>
    <textarea name="feature2_desc"></textarea><br><br>

    <button type="submit" name="add">Add About Page</button>
</form>