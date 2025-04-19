<?php
include 'config.php';
?>

<footer class="footer bg-black text-white py-3 position-relative">
    <div class="container">
        <div class="row">
            <!-- Google Map -->
            <div class="col-12 mb-5">
                <h5>Find Us</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.262337843902!2d78.27726946955646!3d30.092403158779344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39093e09c40d8083%3A0x49bf374532e85cc6!2sstore%20India!5e1!3m2!1sen!2sin!4v1736334680519!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 280px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- About Us -->
            <div class="col-md-3 mb-4">
                <h5>About Us</h5>
                <p>Hi how are you, I'M Shiva Diwaker contact me and I help you.</p>
                <p class="mt-4">
                    <a href="about.php" class="hbtn btn-learn-more btn btn-outline-danger">Learn more</a>
                </p>
            </div>

            <!-- Navigation -->
            <div class="col-md-2 mb-4">
                <h5>Navigation</h5>
                <ul class="navbar-nav ms-auto list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <?php foreach ($allPages as $page) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=<?php echo $page['slug']; ?>"><?php echo $page['title']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-4">
                <h5>Contact</h5>
                <p>
                    <b>Phone:</b> +19 9720067044<br>
                    <b>Email:</b> udayveerdiwaker2@gmail.com<br>
                    <b>Location:</b> Top floor, Om Palace hotel, Haridwar road, Rishikesh, Uttarakhand 249201
                </p>
                <div class="widget">
                    <h5 class="widget-heading">Follow Us:</h5>
                    <ul class="list-unstyled social-icons light">
                        <li>
                            <a href="https://web.telegram.org/k/"><span class="telegram text-white active bi bi-telegram"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="text-white bi bi-facebook"></span></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/shiva__diwaker"><span class="instagram text-white active bi bi-instagram"></span></a>
                        </li>
                        <li>
                            <a href="https://web.skype.com/"><span class="text-white google-plus active bi bi-skype"></span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Subscribe Form -->
            <div class="col-md-3 mb-4">
                <h5>Subscribe</h5>
                <p>Subscribe me and get new updates for Fitness Gym and classes, fitness tips.</p>
                <form action="" method="POST" class="mt-4">
                    <div class="input-group">
                        <input type="email" class="form-control border border-danger border-2" placeholder="Enter your email" name="email" required>
                        <div class="input-group-append">
                            <button class="hbtn btn btn-outline-danger text-white subscribe">Subscribe</button>
                        </div>
                    </div>
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $email = htmlspecialchars($_POST["email"]);

                    if (htmlspecialchars($email)) {
                        echo "<div class='alert alert-success alert-dismissible fade show mt-3' role='alert'>Your  subscription request has been sent. Thank you!
                            </div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>
                            <p>Invalid email address. Please try again.</div>";
                    }
                }
                ?>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center mt-5">
            <p>&copy; <?php echo date('Y'); ?> [Fitness Gym]. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>

</html>