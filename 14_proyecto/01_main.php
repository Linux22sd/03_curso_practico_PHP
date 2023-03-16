<?php
use PHPMailer\PHPMailer\PHPMailer;

require("./vendor/autoload.php");

function send_mail($asunto, $body, $email, $nombre, $html = false){
    // configuracion inicial del servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '72068a716c6074';
    $phpmailer->Password = 'e5838862833414';

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