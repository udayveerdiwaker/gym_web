<?php
include 'connection.php';

// Get form data

// // Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $membership = $_POST['membership'];
    
    // Insert into database
    $sql = "INSERT INTO members (`name`, `email`, `password`, `membership_plan`) VALUES ('$name', '$email', '$password', '$membership')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful! Redirecting to payment...";
        // Redirect to payment page
        header("Location: payment.php?email=$email&plan=$membership");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
