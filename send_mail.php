<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$to = "leon010983@yahoo.co.uk";//to be changed
$subject = "New Comment from" . $name;
$message = $message . "FROM" . $email;
$headers = "From: $email \r\n";

mail($to, $subject, $message, $headers);

header("location: index.php?e=y");
?>


