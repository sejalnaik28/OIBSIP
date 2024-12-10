<?php
$to = "nsejal1828.com"; // Replace with your actual email address
$subject = "Contact Form Submission";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["comment"];

$body = "Name: $name\nEmail: $email\nMessage: $message";

mail($to, $subject, $body);
