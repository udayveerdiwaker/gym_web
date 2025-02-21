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
<section class="py-5 section Contact">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="fw-bold">Sign Up for Membership</h2>
                    <form action="process_signup.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="payment">Payment Method</label>
                            <select type="select" id="payment" name="payment" required>
                                <option value="" disabled selected>Select Payment Method</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="UPI">UPI</option>
                                <option value="GooglePay">GooglePay</option>
                            </select>
                        </div> -->
                        <!-- <div class=" form-group">
                            <label for="membership" class="form-label">Select Membership Plan</label>
                            <select class="form-select" id="membership" name="membership" required>
                                <option value="" disabled selected>Select Plan</option>
                                <?php foreach ($plans as $plan): ?>
                                    <option value="<?= $plan['plan_name']; ?>">
                                        <?= $plan['plan_name']; ?> - $<?= number_format($plan['price'], 2); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="membership">Membership Plan:</label>
                            <select type="select" id="membership" name="membership" required>
                                <option value="" disabled selected>Choose Plan</option>
                                <option value="basic">Basic - ₹2999/month</option>
                                <option value="premium">Premium - ₹4999/month</option>
                                <option value="Elite">Elite - ₹7999/month</option>
                            </select>
                        </div>
                        <div class=" form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="terms" required>
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#">terms and conditions</a>.
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit">Sign Up</button>
                        </div>
                    </form>
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