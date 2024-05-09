<?php
session_start();
$_SESSION["usuario_correcto"] = "Eric";
$_SESSION["contraseña_correcta"] = "123";
 
if ($_POST["usuario"] == $_SESSION["usuario_correcto"] && $_POST["password"] == $_SESSION["contraseña_correcta"]) {
  $_SESSION["ultimoAcceso"] = time();
  header("Location: formulario.php");
    

} else {
  $_SESSION["error"] = true;
  header("Location: inici.php");

}
?>
