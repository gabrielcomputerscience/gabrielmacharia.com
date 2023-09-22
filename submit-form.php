<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["msg"];

  // Create the email content
  $to = "cmwenda20@gmail.com"; // Replace with your email address
  $email_subject = "New Contact Form Submission: " . $subject;
  $email_body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  // Send the email
  if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Failed to send email.";
  }
} else {
  echo "Invalid request.";
}
?>
