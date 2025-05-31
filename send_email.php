<?php

$name = $_POST["name"];
$email = $_POST["email"];
$type = $_POST["type"];
$details = $_POST["details"];

$recipient = "loz@pedalandpiston.com";

$subject = "New Form Submission: " .$name." - ".$type." ";

$body = "Name: ".$name."\nEmail: ".$email."\nType: ".$type."\n\nMessage: \n".$details."\n";

$headers = "From: \"Website Form: $name\" <sh-1051892668@eu.hosting-webspace.io>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

mail($recipient, $subject, $body, $headers)
or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pedal and Piston</title>
    <link rel="icon" type="image/x-icon" href="imgs/Pedal_&_Piston_Logo_Round_Background_100px.ico">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
</head>
<header>
    <a class="img_link" href="index.html"><img id="logo" src="imgs/Pedal_&_Piston_Logo_Square_Background.png" alt="Pedal and Piston logo"></a>
    <ul id="navbar">
        <li><a class="nav_button" href="index.html">Home</a></li>
        <li><a class="nav_button" href="#bicycles">Bicycles</a></li>
        <li><a class="nav_button" href="#motorcycles">Motorcyles</a></li>
        <li><a class="nav_button" href="#contact_page">Contact</a></li>
    </ul>
</header>
<body>
    <div id="contact_confirmation_page">
    <h1 class="contact_confirmation_text">Thanks for contacting Pedal and Piston, we will get back to you as soon as possible</h1>
    <h2 class="contact_confirmation_text">To return to the homepage <a href ="index.html" class="contact_confirmation_text">click here</a></h2>
    </div>
</body>
</html>
';

?>
