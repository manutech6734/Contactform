<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "manojkhinchi6734@gmail.com";

mail($recipient, $subject, $message, $mailheader);

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Thank you for contacting me. I wil get back to you
    as soon as possible!</h1>
    <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
    
    </div>
</body>
</html>



';



?>