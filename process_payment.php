<?php
include 'connection.php';

// Simulate payment processing
$email = $_POST['email'];
$amount = $_POST['amount'];

// Here you would integrate with a payment gateway like Stripe or PayPal
// For now, we'll just simulate a successful payment
echo "Payment of $$amount successful for $email. Thank you for joining!";
// ?>
// <?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = htmlspecialchars($_POST["email"]);
//     $amount = htmlspecialchars($_POST["amount"]);

//     if (htmlspecialchars($email)) {
//         echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
//                 Payment of $$amount successful for $email. Thank you for joining!
//                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//             </div>";
//     }
// }

// ?>
