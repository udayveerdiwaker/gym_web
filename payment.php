<?php
include 'header.php';
include 'connection.php';

// Get user details from URL
$email = $_GET['email'];
$plan = $_GET['plan'];

// Calculate payment amount based on plan
if ($plan == 'basic') {
    $amount = 2999; // Basic plan
} elseif ($plan == 'premium') {
    $amount = 4999; // Premium plan
} elseif ($plan == 'Elite') {
    $amount = 7999; // Pro plan
} else {
    // Default amount if plan is not recognized
    $amount = 0;
}
?>



    <div class="payment">
        <div class="form-container Form">
            <h2 class="fw-bold">Payment</h2>
            <p>You are signing up for the <strong><?php echo ucfirst($plan); ?></strong> plan.</p>
            <p>Total Amount: ₹<?php echo $amount; ?></p>
            <form action="home.php" method="POST">
                <div class="form_group form-group">
                    <label for="card_number">Card Number:</label>
                    <input type="text" id="card_number" name="card_number" required>
                </div>
                <div class="form_group form-group">
                    <label for="expiry">Expiry Date:</label>
                    <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
                </div>
                <div class="form_group form-group">
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" required>
                </div>
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="plan" value="<?php echo $plan; ?>">
                <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                <div class="form-group form_group">
                    <button type="submit" class="btn btn-primary">
                        Pay Now
                    </button>

                    <!-- <button type="submit">Pay Now</button> -->
                </div>
            </form>

        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = htmlspecialchars($_POST["email"]);
            $amount = htmlspecialchars($_POST["amount"]);

            if (htmlspecialchars($email)) {
                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    Payment of $$amount successful for $email. Thank you for joining!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
        }
        ?>
