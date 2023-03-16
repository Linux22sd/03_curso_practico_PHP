<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require("./vendor/autoload.php");

function send_mail($asunto, $body, $email, $nombre, $html = false){
    // configuracion inicial del servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();

    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;

    $phpmailer->Username = 'alexloudog34@gmail.com';
    $phpmailer->Password = 'bsyttkfnttksmclu';

    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $phpmailer->Port = 465;

    // destinatarios
    $phpmailer->setFrom($email, $nombre);
    $phpmailer->addAddress('contact@miempresa.com', 'Mi empresa');  

    // definiendo contenido de email
    $phpmailer->isHTML($html);                                  
    $phpmailer->Subject = $asunto;
    $phpmailer->Body    = $body;

    // mandar el correo
    $phpmailer->send();
}
?>