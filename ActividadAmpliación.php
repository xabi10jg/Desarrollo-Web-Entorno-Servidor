<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea de Ampliación</title>
</head>
<body>


	<form action="" method="get">

		Dime una frase: <input type="text" name="frase">
						<input type="submit" name="aceptar" value="Vocales">
		
		<?php

			$nombre = $_GET['frase'];
			$contador=0;
			$longitud = strlen($nombre);

			for ($i=0; $i < $longitud; $i++){

				if(in_array($nombre[$i], ["a","e", "i", "o", "u"])){
					$contador++;
					echo "<br>".$nombre[$i];
				} 	
			}
			echo "<br>Hay ".$contador." vocales.";

		?>		


	</form>

</body>
</html>