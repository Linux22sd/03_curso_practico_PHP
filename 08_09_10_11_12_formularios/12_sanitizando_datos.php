<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando datos</title>
</head>
<body>
    <form action="./12_server.php" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="username">Username</label>
    <input type="text" name="username" id="username">

    <label for="email">Email</label>
    <input type="text" name="email" id="email">

    <label for="depto">Departamento</label>
    <input type="text" name="depto" id="depto">

    <button type="submit">Enviar</button>
    </form>
</body>
</html>