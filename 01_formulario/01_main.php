<?php
$palabras =["computadora","teclado","impresora","raton","programa"];

$form_open = "<form action='./01_response.php' method='post'>";
$btn = "<button type='submit'>Enviar</button>";
$form_close = "</form>";

for($i=0; $i<count($palabras); $i++){
    // operador de concatenacion ( .= ) usada a la variable $form_open 
    $form_open .= " La Palabra: ". str_shuffle($palabras[$i]).
    " "."<input type='text' autocomplete='off' name='$i'>".
    "<br><br>";
}
echo $form_open . $btn . $form_close;
?>