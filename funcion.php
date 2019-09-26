<!DOCTYPE html>
<html>
<head>
	<title>Funcion</title>
</head>
<body>
	<?php
	$num=3;
	$num2=2;
	function sumar($a,$b){
		$resultado=($a+$b);
		echo($resultado);

	}
	function restar($a,$b){
		$resultado=($a-$b);
		echo($resultado);
	}
	function matematicas ($operacion,$a,$b){

		echo($operacion($a,$b));

	}
	matematicas(restar,$num,$num2);

?>
</body>
</html>