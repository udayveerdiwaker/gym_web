<?php
include 'header.php';

// $slug = isset($_GET['page']) ? $_GET['page'] : 'home';


// $query = "SELECT * FROM pages WHERE slug = '$slug'";
// $select_data = mysqli_query($conn, $query);
// $page_data = mysqli_fetch_array($select_data);
// print_r($page_data);





$page = $_GET['page'];
$query = "SELECT * FROM `pages` WHERE slug = '$page'";
$select_data = mysqli_query($conn, $query);
$page_data = mysqli_fetch_array($select_data);

// print_r($page_data);
?>

<div class="container-fluid page-header">
  <div class="d-flex flex-column align-items-center justify-content-center">
    <?php


    echo "<h4 class='display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold'>{$page_data['title']}</h4>";
    ?>
    <div class='d-inline-flex'>
      <p class='m-0 text-white'><a class='text-white' href='home.php'>Home</a></p>
      <p class='m-0 text-white px-2'>/</p>
      <p class='m-0 text-white text-capitalize'><?php echo $page_data['title']; ?></p>
    </div>


  </div>
</div>
<?php if ($page == 'about') {

  include 'about.php';
} elseif ($page == 'contact') {
  include 'contact.php';
} elseif ($page == 'home') {
  include 'home.php';
?>


<?php
} else { ?>
  <h1 class='gym-error'>WORKOUT NOT FOUND</h1>

<?php
}
?>
<?php include 'footer.php'; ?>