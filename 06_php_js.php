<?php
$usuarios = [
    "J001" => [
        "id" => 001,
        "username" => "Juan"
    ],
    "J002" => [
        "id" => 002,
        "username" => "Pedro"
    ],
    "J003" => [
        "id" => 003,
        "username" => "Luis"
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JS</title>
</head>
<body>

    <!-- Usando json_encode convertimos el array php a string -->
    <!-- y dandoselo de parametro a JSON.parse() de javaScript lo convertira a un objeto json -->
    <script>
        let users = JSON.parse('<?= json_encode($usuarios)?>' );
        console.log(users);
    </script>
</body>
</html>