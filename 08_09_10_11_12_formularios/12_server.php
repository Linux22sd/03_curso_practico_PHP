<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$name = null;
$username = null;
$email = null;
$depto = null;

//Si usamos preg_mach(regex, texto a comparar, variable(array)resultante )
//---- name ----
if(preg_match('/^\w{2,14}[A-Z,a-z]$/', $_POST['nombre'], $name_s)){
    $name = $name_s[0];
}
else{
    $name = "debe de ser de 2 a 15 caracteres y solo contener letras";
}
//---- username -----
if(preg_match('/^\w{2,14}$/', $_POST['username'], $username_s)){
    $username = $username_s[0];
}
else{
    $username = "debe de ser de 2 a 15 caracteres contener letras o numeros o guion bajo";
}
//---- email -----
if(preg_match('/^\w{2,14}@\w[a-z,A-Z]{2,6}\.\w[a-z,A-Z]{1,2}$/', $_POST['email'], $email_s)){
    $email = $email_s[0];
}
else{
    $email = "debe de ser de 2 a 15 caracteres @ contener letras o numeros o guion bajo";
}
//---- depto ----
if(preg_match('/^\w{2,14}$/', $_POST['depto'], $depto_s)){
    $depto = $depto_s[0];
}
else{
    $depto = "debe de ser de 2 a 15 caracteres y solo contener letras";

}
//-------------------------------------------------------------------------------------------

// Usando htmlentities() ataques xss
// Si existe una inyeccion de codigo solo mostrara ese codigo 
//pero en texto y no lo ejecutara

$name_h = htmlentities($_POST['nombre']);
$username_h = htmlentities($_POST['username']);
$email_h = htmlentities($_POST['email']);
$depto_h = htmlentities($_POST['depto']);

//-------------------------------------------------------------------------------------------

// Usando filtervar()

//$name_f = filtervar($_POST['nombre'], FILTER_VALIDATE_EMAIL);;
//$username_f = filtervar($_POST['username'], FILTER_VALIDATE_EMAIL);;
$email_f = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
//$depto_f = filtervar($_POST['depto'], FILTER_VALIDATE_EMAIL);;
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
    <!-- preg_match() -->
    <h2>preg_match()</h2>
    <p>Nombre: <?= $name ?></p>
    <p>Username: <?= $username ?></p>
    <p>Email: <?= $email ?></p>
    <p>Departamento: <?= $depto ?></p>
    <br>

    <!-- htmlentities() -->
    <h2>htmlentities()</h2>
    <p>Nombre: <?= $name_h ?></p>
    <p>Username: <?= $username_h ?></p>
    <p>Email: <?= $email_h ?></p>
    <p>Departamento: <?= $depto_h ?></p>

    <p>Email: <?= $email_f ?></p>



</body>
</html>