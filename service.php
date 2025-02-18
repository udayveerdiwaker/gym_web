<?php
include 'header.php';
?>
<div class="container-fluid page-header">
    <div class="d-flex flex-column align-items-center justify-content-center " style="min-height:400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Our Services</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="home.php">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Our Services</p>
        </div>
    </div>
</div>
<section id="services" class="py-5">
    <div class="container mt-5 text-center">
        <!-- <h2 class="mb-4 fs-1 text_gray fw-bold text-center">Our Services</h2> -->
        <div class="row row-cols-1 row-cols-md-3 g-5">
            <!-- Personal Training -->
            <div class="col">
                <div class="card service-card">
                    <img src="brunogo.jpg" class="card-img-top" alt="Personal Training">
                    <div class="card-body">
                        <h5 class="card-title">Personal Training</h5>
                        <p class="card-text">One-on-one sessions with our certified personal trainers to achieve your fitness goals.</p>
                    </div>
                    <div class="card-footer">
                        <a href="membership.php" class="btn btn-outline-success btn-sm">Join Now</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <!-- Group Classes -->
            <div class="col">
                <div class="card service-card">
                    <img src="danilyuk.jpg" class="card-img-top" alt="Group Classes">
                    <div class="card-body">
                        <h5 class="card-title">Group Classes</h5>
                        <p class="card-text">Join our fun and motivating group fitness classes, including yoga, spin, and Zumba.</p>
                    </div>
                    <div class="card-footer">
                        <a href="membership.php" class="btn btn-outline-success btn-sm">Join Now</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <!-- Equipment Access -->
            <div class="col">
                <div class="card service-card">
                    <img src="koolshooters.jpg" class="card-img-top" alt="Equipment Access">
                    <div class="card-body">
                        <h5 class="card-title">Full Equipment Access</h5>
                        <p class="card-text">Access to our state-of-the-art gym equipment, including weights, cardio machines, and more.</p>
                    </div>
                    <div class="card-footer">
                        <a href="membership.php" class="btn btn-outline-success btn-sm">Join Now</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>