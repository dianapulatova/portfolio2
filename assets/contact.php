<?php

// Get the form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Send an email
mail('dianapulatovaa@gmail.com', 'New Contact Form Submission',
    'First Name: ' . $first_name . "\n" .
    'Last Name: ' . $last_name . "\n" .
    'Email: ' . $email . "\n" .
    'Message: ' . $message);

// Redirect to the thank you page
header('Location: thank-you.php');

?>
