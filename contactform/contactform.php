<?php
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['message'];

    $to = $email;
    $subject = $asunto ;
    $message = $mensaje;
    $headers = "From: enriquehuamanisi@gmail.com" . "\r\n" . "CC: enriquehuamanisi@gmail.com";
    
    mail($to, $subject, $message, $headers);
?>