<?php
session_start();
$_SESSION["usuario_correcto"] = "admin";
$_SESSION["contraseña_correcta"] = "123";

if ($_POST["usuario"] == $_SESSION["usuario_correcto"] && $_POST["password"] == $_SESSION["contraseña_correcta"]) {
  header("Location: formulario.php");
    

} else {
  $_SESSION["error"] = true;
  header("Location: index.php");

}
?>
