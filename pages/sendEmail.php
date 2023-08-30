<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$recipient = " ";


mail($recipient, $subject, $message, "From:" . $email) or die("Error!");