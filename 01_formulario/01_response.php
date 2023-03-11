<?php
$palabras =["computadora","teclado","impresora","raton","programa"];
for($i=0; $i < count($palabras); $i++){
    if ($palabras[$i] == $_POST[$i]){
        echo "La Palabra es correcta: $_POST[$i]<br><br>";
    }
    else{
        echo " La Palabra es incorrecta: $_POST[$i]<br>";
        echo " La Palabra correcta era: $palabras[$i]<br><br>";
    }
}

?>