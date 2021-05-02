<?php

    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['message'];


    $to      = 'enriquehuamanisi@gmail.com';
    $subject =  $asunto;
    $message =  'Nombre y Apellido:'.$nombre. "\r\n" .
                'Email:'.$email. "\r\n" .
                'Asunto: '.$email. "\r\n" .
                'Asunto: '.$mensaje. "\r\n";

                
    $headers = 'From: enriquehuamanisi@gmail.com'       . "\r\n" .
                 'Reply-To: enriquehuamanisi@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>