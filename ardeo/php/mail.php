<?php

$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$message = $_POST['textarea'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "ilya.nurligayanov@gmail.com";

mail($recipient, $phone, $message, $mailheader) or die("Error!");

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Täname, et esitasite meile oma avalduse. Võtame teiega esimesel võimalusel ühendust!</h1>
        <p class="back">Tagasi <a href="index.html">leheküljele</a>.</p>
        
    </div>
</body>
</html>
';
?>