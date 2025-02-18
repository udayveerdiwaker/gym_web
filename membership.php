<?php
include 'header.php';
?>
<div class="container-fluid page-header">
    <div class="d-flex flex-column align-items-center justify-content-center " style="min-height:400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Membership Plans</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="home.php">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Membership Plans</p>
        </div>
    </div>
</div>
<!-- Membership Plans Section -->
<!-- <section id="membership" class="py-5">
    <div class="container text-center">
        <h2 class="mb-4 fs-1 text-white fw-bold text-center mt-4">Membership Plans</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            Basic Plan
            <div class="col">
                <div class="card plan-card">
                    <div class="card-header">
                        <h5 class="card-title">Basic Plan</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-price">2999 / month</h3>
                        <ul>
                            <li>Access to gym</li>
                            <li>Free fitness assessment</li>
                            <li>Standard equipment</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="sign_membership.php" class="hbtn btn">Sign Up</a>
                    </div>
                </div>
            </div>
<div class="col">
    <div class="card plan-card">
        <div class="card-header">
            <h5 class="card-title">Premium Plan</h5>
        </div>
        <div class="card-body">
            <h3 class="card-price">4999 / month</h3>
            <ul>
                <li>Access to gym + classes</li>
                <li>Free personal training session</li>
                <li>Priority booking</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="sign_membership.php" class="hbtn btn">Sign Up</a>
        </div>
    </div>
</div>
<div class="col">
    <div class="card plan-card">
        <div class="card-header">
            <h5 class="card-title">VIP Plan</h5>
        </div>
        <div class="card-body">
            <h3 class="card-price">7999 / month</h3>
            <ul>
                <li>Unlimited access to gym, classes, & personal training</li>
                <li>Exclusive VIP events</li>
                <li>Free guest passes</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="sign_membership.php" class="hbtn btn">Sign Up</a>
        </div>
    </div>
</div>
</div>
</div>
</section> -->
<section class="membership-plans">
    <div class="container">
        <h2 class="mb-4 fs-1 fw-bold text-center ">Choose Your Perfect Plan</h2>
        <p class="section-subtitle text-center fw-bold">Flexible options for every fitness journey</p>

        <di v class="plans-container">
            <!-- Basic Plan -->
            <div class="plan-card">
                <h3>Basic Plan</h3>
                <div class="price">₹2999<span>/month</span></div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Full gym access</li>
                    <li><i class="fas fa-check"></i> Locker room facilities</li>
                    <li><i class="fas fa-times"></i> Group classes</li>
                    <li><i class="fas fa-times"></i> Personal training</li>
                </ul>
                <a href="sign_membership.php" class="cta-button">Get Started</a>
            </div>

            <!-- Premium Plan (Featured) -->
            <div class="plan-card featured">
                <div class="recommended-badge">Most Popular</div>
                <h3>Premium Plan</h3>
                <div class="price">₹4999<span class="text-black">/month</span></div>
                <ul class="plan-features text-white">
                    <li><i class="fas fa-check"></i> Full gym access</li>
                    <li><i class="fas fa-check"></i> Unlimited group classes</li>
                    <li><i class="fas fa-check"></i> Locker + towel service</li>
                    <li><i class="fas fa-times"></i> Personal training</li>
                </ul>
                <a href="sign_membership.php" class="cta-button">Get Started</a>
            </div>

            <!-- Elite Plan -->
            <div class="plan-card">
                <h3>Elite Plan</h3>
                <div class="price">₹7999<span>/month</span></div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> All Premium benefits</li>
                    <li><i class="fas fa-check"></i> 4 Personal training sessions</li>
                    <li><i class="fas fa-check"></i> Spa access</li>
                    <li><i class="fas fa-check"></i> Nutrition planning</li>
                </ul>
                <a href="sign_membership.php" class="cta-button">Get Started</a>
            </div>
    </div>
</section>

<?php
include 'footer.php';
?>