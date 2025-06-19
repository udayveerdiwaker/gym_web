<?php
include 'config.php';
include 'header.php';

// Initialize variables
$success_msg = '';
$error_msg = '';

if (isset($_POST['submit'])) {
    // Get form data
    $name = trim($_POST['name']);
    $contact = trim($_POST['contact']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    $membership_type = isset($_POST['membership_type']) ? trim($_POST['membership_type']) : '';
    $preferred_time = isset($_POST['preferred_time']) ? trim($_POST['preferred_time']) : '';

    // Escape input values
    $name = mysqli_real_escape_string($conn, $name);
    $contact = mysqli_real_escape_string($conn, $contact);
    $email = mysqli_real_escape_string($conn, $email);
    $subject = mysqli_real_escape_string($conn, $subject);
    $message = mysqli_real_escape_string($conn, $message);
    $membership_type = mysqli_real_escape_string($conn, $membership_type);
    $preferred_time = mysqli_real_escape_string($conn, $preferred_time);

    // SQL query
    $sql = "INSERT INTO contact (
        name, contact, email, subject, message, membership_type, preferred_time, submission_date
    ) VALUES (
        '$name', '$contact', '$email', '$subject', '$message', '$membership_type', '$preferred_time', NOW()
    )";

    if (mysqli_query($conn, $sql)) {
        $success_msg = "Thank you! We'll contact you soon.";
    } else {
        $error_msg = "Error: " . mysqli_error($conn);
    }
}
?>


<style>
    .gym-bg-pattern {
        background:
            linear-gradient(rgba(15, 23, 42, 0.95), rgba(15, 23, 42, 0.98)),
            url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .gym-card {
        background: rgba(26, 26, 26, 0.9);
        border-radius: 12px;
        border-top: 4px solid var(--gym-orange);
        backdrop-filter: blur(8px);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        color: var(--text-white);
    }



    .form-control,
    .form-select {
        background-color: var(--gym-dark);
        border: 1px solid var(--gym-dark);
        color: var(--text-white) !important;
        padding: 12px 15px;
    }

    .form-control:focus,
    .form-select:focus {
        background-color: var(--gym-dark);
        border-color: var(--gym-accent);
        color: var(--text-white) !important;
        box-shadow: 0 0 0 0.25rem rgba(220, 38, 38, 0.25);
    }

    .input-group-text {
        background-color: var(--gym-accent);
        border-color: var(--gym-accent);
        color: var(--text-white);
    }

    .btn-primary {
        background-color: var(--gym-accent);
        border-color: var(--gym-accent);
        padding: 12px 30px;
        font-weight: 600;
    }

    .btn-primary:hover {
        background-color: var(--gym-red);
        border-color: var(--gym-red);
    }

    .text-amber {
        color: var(--gym-secondary);
    }

    .badge-accent {
        background-color: var(--gym-accent);
        letter-spacing: 2px;
    }

    .floating-icon {
        position: absolute;
        opacity: 0.1;
        z-index: 0;
        animation: float 6s ease-in-out infinite;
        color: var(--gym-accent);
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .floating-delay-1 {
        animation-delay: 1s;
    }

    .floating-delay-2 {
        animation-delay: 2s;
    }

    .floating-delay-3 {
        animation-delay: 3s;
    }

    .map-container {
        border-radius: 8px;
        overflow: hidden;
        border: 3px solid var(--gym-orange);
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background-color: var(--gym-accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .alert-success {
        background-color: rgba(25, 135, 84, 0.9);
        border-color: rgba(25, 135, 84, 0.9);
        color: var(--text-white);
    }

    .alert-danger {
        background-color: rgba(220, 53, 69, 0.9);
        border-color: rgba(220, 53, 69, 0.9);
        color: var(--text-white);
    }

    .lead {
        color: var(--text-white);
        font-weight: bold;
    }
</style>
</head>

<body class="gym-bg-pattern">
    <!-- Floating Icons -->
    <i class="fas fa-dumbbell floating-icon" style="font-size: 8rem; top: 10%; left: 5%;"></i>
    <i class="fas fa-running floating-icon floating-delay-1" style="font-size: 6rem; bottom: 15%; right: 8%;"></i>
    <i class="fas fa-weight-hanging floating-icon floating-delay-2" style="font-size: 7rem; top: 60%; left: 15%;"></i>
    <i class="fas fa-heartbeat floating-icon floating-delay-3" style="font-size: 5rem; top: 30%; right: 20%;"></i>

    <div class="container py-5 position-relative" style="z-index: 1;">
        <div class="text-center mb-5">
            <span class="badge badge-accent text-uppercase px-4 py-2 mb-3">GET STARTED</span>
            <h1 class="display-4 fw-bold mb-3">Join the <span class="text-amber">Elite Fitness</span> Family</h1>
            <h6 class="lead">Our expert trainers are ready to help you achieve your fitness goals</h6>
        </div>

        <div class="row g-4">
            <div class="col-lg-7">
                <div class="gym-card p-4 p-md-5 h-100">
                    <?php if ($success_msg): ?>
                        <div class="alert alert-success alert-dismissible fade show">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-3 fs-4"></i>
                                <div>
                                    <h5 class="alert-heading mb-1">Thank You!</h5>
                                    <p class="mb-0"><?php echo $success_msg; ?></p>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php elseif ($error_msg): ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-exclamation-triangle me-3 fs-4"></i>
                                <div>
                                    <h5 class="alert-heading mb-1">Error</h5>
                                    <p class="mb-0"><?php echo $error_msg; ?></p>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <h3 class="h3 fw-bold mb-4">Contact Form</h3>
                    <form method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact" class="form-label">Phone Number</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    <input type="tel" class="form-control" id="contact" name="contact" placeholder="10-digit number" value="">
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="subject" class="form-label">Subject</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-question-circle"></i></span>
                                    <select class="form-select" id="subject" name="subject">
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="Membership Inquiry">Membership Inquiry</option>
                                        <option value="Personal Training">Personal Training</option>
                                        <option value="Group Classes">Group Classes</option>
                                        <option value="Other Questions">Other Questions</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="membership_type" class="form-label">Interested In</label>
                                <select class="form-select" id="membership_type" name="membership_type">
                                    <option value="" selected>Not specified</option>
                                    <option value="Basic">Basic Membership</option>
                                    <option value="Premium">Premium Membership</option>
                                    <option value="VIP">VIP Membership</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Your Fitness Goals</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text align-items-start pt-3"><i class="fas fa-comment"></i></span>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell us about your fitness goals and how we can help"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg w-100">
                                    <i class="fas fa-paper-plane me-2"></i> Submit Application
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="gym-card p-4 p-md-5 h-100">
                    <h3 class="h3 fw-bold mb-4">Our Location</h3>
                    <div class="map-container mb-4 ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.262337843902!2d78.27726946955646!3d30.092403158779344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39093e09c40d8083%3A0x49bf374532e85cc6!2sstore%20India!5e1!3m2!1sen!2sin!4v1736334680519!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <h3 class="h3 fw-bold mb-4">Contact Info</h3>
                    <div class="d-flex align-items-start mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h5 class="h5 fw-bold mb-1">Address</h5>
                            <p class="mb-0">Top floor, Om Palace hotel, Haridwar road, Rishikesh<br>Muscle City, MC 90210</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt text-white"></i>
                        </div>
                        <div>
                            <h5 class="h5 fw-bold mb-1">Phone</h5>
                            <p class="mb-0">+91 9720067044<br>+91 9720067033</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="contact-icon">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h5 class="h5 fw-bold mb-1">Email</h5>
                            <p class="mb-0">info@elitefitness.com<br>support@elitefitness.com</p>
                        </div>
                    </div>

                    <hr class="my-4 bg-secondary">

                    <h3 class="h3 fw-bold mb-3">Opening Hours</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-2">
                            <span>Monday - Friday</span>
                            <span class="fw-bold">5:00 AM - 11:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between mb-2">
                            <span>Saturday</span>
                            <span class="fw-bold">6:00 AM - 10:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Sunday</span>
                            <span class="fw-bold">OFF</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>