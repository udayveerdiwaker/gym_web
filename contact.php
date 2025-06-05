<?php
include 'config.php';
include 'header.php';

// Initialize variables
$errors = [];
$success_msg = '';
$error_msg = '';

if (isset($_POST['submit'])) {
    // Sanitize and validate inputs
    $name = trim($_POST['name']);
    $contact = trim($_POST['contact']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    $membership_type = isset($_POST['membership_type']) ? trim($_POST['membership_type']) : '';
    $preferred_time = isset($_POST['preferred_time']) ? trim($_POST['preferred_time']) : '';

    // Validation
    if (empty($name)) {
        $errors['name'] = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors['name'] = "Only letters and spaces allowed";
    }

    if (empty($contact)) {
        $errors['contact'] = "Phone number is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $contact)) {
        $errors['contact'] = "Invalid phone number (10 digits required)";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }

    if (empty($subject)) {
        $errors['subject'] = "Please select a subject";
    }

    if (empty($message)) {
        $errors['message'] = "Message is required";
    } elseif (strlen($message) < 15) {
        $errors['message'] = "Message should be at least 15 characters";
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO contact (
            name, 
            contact, 
            email, 
            subject, 
            message, 
            membership_type, 
            preferred_time, 
            submission_date
        ) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");

        $stmt->bind_param(
            "sssssss",
            $name,
            $contact,
            $email,
            $subject,
            $message,
            $membership_type,
            $preferred_time
        );

        if ($stmt->execute()) {
            $success_msg = "Thank you! We'll contact you soon.";
            // Clear form fields
            $_POST = array();
        } else {
            $error_msg = "Error: " . $stmt->error;
        }
        $stmt->close();
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
    }

    .gym-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .form-control,
    .form-select {
        background-color: var(--gym-dark);
        border: 1px solid var(--gym-dark);
        color: var(--text-white);
        padding: 12px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
        background-color: var(--gym-dark);
        border-color: var(--gym-accent);
        color: var(--text-white);
        box-shadow: 0 0 0 0.25rem rgba(220, 38, 38, 0.25);
    }

    .input-group-text {
        background-color: var(--gym-accent);
        border-color: var(--gym-accent);
        color: white;
    }

    .btn-primary {
        background-color: var(--gym-accent);
        border-color: var(--gym-accent);
        padding: 12px 30px;
        font-weight: 600;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #c82333;
        border-color: #bd2130;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(220, 38, 38, 0.3);
    }

    .btn-secondary {
        background-color: var(--btn-color);
        border-color: var(--btn-color);
        color: var(--gym-dark);
        font-weight: 600;
    }

    .text-accent {
        color: var(--gym-accent);
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

    .invalid-feedback {
        color: var(--gym-accent);
        font-weight: 500;
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
        box-shadow: 0 4px 10px rgba(220, 38, 38, 0.3);
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
            <p class="lead">Our expert trainers are ready to help you achieve your fitness goals</p>
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
                    <form method="POST" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name *</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control <?php echo isset($errors['name']) ? 'is-invalid' : ''; ?>"
                                        id="name" name="name" placeholder="Your Name"
                                        value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required>
                                    <?php if (isset($errors['name'])): ?>
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-2"></i>
                                            <?php echo $errors['name']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact" class="form-label">Phone Number *</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    <input type="tel" class="form-control <?php echo isset($errors['contact']) ? 'is-invalid' : ''; ?>"
                                        id="contact" name="contact" placeholder="10-digit number"
                                        value="<?php echo isset($_POST['contact']) ? htmlspecialchars($_POST['contact']) : ''; ?>" required>
                                    <?php if (isset($errors['contact'])): ?>
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-2"></i>
                                            <?php echo $errors['contact']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email Address *</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : ''; ?>"
                                        id="email" name="email" placeholder="your@email.com"
                                        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                                    <?php if (isset($errors['email'])): ?>
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-2"></i>
                                            <?php echo $errors['email']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="subject" class="form-label">Subject *</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-question-circle"></i></span>
                                    <select class="form-select <?php echo isset($errors['subject']) ? 'is-invalid' : ''; ?>"
                                        id="subject" name="subject" required>
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="Membership Inquiry" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Membership Inquiry') ? 'selected' : ''; ?>>Membership Inquiry</option>
                                        <option value="Personal Training" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Personal Training') ? 'selected' : ''; ?>>Personal Training</option>
                                        <option value="Group Classes" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Group Classes') ? 'selected' : ''; ?>>Group Classes</option>
                                        <option value="Other Questions" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Other Questions') ? 'selected' : ''; ?>>Other Questions</option>
                                    </select>
                                    <?php if (isset($errors['subject'])): ?>
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-2"></i>
                                            <?php echo $errors['subject']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="membership_type" class="form-label">Interested In</label>
                                <select class="form-select" id="membership_type" name="membership_type">
                                    <option value="" selected>Not specified</option>
                                    <option value="Basic" <?php echo (isset($_POST['membership_type']) && $_POST['membership_type'] == 'Basic') ? 'selected' : ''; ?>>Basic Membership</option>
                                    <option value="Premium" <?php echo (isset($_POST['membership_type']) && $_POST['membership_type'] == 'Premium') ? 'selected' : ''; ?>>Premium Membership</option>
                                    <option value="VIP" <?php echo (isset($_POST['membership_type']) && $_POST['membership_type'] == 'VIP') ? 'selected' : ''; ?>>VIP Membership</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Your Fitness Goals *</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text align-items-start pt-3"><i class="fas fa-comment"></i></span>
                                    <textarea class="form-control <?php echo isset($errors['message']) ? 'is-invalid' : ''; ?>"
                                        id="message" name="message" rows="5"
                                        placeholder="Tell us about your fitness goals and how we can help" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                                    <?php if (isset($errors['message'])): ?>
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-2"></i>
                                            <?php echo $errors['message']; ?>
                                        </div>
                                    <?php endif; ?>
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
                            <p class="mb-0 text-light">Top floor, Om Palace hotel, Haridwar road, Rishikesh<br>Muscle City, MC 90210</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt text-white"></i>
                        </div>
                        <div>
                            <h5 class="h5 fw-bold mb-1">Phone</h5>
                            <p class="mb-0 text-light">+91 9720067044<br>+91 9720067033</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="contact-icon">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h5 class="h5 fw-bold mb-1">Email</h5>
                            <p class="mb-0 text-light">info@elitefitness.com<br>support@elitefitness.com</p>
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
    <script>
        // Form validation
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.needs-validation');

            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);

            // Phone number formatting
            const phoneInput = document.getElementById('contact');
            phoneInput.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, '').slice(0, 10);
            });
        });
    </script>