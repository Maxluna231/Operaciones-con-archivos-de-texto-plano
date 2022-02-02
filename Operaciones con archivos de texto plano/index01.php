<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body background ="images.png">
<body>

<section class="hero is-danger">
  <div class="hero-body">
    <p class="title">
    <p style ="color: #000000;"> GUARDAR INFORMACION: </p> 
    <p class="subtitle">
    <div styale="background"-color: green">
					<p style ="color: #000000;"> PELICULAS :3 </p>
			
</div>
  </div>
</section>

          
  		</div>
	</section>

    <section class="section">
		
		<form action="guardar.php" method="post">
			<div>
            <p style ="color: #1BFB00;"> Titulo de la pelicula: </p>
				<input type="text" class="input" name="titulo" placeholder="Escribe el título de la pelicula"  >
			</div>

			<div>
            <p style ="color: #1CFF01;"> Descripción: </p>
				<textarea name="descripcion" class="input" placeholder="Agregue la descripción">
					
				</textarea>
			</div>

			<input type="submit" class="button is-link" value="Guardar informacion">
		</form>

	</section>
</body>
</html>