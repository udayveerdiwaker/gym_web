<?php
include 'config.php';
?>

<style>
    .gym-footer {
        background: linear-gradient(135deg, var(--gym-dark), var(--gym-primary));
        color: var(--gym-light);
        padding: 50px 0 20px;
        position: relative;
        overflow: hidden;
    }

    .gym-footer::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--gym-accent), var(--gym-secondary));
    }

    .gym-footer h5 {
        color: var(--gym-secondary);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
    }

    .gym-footer h5::after {
        content: "";
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 40px;
        height: 3px;
        background: var(--gym-accent);
    }

    .gym-footer .nav-link {
        color: var(--gym-light);
        padding: 5px 0;
        transition: all 0.3s ease;
        position: relative;
    }

    .gym-footer .nav-link:hover {
        color: var(--gym-secondary);
        transform: translateX(3px);
    }

    .gym-footer .nav-link::before {
        content: "→";
        position: absolute;
        left: -15px;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .gym-footer .nav-link:hover::before {
        opacity: 1;
        left: -20px;
    }

    .gym-footer .social-icons {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .gym-footer .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: white;
        font-size: 18px;
        transition: all 0.3s ease;
    }

    .gym-footer .social-icons a:hover {
        background: var(--gym-accent);
        transform: translateY(-3px);
    }

    .gym-footer .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        border-radius: 4px 0 0 4px;
    }

    .gym-footer .form-control::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .gym-footer .form-control:focus {
        background: rgba(255, 255, 255, 0.2);
        border-color: var(--gym-secondary);
        box-shadow: none;
        color: white;
    }

    .gym-footer .subscribe-btn {
        background: var(--gym-accent);
        color: white;
        border: none;
        border-radius: 0 4px 4px 0;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    .gym-footer .subscribe-btn:hover {
        background: var(--gym-secondary);
    }

    .gym-footer .map-container {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        border: 3px solid var(--gym-accent);
    }

    .gym-footer .copyright {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 20px;
        margin-top: 40px;
        font-size: 14px;
    }

    .gym-footer .alert {
        border-radius: 4px;
        margin-top: 15px;
    }

    .gym-dumbbell-icon {
        margin-right: 8px;
    }

    /* Newsletter Specific Styles */
    .subscribe-btn {
        background-color: var(--gym-orange);
        color: white;
        border: none;
        padding: 0 15px;
        transition: all 0.3s ease;
    }

    .subscribe-btn:hover {
        background-color: var(--gym-accent);
        transform: translateX(3px);
    }

    .newsletter-icon {
        color: var(--gym-orange);
        margin-right: 10px;
    }

    /* Modal Styles */
    .newsletter-modal .modal-content {
        background: rgba(15, 23, 42, 0.98);
        backdrop-filter: blur(12px);
        border-radius: 16px;
        border-top: 4px solid var(--gym-orange);
        color: var(--text-white);
    }

    .newsletter-modal .modal-header {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .newsletter-success-icon {
        font-size: 3rem;
        color: var(--gym-orange);
        margin-bottom: 1rem;
    }

    .newsletter-input {
        border-radius: 8px 0 0 8px !important;
    }
</style>

<footer class="gym-footer">
    <div class="container">
        <div class="row">
            <!-- Google Map -->
            <div class="col-12 mb-5">
                <h5><i class="fas fa-dumbbell gym-dumbbell-icon"></i> Find Our Gym</h5>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3209.340720323525!2d78.27535507525192!3d30.092354274899545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39093f3354762571%3A0x529be26f1d6d1438!2sWebsite%20Banaye%20%26%20Computer%20Sikhe!5e1!3m2!1sen!2sin!4v1750484288258!5m2!1sen!2sin"
                        frameborder="0" style="border:0; width: 100%; height: 280px;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- About Us -->
            <div class="col-md-3 mb-4">
                <h5><i class="fas fa-dumbbell gym-dumbbell-icon"></i> About Us</h5>
                <p>Transform your body and mind at our state-of-the-art fitness facility. Our expert trainers are dedicated to helping you achieve your fitness goals.</p>
                <a href="about.php" class="btn btn-outline-light mt-3">
                    <i class="fas fa-arrow-right me-2"></i>Learn More
                </a>
            </div>

            <!-- Navigation -->
            <div class="col-md-2 mb-4">
                <h5><i class="fas fa-dumbbell gym-dumbbell-icon"></i> Quick Links</h5>
                <ul class="navbar-nav ms-auto list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <?php foreach ($page_name as $allPages) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=<?php echo $allPages['slug']; ?>">
                                <?php echo $allPages['title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-4">
                <h5><i class="fas fa-dumbbell gym-dumbbell-icon"></i> Contact Us</h5>
                <ul class="list-unstyled contact-info">
                    <li class="mb-2">
                        <i class="fas fa-phone-alt me-2 text-gym-accent"></i>
                        <strong>Phone:</strong> +19 9720067044
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope me-2 text-gym-accent"></i>
                        <strong>Email:</strong> udayveerdiwaker2@gmail.com
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-map-marker-alt me-2 text-gym-accent"></i>
                        <strong>Location:</strong> Top floor, Om Palace hotel, Haridwar road, Rishikesh
                    </li>
                </ul>

                <h6 class="mt-4"><i class="fas fa-dumbbell gym-dumbbell-icon"></i> Follow Us</h6>
                <div class="social-icons">
                    <a href="https://web.telegram.org/k/" title="Telegram">
                        <i class="bi bi-telegram"></i>
                    </a>
                    <a href="#" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/shiva__diwaker" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://web.skype.com/" title="Skype">
                        <i class="bi bi-skype"></i>
                    </a>
                </div>
            </div>

            <!-- Subscribe Form -->
            <div class="col-md-3 mb-4">
                <h5><i class="fas fa-dumbbell gym-dumbbell-icon"></i> Newsletter</h5>
                <p>Subscribe for fitness tips, class updates, and exclusive offers!</p>
                <?php

                $msg = "";
                $msg_type = ""; // success/error

                if (isset($_POST["email_sub"])) {
                    $email = trim($_POST["email"]);
                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $msg = "Invalid email format.";
                        $msg_type = "error";
                    } else {
                        // Escape email for safety
                        $email = mysqli_real_escape_string($conn, $email);

                        // Check if email already exists
                        $check_sql = "SELECT id FROM newsletter WHERE email = '$email'";
                        $result = mysqli_query($conn, $check_sql);

                        if (mysqli_num_rows($result) > 0) {
                            $msg = "This $email email is already subscribed.";
                            $msg_type = "error";
                        } else {
                            // Insert email
                            $insert_sql = "INSERT INTO newsletter (email) VALUES ('$email')";
                            if (mysqli_query($conn, $insert_sql)) {
                                $msg = "Thank you for subscribing!";
                                $msg_type = "success";
                            } else {
                                $msg = "Something went wrong. Please try again.";
                                $msg_type = "error";
                            }
                        }
                    }
                }
                ?>

                <form id="newsletterForm" action="" method="POST" class="mt-4 needs-validation" novalidate>
                    <div class="input-group">
                        <input type="email" class="form-control newsletter-input"
                            placeholder="Your email"
                            name="email"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            required>
                        <button class="btn subscribe-btn" name="email_sub" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        <div class="invalid-feedback">
                            Please enter a valid email address
                        </div>
                    </div>
                </form>
            </div>

            <!-- Newsletter Thank You Modal -->
            <div class="modal fade newsletter-modal" id="newsletterModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center p-5">
                            <div class="newsletter-success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h4 class="fw-bold mb-3">You're Subscribed!</h4>
                            <p class="mb-4">Thank you for joining the Elite Fitness community. Look out for exclusive content in your inbox.</p>
                            <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">
                                Let's Get Fit! <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Error Modal -->
            <div class="modal fade newsletter-modal" id="errorModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center p-5">
                            <div class="newsletter-error-icon">
                                <i class="fas fa-exclamation-circle"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Subscription Failed</h4>
                            <p class="mb-4" id="errorMessage"></p>
                            <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">
                                Try Again <i class="fas fa-redo ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const newsletterForm = document.getElementById('newsletterForm');
                    const successModal = new bootstrap.Modal(document.getElementById('newsletterModal'));
                    const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                    const errorMessage = document.getElementById('errorMessage');

                    // Client-side validation
                    newsletterForm.addEventListener('submit', function(e) {
                        if (!newsletterForm.checkValidity()) {
                            e.preventDefault();
                            e.stopPropagation();
                        }

                        newsletterForm.classList.add('was-validated');
                    });

                    // Handle PHP response
                    <?php if ($msg && $msg_type == "success"): ?>
                        successModal.show();
                    <?php elseif ($msg && $msg_type == "error"): ?>
                        errorMessage.textContent = "<?php echo $msg; ?>";
                        errorModal.show();
                    <?php endif; ?>

                });
            </script>

            <!-- Copyright -->
            <div class="text-center copyright">
                <p>&copy; <?php echo date('Y'); ?> <strong>PowerFit Gym</strong>. All rights reserved.</p>
            </div>
        </div>
</footer>
</body>

</html>