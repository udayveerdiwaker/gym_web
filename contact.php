<?php
include 'header.php';
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

<div class="container-fluid page-header">
    <div class="d-flex flex-column align-items-center justify-content-center">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Contact Us</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="home.php">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Contact Us</p>
        </div>
    </div>
</div>

<!-- Contact Section -->

<section id="contact" class="contact">
    <p class="fs-5 fw-bold text_red text-center">Get In Touch</p>

    <!-- <p class="display-4  font-weight-bold text_gray text-center">Email Us For Any Query</p> -->
    <p class="display-6 text_gray font_weight fw-bold text-center">Need Help? Send Us an Email</p>
    <div class="container">
        <div data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-7">
                    <div>
                        <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2"></label>
                                    <input type="text" name="name" id="name-field validationCustom01" placeholder="Your Name" class="form-control" required="">
                                    <div class="valid-feedback">
                                        Looks Good.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="number-field" class="pb-2"></label>
                                    <input type="text" minlength="0" maxlength="10" class="form-control" name="number" id="number-field validationCustom02" required="" placeholder="Contact">
                                    <div class="invalid-feedback">
                                        Please Fill Your Contact Number.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="email-field" class="pb-2"></label>
                                    <input type="email" class="form-control" name="email" id="email-field validationCustom03" required="" placeholder="Your Email">
                                    <div class="invalid-feedback">
                                        Please Fill Your Email.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2"></label>
                                    <input type="text" class="form-control" name="subject" id="subject-field validationCustom04" required="" placeholder="Subject">
                                    <div class="invalid-feedback">
                                        Please Write Your Subject.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2"></label>
                                    <textarea class="form-control textarea" name="message" rows="9" id="message-field validationCustom05" required="" placeholder="Message"></textarea>
                                    <div class="invalid-feedback">
                                        Please Write Your Massage.
                                    </div>
                                </div>
                                <!-- <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-danger" name="submit">Send message</button>
                            </div> -->
                                <div class="input-group-append col-md-12 text-center mt-4">
                                    <button class="hbtn btn" type="submit" name="submit">Send message</button>
                                </div>
                            </div>
                            <?php
                            // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            //     $name = htmlspecialchars($_POST["name"]);
                            //     $number = htmlspecialchars($_POST["number"]);
                            //     $email = htmlspecialchars($_POST["email"]);
                            //     $subject = htmlspecialchars($_POST["subject"]);
                            //     $message = htmlspecialchars($_POST["message"]);

                            //     echo "  <div class='alert alert-success mt-3' role='alert'>
                            //              Thank you $name Your message has been successfully submitted I We will get back to you shortly.</div>";
                            // }
                            ?>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="info-wrap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.262337843902!2d78.27726946955646!3d30.092403158779344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39093e09c40d8083%3A0x49bf374532e85cc6!2sstore%20India!5e1!3m2!1sen!2sin!4v1736334680519!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
    document.querySelector('.php-email-form').addEventListener('submit', function(e) {
        let isValid = true;

        // Validate Name
        const nameField = document.getElementById('name-field');
        if (!nameField.value.trim()) {
            nameField.classList.add('is-invalid');
            isValid = false;
        } else {
            nameField.classList.remove('is-invalid');
            nameField.classList.add('is-valid');
        }

        // Validate Number
        const numberField = document.getElementById('number-field');
        const numberRegex = /^[0-9]{10}$/;
        if (!numberRegex.test(numberField.value.trim())) {
            numberField.classList.add('is-invalid');
            isValid = false;
        } else {
            numberField.classList.remove('is-invalid');
            numberField.classList.add('is-valid');
        }

        // Validate Email
        const emailField = document.getElementById('email-field');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailField.value.trim())) {
            emailField.classList.add('is-invalid');
            isValid = false;
        } else {
            emailField.classList.remove('is-invalid');
            emailField.classList.add('is-valid');
        }

        // Validate Subject
        const subjectField = document.getElementById('subject-field');
        if (!subjectField.value.trim()) {
            subjectField.classList.add('is-invalid');
            isValid = false;
        } else {
            subjectField.classList.remove('is-invalid');
            subjectField.classList.add('is-valid');
        }

        // Validate Message
        const messageField = document.getElementById('message-field');
        if (!messageField.value.trim()) {
            messageField.classList.add('is-invalid');
            isValid = false;
        } else {
            messageField.classList.remove('is-invalid');
            messageField.classList.add('is-valid');
        }

        if (!isValid) {
            e.preventDefault(); // Prevent form submission if validation fails
        }
    });
</script>

<?php
include 'footer.php';

?>