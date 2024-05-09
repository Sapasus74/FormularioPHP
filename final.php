<?php
session_start();

require_once("caducarSessio.php");


caducarSessio();
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Formulario</title>
		<link rel="icon" href="Fotos/logo.png">
		<link rel="stylesheet" href="final.css">
	</head>
	<body>
		<header>
			<img src="Fotos/logo.png" alt="Logo">
			<h1>HACKWEB</h1>
			<h2>Este es tu formulario  <?php echo $_SESSION['usuario_correcto']; ?></h2>
			<button class="cerrarSesion" onclick="location.href = 'acomiadament.php';">Cerrar sesión</button>
		</header>   
    <div class="info_formulario"> 
        <h1>Datos del Formulario</h1>

        <div class="datos_usuario">
        <h2>Datos del Usuario</h2>
        <p><strong>Correo electrónico:</strong> <?php echo $_SESSION["correo"]; ?></p>
        <p><strong>Fecha:</strong> <?php echo $_SESSION["fecha_seleccionada"]; ?></p>
        </div>   
        <div class="amezana">   
        <h2>Amenaza del Mundo Informático</h2>
        <p><strong>Amenaza seleccionada:</strong> <?php echo $_SESSION["amenaza_seleccionada"]; ?></p>
        </div> 
        <div class="asignaturas">
            <h2>Asignaturas Seleccionadas</h2>
            <p><strong>Asignaturas:</strong> 
            <?php 
            
            foreach ($_SESSION["asignaturas_seleccionadas"] as $asignatura) {
                echo $asignatura . ", ";
            }
            ?>
            </p>
        </div>
        <div class="curso">   
        <h2>Curso Seleccionado</h2>
        <p><strong>Curso:</strong> <?php echo $_SESSION["curso"]; ?></p>
     </div>
    </div>  
        
</body>
</html>
