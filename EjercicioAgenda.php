<!doctype html>
<html>
	<head>
		<title>
			Ejercicio Agenda
		</title>
	</head>
	<body>
		<?php
			//Funciones extra que he utilizado para gestionar la agenda

			function stringtoarray ($string_agenda,&$array_agenda) {
				//Convierte la agenda de datos (string) en un array asociativo
				$a=explode (";",$string_agenda);
				for($i=0; $i<count($a); $i++) {
					$array_agenda[$a[$i]]=$a[$i+1];
					$i++;
				}
				return true;
			}

			function arraytostring ($array_agenda) {
				//Convierte el array asociativo en una cadena de caracteres cada elemento separado por ;
				foreach($array_agenda as $key_nombre => $value)
				{
				  $string_agenda.=$key_nombre.";".$value.";";
				}
				//Quitamos el ultimo ';''
				$string_agenda=substr($string_agenda, 0, -1);
				return $string_agenda;
			}

		?>
		<?php
		//Creamos un array para almacenar los datos de la agenda
		$array_agenda=array();

		if (isset ($_POST['submit'])) {
			//Rellenamos el array con los datos recibidos en el campo oculto 'agenda' del formulario
			stringtoarray ($_POST['agenda'],$array_agenda);

			if(empty($_POST['nombre'])){
				echo "El campo nombre es obligatorio.";
			}
			else{
				if(array_key_exists(strtolower($_POST['nombre']), $array_agenda)){
					echo "El nombre ".$_POST['nombre']." existe en el array";
				}
				else{
					$array_agenda[strtolower($_POST['nombre'])]=$_POST['email'];
				}

			}

	
		}
		?>

		<form action="" method="post">
			<!-- Campo oculto para ir almacenando los elementos de la agenda-->
			<input name="agenda" type="" value="<?php echo  arraytostring ($array_agenda) ?>"/><br>
			Nombre:<br>
			<input type="text" name="nombre" value="<?php echo($_POST['nombre'])?>"><br><br>
			Email:<br>
			<input type="email" name="email" value="<?php echo($_POST['email'])?>"><br><br>
			<button type="submit" name="submit" >Añadir contacto</button>
		</form>

		<h2>AGENDA</h2>
		<table>
		  <tr>
		    <th>Nombre</th>
		    <th>Email</th>
		  </tr>

		  	<?php
		  		
		  	

		  	foreach ($array_agenda as $nombre => $email) {

		  		echo "<tr><td>$nombre</td>";
		  		echo "<td>$email</td></tr>";	  

		  		}


		  		
			?>
		
		</table>

	</body>
</html>