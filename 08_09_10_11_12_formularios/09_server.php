<?php

$basename = $_FILES['image']['name'];
$image = $_FILES['image']['tmp_name'];
$ruta = "images/ $basename";

move_uploaded_file($image, $ruta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $ruta ?>" alt="Imagen" width="800">
</body>
</html>