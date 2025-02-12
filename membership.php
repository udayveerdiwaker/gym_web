<?php
include 'header.php';
?>
<!-- Membership Plans Section -->
<section id="membership" class="section_same py-5">
    <div class="container text-center">
        <h2 class="mb-4 fs-1 text-white fw-bold text-center mt-4">Membership Plans</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Basic Plan -->
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
            <!-- Premium Plan -->
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
            <!-- VIP Plan -->
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
</section>
<?php
include 'footer.php';
?>