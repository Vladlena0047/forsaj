<?php

$mail = $_POST['mail'];
$name = $_POST['name'];
$text = $_POST['text'];

$to  = "<diplom.vladlena@gmail.com>";

$subject = "From forsage.com - form messge";

$message = "Message from $name from email $mail. Message: $text";



mail($to, $subject, $message);
header("Location: index.html");
