<?php
session_start();
if (!isset($_SESSION["error"])) {
    $_SESSION["error"] = false;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="Fotos/logo.png">
  <title>Login</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <header>
    <img src="Fotos/logo.png">
    <h1>HACKWEB</h1>
  </header>
  <div class="caja-login">
  <a href="https://github.com/Sapasus74"><img class="logo_github" src="Fotos/github-mark-white.png"></a>
    <h2>Iniciar sesión</h2>
    <?php
    if ($_SESSION["error"]) {
        echo "<p style='color: #00ff00;'>Usuario o contraseña incorrectos</p>";
        $_SESSION["error"] = false;
    }
    ?>
    <form action="validacion.php" method="POST">
      <input class="datos" type="text" name="usuario" placeholder="Nombre de usuario" required><br>
      <input class="datos" type="password" name="password" placeholder="Contraseña" required><br>
      <input type="submit" value="Iniciar sesión">
    </form>
  </div>
</body>
</html>
