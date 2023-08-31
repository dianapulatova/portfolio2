<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $message = $_POST["text"];

  $to = "dianapulatovaa@email.com"; // Replace with your email address
  $subject = "New Contact Form Submission";
  $headers = "From: $email";

  $message_body = "Name: $first_name $last_name\n";
  $message_body .= "Email: $email\n";
  $message_body .= "Message:\n$message";

  mail($to, $subject, $message_body, $headers);

  // You can also redirect to a thank you page or display a success message
  header("Location: index.html");
  exit;
}
?>

