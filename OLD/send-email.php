<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'cm5099@yahoo.com';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\n\n$message";

  $headers = "From: $email";
  $result = mail($to, $subject, $body, $headers);

  if ($result) {
    echo 'Email sent successfully.';
  } else {
    echo 'There was an error sending the email.';
  }
}
?>
