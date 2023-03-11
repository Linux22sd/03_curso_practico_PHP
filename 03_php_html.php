<?php
$mensaje = "Este mensaje esta escrito en php";
$alternativa = "Alternativa para imprimir";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Como preprocesador de HTML</title>
</head>
<body>
    <h1>Esto es html desde php</h1>
    <?php echo "<h2>$mensaje</h2><br>"; ?>
    <?= $alternativa ?>
</body>
</html>