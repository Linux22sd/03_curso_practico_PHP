<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./10_server.php" method="post" enctype="multipart/form-data">
        
        <!-- Simple -->
        <label for="curso">Curso</label>
        <input type="text" name="curso" id="curso" autocomplete="off">
        <br><br>

        <!-- Array -->
        <label for="frutas">Frutas</label>
        <input type="text" name="frutas[]" autocomplete="off">
        <input type="text" name="frutas[]" autocomplete="off">
        <input type="text" name="frutas[]" autocomplete="off">
        <br><br>

        <!-- Array asociativos-->
        <label for="info">Nombre</label>
        <input type="text" name="info['nombre']" autocomplete="off">
        <label for="info">Email</label>
        <input type="text" name="info['email']" autocomplete="off">
        <label for="info">Departamento</label>
        <input type="text" name="info['departamento']" autocomplete="off">
        <br><br>

        <!-- Checkbox -->
        <label for="checkbox">Opciones</label>
        <input type="checkbox" name="list1" >
        <input type="checkbox" name="list2" value="seleccionado">
        <input type="checkbox" name="list3" >
        <br><br>

        <!-- Radio -->
        <label for="mexico">Mexico</label>
        <input type="radio" name="pais" value="Mexico" id="mexico">
        <label for="colombia">Colombia</label>
        <input type="radio" name="pais" value="Colombia" id="colombia">
        <label for="peru">Peru</label>
        <input type="radio" name="pais" value="Peru" id="peru">
        <br><br>

        <!-- Multiples archivos -->
        <label for="galeria">Cargar imagenes</label>
        <input type="file" multiple name="galeria[]" id="galeria">
        <br><br>

        <button type="submit" >Enviar</button>
    </form>
    
</body>
</html>