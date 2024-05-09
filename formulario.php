<?php
   session_start();
   if (!isset($_SESSION["error"])) {
       $_SESSION["error"] = false;
   }
   
   
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
      <link rel="stylesheet" href="formulario.css">
   </head>
   <body>
      <header>
         <img src="Fotos/logo.png" alt="Logo">
         <h1>HACKWEB</h1>
         <h2>Bienvenido, <?php echo $_SESSION['usuario_correcto']; ?></h2>
         <button class="cerrarSesion" onclick="location.href = 'validacionAcomiadament.php';">Volver al inicio</button>
		</header>   
      </header>
      <div class="formulario">
      <?php
         if ($_SESSION["error"]) {
            echo "<p style='color: #00ff00;'>El correo electrónico no es válido</p>";
            $_SESSION["error"] = false;
         } 
         ?>
      <form action="validacionFormulario.php" method="POST">
         <div class="informacion_rellenar">
            <p>Correo electrónico:</p>
            <input type="text" name="correo" required>
         </div>
         <div class="informacion_rellenar">
            <p>Fecha:</p>
            <input type="date" name="fecha" value="<?php echo isset($_SESSION['fecha_seleccionada']) ? $_SESSION['fecha_seleccionada'] : ''; ?>" required>
         </div>
         <div class="opciones">
            <p>Elige una amenaza del mundo informático:</p>
            <div class="option">
               <input type="radio" id="opcion1" name="amenazas" value="Malware"<?php if (isset($_SESSION['amenaza_seleccionada']) && $_SESSION['amenaza_seleccionada'] == 'Malware') echo 'checked'?>>
               <label for="opcion1">Malware</label>
            </div>
            <div class="option">
               <input type="radio" id="opcion2" name="amenazas" value="DoS y DDOS" <?php if (isset($_SESSION['amenaza_seleccionada']) && $_SESSION['amenaza_seleccionada'] == 'DoS y DDOS') echo 'checked'?>>
               <label for="opcion2">DoS y DDOS</label>
            </div>
            <div class="option">
               <input type="radio" id="opcion3" name="amenazas" value="Phishing" <?php if (isset($_SESSION['amenaza_seleccionada']) && $_SESSION['amenaza_seleccionada'] == 'Phishing') echo 'checked'?>>
               <label for="opcion3">Phishing</label>
            </div>
            <div class="option">
               <input type="radio" id="opcion4" name="amenazas" value="Keylogger" <?php if (isset($_SESSION['amenaza_seleccionada']) && $_SESSION['amenaza_seleccionada'] == 'Keylogger') echo 'checked'?>>
               <label for="opcion4">Keylogger</label>
            </div>
            <div class="option">
               <input type="radio" id="opcion5" name="amenazas" value="Smishing" <?php if (isset($_SESSION['amenaza_seleccionada']) && $_SESSION['amenaza_seleccionada'] == 'Smishing') echo 'checked'?>>
               <label for="opcion5">Smishing</label>
            </div>
            <p>Elige qué asignaturas quieres estudiar:</p>
            <div class="option">
               <input type="checkbox" id="opcion6" name="asignatura_ciberseguridad" value="ciberseguridad" <?php if (isset($_SESSION['asignaturas_seleccionadas']) && in_array('Ciberseguridad', $_SESSION['asignaturas_seleccionadas'])) echo 'checked'?>>
               <label for="opcion6">Ciberseguridad</label>
            </div>
            <div class="option">
               <input type="checkbox" id="opcion7" name="asignatura_redes" value="redes" <?php if (isset($_SESSION['asignaturas_seleccionadas']) && in_array('Redes y Sistemas', $_SESSION['asignaturas_seleccionadas'])) echo 'checked'?>>
               <label for="opcion7">Redes y Sistemas</label>
            </div>
            <div class="option">
               <input type="checkbox" id="opcion8" name="asignatura_base_de_datos" value="base de datos" <?php if (isset($_SESSION['asignaturas_seleccionadas']) && in_array('Base de Datos', $_SESSION['asignaturas_seleccionadas'])) echo 'checked'?>>
               <label for="opcion8">Base de Datos</label>
            </div>
            <div class="option">
               <input type="checkbox" id="opcion9" name="asignatura_lenguaje_de_programacion" value="lenguaje_de_programacion" <?php if (isset($_SESSION['asignaturas_seleccionadas']) && in_array('Lenguaje de Programacion', $_SESSION['asignaturas_seleccionadas'])) echo 'checked'?>>
               <label for="opcion9">Lenguaje de Programación</label>
            </div>
            <div class="option">
               <input type="checkbox" id="opcion10" name="asignatura_lenguaje_de_marcas" value="lenguaje_de_marcas"  <?php if (isset($_SESSION['asignaturas_seleccionadas']) && in_array('Lenguaje de Marcas', $_SESSION['asignaturas_seleccionadas'])) echo 'checked'?>>
               <label for="opcion10">Lenguaje de Marcas</label>
            </div>
            <div class="select-container">
               <p>Seleccione curso:</p>
               <select name="select">
                  <option value="Asix"<?php if (isset($_SESSION['curso']) && $_SESSION['curso'] == 'Asix') echo 'selected'?>>ASIX</option>
                  <option value="Dam" <?php if (isset($_SESSION['curso']) && $_SESSION['curso'] == 'Dam') echo 'selected'?>>DAM</option>
                  <option value="Daw" <?php if (isset($_SESSION['curso']) && $_SESSION['curso'] == 'Daw') echo 'selected'?>>DAW</option>
               </select>
            </div>
            <input class="enviar" type="submit" value="Enviar">
      </form>
      </div>
   </body>
</html>
<!-- https://es.stackoverflow.com/questions/523406/c%C3%B3mo-almacenar-los-datos-de-un-formulario-en-una-sesi%C3%B3n -->