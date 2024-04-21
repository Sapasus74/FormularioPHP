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
      <link rel="stylesheet" href="formulario.css">
   </head>
   <body>
      <header>
         <img src="Fotos/logo.png" alt="Logo">
         <h1>HACKWEB</h1>
         <h2>Bienvenido, <?php echo $_SESSION['usuario_correcto']; ?></h2>
         <button class="cerrarSesion" onclick="location.href = 'inici.php';">Cerrar sesión</button>
      </header>
      <div class="formulario">
         <form action="" method="POST">
        <div class="informacion_rellenar">
               <p>Correo electrónico:</p><input type="text" name="correo" required>
         </div>
         <div class="informacion_rellenar">
               <p>Fecha:</p><input type="date" name="fecha" required>
        </div>
            <div class="opciones">
               <p>Elige una menazas del mundo informatico: </p>
               <div class="option">
                  <input type="radio" id="opcion1" name="opcion">
                  <label for="opcion1">Malware</label>
               </div>
               <div class="option">
                  <input type="radio" id="opcion2" name="opcion">
                  <label for="opcion2">DoS y DDOS</label>
               </div>
               <div class="option">
                  <input type="radio" id="opcion3" name="opcion">
                  <label for="opcion3">Phishing</label>
               </div>
               <div class="option">
                  <input type="radio" id="opcion4" name="opcion">
                  <label for="opcion4">Keylogger</label>
               </div>
               <div class="option">
                  <input type="radio" id="opcion5" name="opcion">
                  <label for="opcion5">Smishing</label>
               </div>
               <p>Elige que asignaturas quieres estudiar: </p>
               <div class="option">
                  <input type="checkbox" id="opcion6" name="opcion">
                  <label for="opcion6">Ciberseguridad</label>
               </div>
               <div class="option">
                  <input type="checkbox" id="opcion7" name="opcion">
                  <label for="opcion7">Redes y Sistemas</label>
               </div>
               <div class="option">
                  <input type="checkbox" id="opcion8" name="opcion">
                  <label for="opcion8">Bsase de Datos</label>
               </div>
               <div class="option">
                  <input type="checkbox" id="opcion9" name="opcion">
                  <label for="opcion9">Lenguague de programacion</label>
               </div>
               <div class="option">
                  <input type="checkbox" id="opcion10" name="opcion">
                  <label for="opcion10">Lenguague de marcas</label>
               </div>
            </div>
            <div class="select-container">
               <p>Seleccione curso:</p><select class="prueba5" name="select">
                  <option value="opcion 1">ASIX</option>
                  <option value="opcion 2">DAM</option>
                  <option value="opcion 3">DAW</option>
               </select>
            </div>
            <input class="enviar" type="submit" value="Enviar">
         </form>
      </div>
   </body>
</html>