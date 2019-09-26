<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio4</title>
</head>
<body>
	<?php

$frase = "Mi nombre es Xabi";

$separar = explode(" ", strtolower($frase)); //explode divide el string en varias strings y strtolower lo pasa todo a minuúscula.

foreach($separar as $palabra)
{
    trim($palabra);// trim elimina los espacios en blanco.
    $nuevo .= $palabra; 
}

if($nuevo == strrev($nuevo)) //strrev le da la vuelta al string.
{
    echo "La frase/palabra '".$frase."' es palíndromo";
}
else {
    echo "La frase/palabra '".$frase."' no es palíndromo";
}

?>

</body>
</html>