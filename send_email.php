<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  $to = "sheikhusama569@gmail.com";

  $subject = "New Contact Form Submission";

  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n\n";
  $email_content .= "Message:\n$message\n";

  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  if(mail($to, $subject, $email_content, $headers)) {
    header("Location: thank-you.html");
    exit;
  } else {
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
include('contact.html');
?>
