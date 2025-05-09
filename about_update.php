<?php
include 'admin_panel.php';

if (isset($_POST['update'])) {
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
    $id = $_GET['id'];
    // Handle image
    if ($_FILES['image']['name'] != '') {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp, "../uploads/$image");

        $query = "UPDATE pages SET 
            title='$title', badge_text='$badge_text', highlight_years='$highlight_years', 
            description='$description', image='$image', 
            feature1_icon='$feature1_icon', feature1_title='$feature1_title', feature1_desc='$feature1_desc',
            feature2_icon='$feature2_icon', feature2_title='$feature2_title', feature2_desc='$feature2_desc' 
            WHERE id=$id";
    } else {
        $query = "UPDATE pages SET 
            title='$title', badge_text='$badge_text', highlight_years='$highlight_years', 
            description='$description', 
            feature1_icon='$feature1_icon', feature1_title='$feature1_title', feature1_desc='$feature1_desc',
            feature2_icon='$feature2_icon', feature2_title='$feature2_title', feature2_desc='$feature2_desc' 
            WHERE id=$id";
    }

    mysqli_query($conn, $query);
    header("Location: about_edit.php");
}


// $page = $_GET['page'];
$id = $_POST['id'];
$query = "SELECT * FROM `pages` WHERE id = '$id'";

// $query = "SELECT * FROM `pages` WHERE slug = '$page'";
$about_edit = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($about_edit);
?>

<h2>Edit About Page</h2>
<form method="post" action="about_update.php" enctype="multipart/form-data">
    <label>Title</label><br>
    <input type="text" name="title" value="<?= htmlspecialchars($data['title']) ?>" required><br><br>

    <label>Current Image</label><br>
    <img src="../uploads/<?= htmlspecialchars($data['image']) ?>" width="150"><br>
    <label>Change Image</label>
    <input type="file" name="image"><br><br>

    <label>Badge Text</label><br>
    <input type="text" name="badge_text" value="<?= htmlspecialchars($data['badge_text']) ?>"><br><br>

    <label>Highlight Years</label><br>
    <input type="text" name="highlight_years" value="<?= htmlspecialchars($data['highlight_years']) ?>"><br><br>

    <label>Description</label><br>
    <textarea name="description" rows="5"><?= htmlspecialchars($data['description']) ?></textarea><br><br>

    <h4>Feature 1</h4>
    <label>Icon (e.g., 🏋️)</label><br>
    <input type="text" name="feature1_icon" value="<?= htmlspecialchars($data['feature1_icon']) ?>"><br>
    <label>Title</label><br>
    <input type="text" name="feature1_title" value="<?= htmlspecialchars($data['feature1_title']) ?>"><br>
    <label>Description</label><br>
    <textarea name="feature1_desc"><?= htmlspecialchars($data['feature1_desc']) ?></textarea><br><br>

    <h4>Feature 2</h4>
    <label>Icon (e.g., 🏅)</label><br>
    <input type="text" name="feature2_icon" value="<?= htmlspecialchars($data['feature2_icon']) ?>"><br>
    <label>Title</label><br>
    <input type="text" name="feature2_title" value="<?= htmlspecialchars($data['feature2_title']) ?>"><br>
    <label>Description</label><br>
    <textarea name="feature2_desc"><?= htmlspecialchars($data['feature2_desc']) ?></textarea><br><br>

    <button type="submit" name="update">Update</button>
</form>