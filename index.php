<?php
/*Permitir pegar en un textbox texto varios
separado entre saltos de lineas, comas o guiones.

Maximo 1000 caracteres en un principio.

Seleccionar tipo de separación y seleccionar 1,2,3,4 o 5 de forma aleatoria.

No necesita DB. Usar js y php, boton para elegir con cual hacer la elección o hacer 2 archivos.

Poner seguridad, evitar caracteres raros.*/
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Elección aleatoria</title>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<div class="container">
			<header class="d-flex justify-content-center py-3">
				<ul class="nav nav-pills">
					<li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Usar PHP</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Usar JS</a></li>
				</ul>
			</header>
		</div>
		<div class="container text-center mt-2">
			<h1>Hola Mundo!</h1>
		</div>
	</body>
</html>