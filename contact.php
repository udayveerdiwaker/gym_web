<?php

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
            linear-gradient(rgba(15, 23, 42, 0.97), rgba(2, 6, 23, 0.98)),
            url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .gym-card {
        background: rgba(15, 23, 42, 0.85);
        border-radius: 16px;
        border-top: 4px solid var(--gym-orange);
        backdrop-filter: blur(12px);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        color: var(--text-white);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        border-left: 1px solid rgba(255, 255, 255, 0.05);
        border-right: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* .gym-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
    } */

    .form-control,
    .form-select {
        background-color: rgba(2, 6, 23, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: var(--text-white) !important;
        padding: 14px 16px;
        border-radius: 8px !important;
        transition: all 0.3s ease;
    }

    .form-control::placeholder {
        color: var(--text-muted);
        opacity: 0.7;
    }

    .form-control:focus,
    .form-select:focus {
        background-color: rgba(2, 6, 23, 0.9);
        border-color: var(--gym-orange);
        color: var(--text-white) !important;
        box-shadow: 0 0 0 0.25rem rgba(249, 115, 22, 0.25);
    }

    .input-group-text {
        background-color: var(--gym-orange);
        border-color: var(--gym-orange);
        color: var(--text-white);
        border-radius: 8px 0 0 8px !important;
        width: 48px;
        justify-content: center;
    }

    .btn-primary {
        background-color: var(--gym-orange);
        border-color: var(--gym-orange);
        padding: 14px 30px;
        font-weight: 600;
        border-radius: 8px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(234, 88, 12, 0.3);
    }

    .btn-primary:hover {
        background-color: var(--gym-accent);
        border-color: var(--gym-accent);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(234, 88, 12, 0.4);
    }

    .btn-primary:active {
        transform: translateY(0);
    }

    .text-amber {
        color: var(--gym-secondary);
    }

    .badge-accent {
        background-color: var(--gym-orange);
        letter-spacing: 2px;
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        box-shadow: 0 4px 10px rgba(234, 88, 12, 0.2);
    }



    .map-container {
        border-radius: 12px;
        overflow: hidden;
        border: 3px solid var(--gym-orange);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .contact-icon {
        width: 54px;
        height: 54px;
        background: linear-gradient(135deg, var(--gym-orange), var(--gym-accent));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 18px;
        flex-shrink: 0;
        box-shadow: 0 4px 12px rgba(234, 88, 12, 0.3);
    }

    .alert-success {
        background-color: rgba(22, 163, 74, 0.9);
        border-color: rgba(22, 163, 74, 0.9);
        color: var(--text-white);
        border-radius: 8px;
        border-left: 4px solid #16a34a;
    }

    .alert-danger {
        background-color: rgba(220, 38, 38, 0.9);
        border-color: rgba(220, 38, 38, 0.9);
        color: var(--text-white);
        border-radius: 8px;
        border-left: 4px solid #dc2626;
    }

    .lead {
        color: var(--text-muted);
        font-weight: 400;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 8px;
        color: var(--text-white);
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 700;
    }

    .opening-hours li {
        padding: 10px 0;
        border-bottom: 1px dashed rgba(255, 255, 255, 0.1);
    }

    .opening-hours li:last-child {
        border-bottom: none;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .floating-icon {
            display: none;
        }

        .gym-card {
            padding: 24px !important;
        }

        .contact-icon {
            width: 44px;
            height: 44px;
            margin-right: 12px;
        }
    }

    /* Modal Styles */
    .thankyou-modal .modal-content {
        background: rgba(15, 23, 42, 0.95);
        backdrop-filter: blur(12px);
        border-radius: 16px;
        border-top: 4px solid var(--gym-orange);
        color: var(--text-white);
    }

    .thankyou-modal .modal-header {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .thankyou-modal .modal-footer {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .thankyou-icon {
        font-size: 4rem;
        color: var(--gym-orange);
        margin-bottom: 1.5rem;
    }
</style>

<section class='gym-content-container gym-bg-pattern' id="contact">
    <div class="gym-section-title">
        <p class="gym-underline"><?php echo htmlspecialchars($page_data['title']); ?> Page</p>
    </div>
    <!-- Floating Icons -->
    <i class="fas fa-dumbbell floating-icon" style="font-size: 10rem; top: 5%; left: 3%;"></i>
    <i class="fas fa-running floating-icon floating-delay-1" style="font-size: 8rem; bottom: 10%; right: 5%;"></i>
    <i class="fas fa-weight-hanging floating-icon floating-delay-2" style="font-size: 9rem; top: 55%; left: 10%;"></i>
    <i class="fas fa-heartbeat floating-icon floating-delay-3" style="font-size: 7rem; top: 25%; right: 15%;"></i>

    <div class="container py-5 position-relative" style="z-index: 1;">
        <div class="text-center mb-5">
            <span class="badge badge-accent text-uppercase mb-3">Transform Your Body</span>
            <h1 class="display-4 fw-bold mb-3">Join the <span class="text-amber">Elite Fitness</span> Community</h1>
            <h6 class="lead">Our certified trainers are committed to helping you achieve extraordinary results through personalized fitness programs</h6>
        </div>

        <div class="row g-4">
            <div class="col-lg-7">
                <div class="gym-card p-4 p-lg-5 h-100">
                    <?php if ($success_msg): ?>
                        <div class="alert alert-success alert-dismissible fade show">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-3 fs-4"></i>
                                <div>
                                    <h5 class="alert-heading mb-1">Application Received!</h5>
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
                                    <h5 class="alert-heading mb-1">Submission Error</h5>
                                    <p class="mb-0"><?php echo $error_msg; ?></p>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <h3 class="h3 fw-bold mb-4 pb-2 border-bottom border-secondary">Get Your Free Consultation</h3>
                    <form id="gymContactForm" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name*</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="John Smith" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact" class="form-label">Phone Number*</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    <input type="tel" class="form-control" id="contact" name="contact" placeholder="9876543210" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email Address*</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="subject" class="form-label">How Can We Help?*</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-question-circle"></i></span>
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="Membership Inquiry">Membership Inquiry</option>
                                        <option value="Personal Training">Personal Training</option>
                                        <option value="Group Classes">Group Classes</option>
                                        <option value="Nutrition Guidance">Nutrition Guidance</option>
                                        <option value="Other Questions">Other Questions</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="membership_type" class="form-label">Interested In</label>
                                <select class="form-select" id="membership_type" name="membership_type">
                                    <option value="" selected>Select membership</option>
                                    <option value="Basic">Basic (₹2,999/month)</option>
                                    <option value="Premium">Premium (₹4,999/month)</option>
                                    <option value="VIP">VIP (₹7,999/month)</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Your Fitness Goals*</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text align-items-start pt-3"><i class="fas fa-comment"></i></span>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell us about your fitness goals, challenges, and how we can help you succeed" required></textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg w-100 py-3">
                                    <i class="fas fa-paper-plane me-2"></i> Submit Application
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="gym-card p-4 p-lg-5 h-100">
                    <h3 class="h3 fw-bold mb-4 pb-2 border-bottom border-secondary">Our Location</h3>
                    <div class="map-container mb-4 ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.262337843902!2d78.27726946955646!3d30.092403158779344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39093e09c40d8083%3A0x49bf374532e85cc6!2sstore%20India!5e1!3m2!1sen!2sin!4v1736334680519!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <h3 class="h3 fw-bold mb-4 pb-2 border-bottom border-secondary">Contact Info</h3>
                    <div class="d-flex align-items-start mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h5 class="h5 fw-bold mb-1">Address</h5>
                            <p class="mb-0">Top floor, Om Palace hotel<br>Haridwar road, Rishikesh<br>Uttarakhand, 249201</p>
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

                    <div class="d-flex align-items-start mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h5 class="h5 fw-bold mb-1">Email</h5>
                            <p class="mb-0">info@elitefitness.com<br>support@elitefitness.com</p>
                        </div>
                    </div>

                    <h3 class="h3 fw-bold mb-3 mt-4 pt-3 border-top border-secondary">Opening Hours</h3>
                    <ul class="list-unstyled opening-hours">
                        <li class="d-flex justify-content-between">
                            <span>Monday - Friday</span>
                            <span class="fw-bold">5:00 AM - 11:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Saturday</span>
                            <span class="fw-bold">6:00 AM - 10:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Sunday</span>
                            <span class="fw-bold">Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Thank You Modal -->
    <div class="modal fade thankyou-modal" id="thankYouModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center px-5 py-4">
                    <div class="thankyou-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="h3 fw-bold mb-3">Thank You!</h3>
                    <p class="mb-4">Your application has been submitted successfully. Our team will contact you within 24 hours to discuss your fitness goals.</p>
                    <button type="button" class="btn btn-primary px-4 py-2" data-bs-dismiss="modal">
                        <i class="fas fa-thumbs-up me-2"></i> Got It!
                    </button>
                </div>
                <div class="modal-footer border-0 pt-0 justify-content-center">
                    <p class="small text-muted mb-0">Elite Fitness Team</p>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('gymContactForm');
            const thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));

            // For demo purposes - in a real implementation, you would handle form submission
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Simulate form processing
                setTimeout(() => {
                    // Reset form
                    contactForm.reset();

                    // Show thank you modal
                    thankYouModal.show();

                    // You would typically have AJAX submission here
                    // and show modal on success response
                }, 1000);
            });

            // If using PHP form processing, you would conditionally show the modal
            <?php if ($success_msg): ?>
                thankYouModal.show();
            <?php endif; ?>
        });
    </script>
</section>
<style>
    /* (Previous CSS styles remain the same) */
</style>