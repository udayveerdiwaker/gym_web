<?php
include "header.php";
?>
<!-- <img src="gym.jpg" class="img-fluid img" alt="Responsive image"> -->
<section id="home" class="section_same">
    <div class="col-md-12 align-items-center">
        <img src="miller.jpg" class="img-fluid" alt="...">
        <div class="town">
            <p class="text-danger fs-4 mt-0">Gym & Fitness Center</p>
            <h2 class="display-1 m-0 mt-2 mt-md-4 text-white fw-bold text-center">Best Gym In Town</h2>
        </div>

    </div>
</section>

<section id="about" class="mt-1 row g-0 position-relative bg-secondary">
    <h2 class="text-light fs-1">About Us</h2>
    <div class="col-md-6 mt-4 mb-md-0">
        <img src="gym.jpg" class="w-100">
    </div>
    <div class="col-md-6 mt-4 ps-md-5">
        <!-- <h5 class="mt-0 text-danger fs-2">Welcome to Best Gym & Fitness</h5> -->
        <p class="text-light fs-5">Welcome to our fitness gym, where we prioritize your health and wellness. Our state-of-the-art equipment, expert trainers, and supportive community help you achieve your fitness goals and lead a healthier life.</p>
    </div>
</section>

<!-- Bootstrap JS for functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENnDgkz4e4CmoCDXMopG98l9LlmhvZ0gdVbd5H3RLSVA0n4Ejo8vA4g1tQri+/5E" crossorigin="anonymous"></script>
</body>

</html>

<!-- <header>
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand fs-1 fw-bold" href="#">
                    FITNESS GYM
                </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <img src="gym.jpg" class="img-fluid img" alt="Responsive image">
    <section id="home">
        <div class="col-md-12 align-items-center">
            <img src="miller.jpg" class="w-100 h-100" alt="...">
            <p class="text-danger fs-4 mt-0">Gym & Fitness Center</p>
            <h2 class="display-1 m-0 mt-2 mt-md-4 text-white fw-bold text-center">Best Gym In Town</h2>
        </div>
    </section>

    <section id="about" class="mt-1 row g-0 position-relative bg-secondary">
        <h2 class="text-ligth fs-1">About Us</h2>
        <div class="col-md-6 mt-4 mb-md-0">
            <img src="gym.jpg" class="w-100">
        </div>
        <div class="col-md-6 mt-4 ps-md-5 ">
            <h5 class="mt-0 text-danger fs-2">Welcome to Best Gym & Fitness</h5>
            <p class="text-light fs-5">Welcome to our fitness gym, where we prioritize your health and wellness. Our state-of-the-art equipment, expert trainers, and supportive community help you achieve your fitness goals and lead a healthier life.</p>
        </div>
    </section> -->

<!-- <section id="classes">
        <h3>Yoga Classes</h3>
        <p>Relax and rejuvenate with our expert-led yoga sessions.</p>

        <div>
            <h3>HIIT Workouts</h3>
            <p>High-Intensity Interval Training for maximum calorie burn.</p>
        </div>
        <div>
            <h3>Personal Training</h3>
            <p>One-on-one sessions tailored to your fitness goals.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-card">
                <h3>Personal Training</h3>
                <p>One-on-one sessions with certified trainers to help you achieve your fitness goals.</p>
            </div>
            <div class="service-card">
                <h3>Group Classes</h3>
                <p>Join our exciting group classes including yoga, Zumba, and spinning.</p>
            </div>
            <div class="service-card">
                <h3>Nutrition Counseling</h3>
                <p>Get personalized nutrition advice to complement your workouts.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions? Reach out to us!</p>
            <form action="submit_contact.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section> -->

<!-- <section id="home">
        <div class="container">
            <h1>Welcome to [Gym Name]</h1>
            <p>Your ultimate destination for fitness and well-being. Join us today to achieve your fitness goals!</p>
            <a href="#about" class="btn">Learn More</a>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>[Gym Name] has been empowering individuals for over [X] years. Our state-of-the-art equipment, certified trainers, and variety of fitness classes make us the top choice for fitness enthusiasts.</p>
            <img src="gym.jpg" alt="Gym Interior">
        </div>
    </section>
   
    <section id="membership">
        <div class="container">
            <h2>Membership Plans</h2>
            <div class="membership-plan">
                <h3>Basic Plan</h3>
                <p>$29.99/month</p>
                <p>Access to gym equipment and locker facilities.</p>
                <a href="signup.php" class="btn">Sign Up</a>
            </div>
            <div class="membership-plan">
                <h3>Premium Plan</h3>
                <p>$49.99/month</p>
                <p>Includes basic features plus group classes and personal training sessions.</p>
                <a href="signup.php" class="btn">Sign Up</a>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions? Reach out to us!</p>
            <form action="submit_contact.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
            <p>Email: info@[gymname].com | Phone: (123) 456-7890</p>
        </div>
    </section> -->

</body>

</html>