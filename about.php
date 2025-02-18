<?php
include 'header.php';
?>
<div class="container-fluid page-header">
    <div class="d-flex flex-column align-items-center justify-content-center " style="min-height:400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">About Us</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="home.php">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">About Us</p>
        </div>
    </div>
</div>
<section id="about" class="row g-0">

    <!-- <h2 class="text_gray mt-4 fs-1 fw-bold text-center">About Us</h2> -->
    <div class="row g-0 position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="gym.jpg" class="w-100">
        </div>
        <div class="col-md-6 p-4 ps-md-0">
            <h5 class="mt-0 fw-bold display-5 text_red ">5 Years Experience</h5>
            <p class="text_gray">Dedicated fitness enthusiast with 5 years of gym experience, expertise in strength training, and client motivation.</p>

            <div class="row py-2">
                <div class="col-sm-6">
                    <!-- <i class="bi bi-activity flaticon-barbell display-2 text-primary "></i> -->
                    <p class="text_gray text_size">Elite Fitness Zone</p>
                    <p class="text_gray">Elite training, luxury amenities, personalized coaching, 24/7 access. </p>
                </div>
                <div class="col-sm-6">
                    <!-- <i class="bi bi-award  display-2 text-primary"></i> -->
                    <p class="text_gray text_size">Award Winning</p>
                    <p class="text_gray">Award-winning excellence, innovation, quality, service, leadership, recognition.</p>
                </div>
            </div>
            <a href="membership.php" class="btn hbtn">Plans</a>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>