<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <!-- Esto no es aceptable -->
    <?php if(true){ 
        echo "<p>if condicional 1</p>";
    }else{
        echo "<p> else condicional 1</p>";
    }
    ?>

    <!-- Esto es aceptable -->
    <?php if(true){ ?>
        <?php echo "<p>if condicional 2</p>"; ?>
    <?php }else{ ?>
        <?php echo "<p> else condicional 2</p>"; ?>
    <?php } ?>

    <!-- Esto es lo correcto -->
    <?php if(true): ?>
        <?php echo "<p>if condicional 3</p>"; ?>
    <?php else: ?>
        <?php echo "<p> else condicional 3</p>"; ?>
    <?php endif; ?>
</body>
</html>