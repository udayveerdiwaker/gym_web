 <!-- <?php
      // include 'header.php';
      ?>
 <div class="mt-4">
    <?php
      // if ($result->num_rows > 0) {
      //    $row = $result->fetch_assoc();
      //    echo "<h1>{$row['title']}</h1><p>{$row['content']}</p>";
      // } else {
      //    echo "<h1>Page Not Found</h1>";
      // }
      ?>
 </div>

 <?php
   // include 'footer.php';
   ?> -->



 <?php
   include 'header.php';
   ?>
 <div class="container-fluid page-header">
    <div class="d-flex flex-column align-items-center justify-content-center">
       <?php
         if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<h4 class='display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold'>{$row['title']}</h4>"
         ?>


          <div class='d-inline-flex'>
             <p class='m-0 text-white'><a class='text-white' href='home.php'>Home</a></p>
             <p class='m-0 text-white px-2'>/</p>
             <?php echo "<p class='m-0 text-white'>{$row['title']}</p>"; ?>
          </div>
          <?php "<p>{$row['content']}</p>";
            ?>
       <?php } else {
            echo "<h1>Page Not Found</h1>";
         ?>
       <?php
         }

         ?>
    </div>
 </div>

 <?php
   include 'footer.php';
   ?>