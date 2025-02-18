<?php
include 'header.php';

// // Database connection
// $servername = "localhost";
// $username = "root"; // Change this to your database username
// $password = ""; // Change this to your database password
// $dbname = "gym_db";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Handle form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $membership = $_POST['membership'];
//     $payment = $_POST['payment'];

//     $sql = "INSERT INTO user_submissions (full_name, email, phone, membership_plan, payment_method) 
//             VALUES ('$name', '$email', '$phone', '$membership', '$payment')";

//     if ($conn->query($sql) === TRUE) {
//         echo "<div class='alert alert-success'>Thank you for signing up!</div>";
//     } else {
//         echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
//     }
// }

// // Fetch membership plans from the database
// $sql = "SELECT * FROM membership_plans";
// $result = $conn->query($sql);
// $plans = [];
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $plans[] = $row;
//     }
// }

// $conn->close();
?>

<!-- Membership Plan Form Section -->
<section class="py-5 bg-black section contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="text-center mb-4 mt-5 fw-bold fs-1">Sign Up for Membership</h2>
                    <form action="index.php" method="POST" class="php-email-form">
                        <!-- Name Input -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <!-- Phone Input -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>

                        <!-- Membership Plan Dropdown -->
                        <div class="mb-3">
                            <label for="membership" class="form-label">Select Membership Plan</label>
                            <!-- <select class="form-select" id="membership" name="membership" required>
                                <option value="" disabled selected>Select Plan</option>
                                <?php foreach ($plans as $plan): ?>
                                    <option value="<?= $plan['plan_name']; ?>">
                                        <?= $plan['plan_name']; ?> - $<?= number_format($plan['price'], 2); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select> -->
                        </div>

                        <!-- Payment Method -->
                        <div class="mb-3">
                            <label for="payment" class="form-label">Payment Method</label>
                            <select type="select" class="form-select" id="payment" name="payment" required>
                                <option value="" disabled selected>Select Payment Method</option>
                                <option value="Credit Card" class="text-black">Credit Card</option>
                                <option value="UPI" class="text-black">UPI</option>
                                <option value="GooglePay" class="text-black">GooglePay</option>
                            </select>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="terms" required>
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#">terms and conditions</a>.
                            </label>
                        </div>

                        <!-- Submit Button -->

                        <div class="input-group-append d-grid text-center">
                            <button class="btn hbtn text-white" type="submit" name="submit">Sign Up Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap 5 JavaScript & Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<?php
include 'footer.php';
?>