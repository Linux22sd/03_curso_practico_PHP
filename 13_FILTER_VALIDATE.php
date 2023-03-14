<?php
//validar si es float
$float = filter_var("string",   FILTER_VALIDATE_FLOAT);
var_dump($float);
echo "<br>";

//validar si es entero
$int = filter_var("number",   FILTER_VALIDATE_INT);
var_dump($int);
echo "<br>";

//validar si es una ip address
$ip = filter_var("0.0.0",   FILTER_VALIDATE_IP);
var_dump($ip);
echo "<br>";

//validar si es una url 
$url= filter_var("https://platzi.com",   FILTER_VALIDATE_URL);
var_dump($url);
echo "<br>";

//validar si es email
$email= filter_var("luis12_\@aol.com",   FILTER_VALIDATE_EMAIL);
var_dump($email);
echo "<br>";

?>