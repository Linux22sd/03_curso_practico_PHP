<!-- Codigo PHP -->
<?php
$results = [];
for($i=1; $i<=12; $i++){
    $operation = 9 * $i;
    $result= "9 x $i = $operation";
    array_push($results, $result);
}
?>
<!-- Codigo HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo espagueti</title>
</head>
<body>
    
    <!-- refactorizar este codigo spagueti -->
    <!-- ------------------------------------------ -->
    <h2>Tabla del 9 codigo sin refactorizar</h2>
    <ul>
        <?php
        for($i=0; $i<12; $i++){
            echo "<li>" . "9 x " . $i + 1 ." = " . (9* ($i + 1)) . "</li>";
        }
        ?>
    </ul>
    <!-- ------------------------------------------ -->

    <!-- Codigo refactorizado -->
    <h2>Tabla del 9 codigo refactorizado</h2>
        <ul>
            <?php foreach($results as $num): ?>
                 <li> <?= $num ?></li> 
            <?php endforeach ?>
        </ul>

</body>
</html>