<?php

	$Titulo = $_POST['titulo'];
	$Descripcion = $_POST['descripcion'];
	
	
    $contenido="
	Titulo: $Titulo 
    Descripcion: $Descripcion";

	$archivo = fopen("peliculas.txt", "w");
	fwrite($archivo,$contenido);
	// Instrucciones para guardar los datos en el archivo libros.txt
     
?>

<?php

				$lecturaArchivo = fopen("peliculas.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);

			?>
</heady>
<body> 
	<div align="center">
	<h2>Datos enviados </h2>
	<h5><a href="index01.php">Volver atras nuevamente</a></h5>
</div>
</body>
</html>