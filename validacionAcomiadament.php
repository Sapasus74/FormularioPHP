<?php
session_start();
function cerrarSession() {
    session_unset();
    session_destroy();
    header("Location: inici.php");
}

cerrarSession();
?>
    