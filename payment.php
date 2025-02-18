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


<style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Form Container */
    .form-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .form-container p {
        text-align: center;
        margin-bottom: 20px;
        font-size: 16px;
        color: #555;
    }

    .form-container p strong {
        color: #28a745;
    }

    /* Form Group Styling */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    .form-group input[type="text"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        background-color: #f9f9f9;
        color: #333;
    }

    .form-group input[type="text"]:focus {
        border-color: #28a745;
        outline: none;
        background-color: #fff;
    }

    /* Button Styling */
    .form-group button {
        width: 100%;
        padding: 12px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-group button:hover {
        background-color: #218838;
    }

    /* Responsive Design */
    @media (max-width: 480px) {
        .form-container {
            padding: 20px;
        }

        .form-container h2 {
            font-size: 20px;
        }

        .form-container p {
            font-size: 14px;
        }

        .form-group input[type="text"] {
            font-size: 14px;
            padding: 10px;
        }

        .form-group button {
            font-size: 14px;
            padding: 10px;
        }
    }
</style>

<body>
    <div class="form-container">
        <h2>Payment</h2>
        <p>You are signing up for the <strong><?php echo ucfirst($plan); ?></strong> plan.</p>
        <p>Total Amount: ₹<?php echo $amount; ?></p>
        <form action="home.php" method="POST">
            <div class="form-group">
                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" required>
            </div>
            <div class="form-group">
                <label for="expiry">Expiry Date:</label>
                <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="plan" value="<?php echo $plan; ?>">
            <input type="hidden" name="amount" value="<?php echo $amount; ?>">
            <div class="form-group">
                <button type="submit" class="btn btn-primary" data-bs-toggle="Modal" data-bs-target="#staticBackdrop">
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
</body>

</html>