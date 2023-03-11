<?php
$steps = 0;
$lista = ["auto","casa","negocio","vacaciones"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
</head>
<body>
    <ul>
        <!-- Ciclo for -->
        <?php for($i=0; $i<10; $i++):?>
            <?= "<li> $i </li>"; ?>
        <?php endfor ?>
    </ul>
    <ul>
        <!-- Ciclo while -->
        <?php while($steps < 10):?>
            <?= "<li>Hola</li>" ?>
            <?php $steps++; ?>
        <?php endwhile ?>
    </ul>
            
    <ul>
        <!-- Ciclo foreach -->
        <?php foreach($lista as $item):?>
            <?= "<li> $item </li>" ?>
        <?php endforeach ?>
    </ul>
</body>
</html>