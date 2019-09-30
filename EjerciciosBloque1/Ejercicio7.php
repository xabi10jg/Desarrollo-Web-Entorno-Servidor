<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>

	<?php

	$numero=234;

		do{
			if($numero%2==0){
				$numero=$numero/2;
			}
			else{
				$numero=(($numero*3)+1);
			}
			echo $numero."-";




		}while($numero!=1)


	?>

</body>
</html>