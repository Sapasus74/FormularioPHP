<?php
session_start();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Formulario</title>
		<link rel="icon" href="Fotos/logo.png">
		<link rel="stylesheet" href="acomiadament.css">
	</head>
	<body>
		<header>
			<img src="Fotos/logo.png" alt="Logo">
			<h1>HACKWEB</h1>
			<h2>Hasta otra <?php echo $_SESSION['usuario_correcto']; ?></h2>
			<button class="cerrarSesion" onclick="location.href = 'validacionAcomiadament.php';">Volver al inicio</button>
		</header>   
</body>
</html>