<?php
// include 'conn.php';

// if(isset($_POST('submit'))) {
//     $name = $_POST['name'];
//     $contact = $_POST['contact'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     $insert = "INSERT INTO `contact` (`name`,`contact`, `email`, `subject`, `message`, ) 
//             VALUES ('$name', '$contact', '$email','$subject', '$message')";
//     mysqli_query($conn, $insert);

//     if ($conn->query($insert) == TRUE) {
//         echo "<div class='alert alert-success'>Thank you $name for reaching out! We will get back to you soon.</div>";
//     } else {
//         echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
//     }
// }

?>
<!-- Contact Section -->

<section id="contact" class="contact">
    <div class="container cont">
        <p class="fs-5 fw-bold text_red text-center">Get In Touch</p>
        <p class="display-6 text_gray font_weight fw-bold text-center">Need Help? Send Us an Email</p>

        <div data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-7">
                    <form action="" method="post" class="php-email-form needs-validation" novalidate data-aos="fade-up" data-aos-delay="200">
                        <div class="row">
                            <!-- Name Field -->
                            <div class="col-md-6">
                                <label for="name-field" class="form-label pb-2"></label>
                                <input type="text" name="name" id="name-field" class="form-control" placeholder="Your Name" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>

                            <!-- Contact Field -->
                            <div class="col-md-6">
                                <label for="number-field" class="form-label pb-2"></label>
                                <input type="text" name="number" id="number-field" class="form-control" placeholder="Contact" minlength="10" maxlength="10" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter a valid 10-digit contact number.</div>
                            </div>

                            <!-- Email Field -->
                            <div class="col-md-12">
                                <label for="email-field" class="form-label pb-2"></label>
                                <input type="email" name="email" id="email-field" class="form-control" placeholder="Your Email" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <!-- Subject Field -->
                            <div class="col-md-12">
                                <label for="subject-field" class="form-label pb-2"></label>
                                <input type="text" name="subject" id="subject-field" class="form-control" placeholder="Subject" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter a subject.</div>
                            </div>

                            <!-- Message Field -->
                            <div class="col-md-12">
                                <label for="message-field" class="form-label "></label>
                                <textarea name="message" id="message-field" class="form-control textarea" rows="9" placeholder="Message" required></textarea>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please write your message.</div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-md-12 text-center gy-4">
                                <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Google Map -->
                <div class="col-lg-5 h-100">
                    <div class="info-wrap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.262337843902!2d78.27726946955646!3d30.092403158779344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39093e09c40d8083%3A0x49bf374532e85cc6!2sstore%20India!5e1!3m2!1sen!2sin!4v1736334680519!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
<?php

?>