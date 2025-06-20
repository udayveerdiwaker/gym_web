<?php
include 'header.php';
// Fetch about data
$page = $_GET['page'];
$query = "SELECT * FROM `pages` WHERE slug = '$page'";
$select_about = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($select_about);

?>



<section class='gym-content-container about' id="about">
    <div class="gym-section-title">
        <p class="gym-underline"><?php echo htmlspecialchars($page_data['title']); ?> Page</p>
    </div>
    <!-- Floating Icons -->
    <i class="fas fa-dumbbell floating-icon" style="font-size: 10rem; top: 5%; left: 3%;"></i>
    <i class="fas fa-running floating-icon floating-delay-1" style="font-size: 8rem; bottom: 10%; right: 5%;"></i>
    <i class="fas fa-weight-hanging floating-icon floating-delay-2" style="font-size: 9rem; top: 55%; left: 10%;"></i>
    <i class="fas fa-heartbeat floating-icon floating-delay-3" style="font-size: 7rem; top: 25%; right: 15%;"></i>
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold text-gradient">MORE THAN JUST A GYM</h2>
            <div class="divider mx-auto"></div>
            <p class="lead text-white mt-3">We're a community committed to transforming lives through fitness</p>
        </div>

        <div class="row align-items-center g-5">
            <!-- Image Column -->
            <div class="col-lg-6">
                <div class="about-img position-relative">
                    <img src="foad.jpg" class="img-fluid rounded-3 shadow-lg gym-image" alt="Modern Gym Facility">
                    <div class="experience-badge">
                        <h3 class="mb-0">5+ Years</h3>
                        <p class="mb-0">Changing Lives</p>
                    </div>
                </div>
            </div>

            <!-- Text Content Column -->
            <div class="col-lg-6">
                <h3 class="fw-bold text-light display-5 mb-4">Your Fitness Journey Starts Here</h3>
                <p class="lead text-light mb-4">Since 2018, we've helped over 2,500 members achieve their fitness goals through our science-backed training programs and supportive community environment.</p>

                <!-- Features Grid -->
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="feature-card p-3 h-100">
                            <div class="icon-box rounded-circle mb-3">
                                <i class="bi bi-people fs-3"></i>
                            </div>
                            <h5 class="fw-bold">Expert Coaching Team</h5>
                            <p>Our certified trainers provide personalized guidance to ensure you train safely and effectively.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card p-3 h-100">
                            <div class="icon-box rounded-circle mb-3">
                                <i class="bi bi-heart-pulse fs-3"></i>
                            </div>
                            <h5 class="fw-bold">Proven Results</h5>
                            <p>92% of our members report measurable improvements within their first 8 weeks.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card p-3 h-100">
                            <div class="icon-box rounded-circle mb-3">
                                <i class="bi bi-star fs-3"></i>
                            </div>
                            <h5 class="fw-bold">Award-Winning Facility</h5>
                            <p>Voted "Best Gym in the City" three years running by Health & Fitness Magazine.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card p-3 h-100">
                            <div class="icon-box rounded-circle mb-3">
                                <i class="bi bi-emoji-smile fs-3"></i>
                            </div>
                            <h5 class="fw-bold">Community Focus</h5>
                            <p>Join our member events, challenges, and social gatherings to stay motivated.</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="membership.php" class="btn btn-primary btn-lg px-4 py-2 membership-btn">
                        Explore Memberships <i class="bi bi-chevron-right ms-2"></i>
                    </a>
                    <a href="tel:+1234567890" class="btn btn-outline-primary btn-lg px-4 py-2 call-btn">
                        <i class="bi bi-telephone me-2"></i> Call Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


</style>
<?php
include 'header.php';
?>