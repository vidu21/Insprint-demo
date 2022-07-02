<?php
  if(isset( $_POST['name']))
  $name = $_POST['name'];
  if(isset( $_POST['email']))
  $email = $_POST['email'];
  if(isset( $_POST['message']))
  $message = $_POST['message'];
  if(isset( $_POST['contact']))
  $contact = $_POST['contact'];
  $subject="New Contact Submission"
  $content="From: $name \n Email: $email \n Contact Number: $contact \n Message: $message";
  $recipient = "vidu.s1999@gmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Error!");
if (!mail($to_email, $subject, $message, $headers)) { 
    print_r(error_get_last());
  }
  header('Location: thanks.html');
  exit;
?>
