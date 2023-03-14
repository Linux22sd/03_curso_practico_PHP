<?php
/**
 * isset()
 * empty()
 * 
 */

if( isset($_POST['nombre'])){
    if(empty($_POST['nombre'])){
        echo "El valor esta vacio<br>";
    }
    else{
        echo "El valor ingresado es {$_POST['nombre']}<br>";
    }
}
else{
    echo "Variable no definida<br>";
}

if(isset($_POST['enviado'])){
    echo "El formulario fue enviado<br>";
}
else{
    echo "El formulario no fue enviado<br>";
}
?>