<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud al servidor</title>
</head>
<body>
    <!-- Aqui podemos mandar por GET O POST -->
    <form action="./08_server.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" autocomplete="off">
        
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" autocomplete="off">

        <button type="submit" >Enviar</button>
    </form>
    
</body>
</html>