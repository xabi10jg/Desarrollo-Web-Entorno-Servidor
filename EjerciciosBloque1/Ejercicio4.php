<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio4</title>
</head>
<body>
	<?php

$frase = "Mi nombre es Xabi";

$separar = explode(" ", strtolower($frase));

foreach($separar as $palabra)
{
    trim($palabra);
    $nuevo .= $palabra; 
}

if($nuevo == strrev($nuevo))
{
    echo "La frase/palabra '".$frase."' es palíndromo";
}
else {
    echo "La frase/palabra '".$frase."' no es palíndromo";
}

?>

</body>
</html>