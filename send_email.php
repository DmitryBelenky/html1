<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
  }

  // Email content
  $to = "dmitry.bl85@gmail.com";
  $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message: $message\n";

  // Send email
  if (mail($to, $email_content, $headers)) {
    header("Location: thank_you.html");
    exit;
  } else {
    die("Failed to send email");
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>