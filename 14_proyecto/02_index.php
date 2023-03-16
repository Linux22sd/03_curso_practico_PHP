<?php
require("02_main.php");


$status = "";
$message = "";

function validate_filled($nombre, $email, $asunto, $mensaje, $form){
   return !empty($nombre) && !empty($email) && !empty($asunto) && !empty($mensaje);
}

if(isset($_POST['form'])){
    $status = "active";

    if( validate_filled(...$_POST) ){ 
        //validacion con regex
        $nombre_regex = preg_match('/^(\w{1,20}[\.,\s]+)+(\w{1,20}[\s\.,]?)?$/', $_POST['nombre'], $nombre);
        $email_regex = preg_match('/^\w{2,14}@\w[a-z,A-Z]{2,6}\.\w[a-z,A-Z]{1,2}$/', $_POST['email'], $email);
        $asunto_regex = preg_match('/^(\w{1,20}[\s\.,\$]+)+(\w{1,20}[\s\.,\$]?)?$/', $_POST['asunto'], $asunto);
        $mensaje_regex = preg_match('/^(\w{1,20}[\s\.,\$:;]+)+(\w{1,20}[\s\.,\$:;]?)?$/', $_POST['mensaje'], $mensaje);

        if($nombre_regex && $email_regex && $asunto_regex && $mensaje_regex){

            $body = "$nombre[0] {$email[0]} te envia el siguiente mensaje: <br><br> $mensaje[0]";

            send_mail($asunto[0], $body, $email[0], $nombre[0], true);
            $message = "Form sent successfull";
        }
        else{
            $message = "Some information is in wrong format";
        }
    }
    else {
        $message = "Fill up all information required ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Formulario de contacto</title>

</head>
<body>
    <section class="container">

        <?php if($status == "active"): ?>
            <div class="alert success">
                <span><?= $message ?></span>
            </div>
        <?php endif ?>

        <form class="form_container" action="./02_index.php" method="POST">
            <h1>Contactanos!</h1>
    
            <div class="input_group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="input_group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="input_group">
                <label for="asunto">Asunto:</label>
                <input type="text" name="asunto" id="asunto">
            </div>
            <div class="input_group">
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" ></textarea>
            </div>
            <div class="button_container">
                <button type="submit" name="form">Enviar</button>
            </div>
        </form>

        <div class="contact_info">
            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <span>136 N 25 Street</span>
            </div>
            <div class="info">
                <i class="fas fa-phone"></i>
                <span>+1 54 765 7865</span>
        </div>

    </section>

    <script src="https://kit.fontawesome.com/37b2cc9d63.js" crossorigin="anonymous"></script>

</body>
</html>