<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  error_log("Form submitted");
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

  // Redirect to the index.html page
  header("Location: index.html");
  exit;
}
?>
