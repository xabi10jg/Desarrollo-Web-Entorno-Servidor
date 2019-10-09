<!DOCTYPE html>
<html>
<head>
	<title>Mostrar datos</title>
</head>
<body>
	<?php


	echo "Tu nombre es: ".$_POST["nombre"]."<br>";
	echo "Tus apellidos son: ".$_POST["apellidos"]."<br>";
	echo "Tu e-mail es: ".$_POST["email"]."<br>";
	echo "La fecha de tu cumpleaños es: ".$_POST["bdaytime"]."<br>";
	echo "Tu contraseña es: ".$_POST["contras"]."<br>";
	echo "La imagen seleccionada es: <img src='".$_POST["myFile"]."'><br>"; 
	echo "El ciclo seleccionado es: ".$_POST["ciclo"]."<br>";
	echo "Los lenguajes en los siguientes lenguajes de progamación: <br>";
	echo "Phyton --> ".$_POST['phyton']."<br>";
	echo "Java --> ".$_POST['java']."<br>";
	echo "PHP --> ".$_POST['php']."<br>";
	echo "JavaScript --> ".$_POST['js']."<br>";
	echo "Ruby --> ".$_POST['ruby']."<br>";
	echo "C# --> ".$_POST['c']."<br>";
	echo "El dia de la semana que prefieres recibirlo es: ".$_POST["dia"]."<br>";
	echo "Tu color favorito es: <div style='display: inline-block; padding:12px;width:20px;background-color:".$_POST["color"].";line-height:1.4;'>
</div><br>";
echo "Tu comentario es: ".$_POST["comentario"]."<br>";



	 ?>

</body>
</html>