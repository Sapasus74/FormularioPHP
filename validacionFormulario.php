<?php
session_start();
// CHECKEO CORREO
$email = $_POST["correo"];
function verificarEmail($email) {
    $arroba = substr_count($email, '@');
    $punto = substr_count($email, '.');
    $ultimoPuntoPosicion = strrpos($email, '.');
    if ($arroba == 1 && $punto >= 1 && strpos($email, '@') < $ultimoPuntoPosicion && strpos($email, '..') == 0) {
        return true;
    } else {
        return false;
    }
}

if (verificarEmail($email)) { 
    $_SESSION["correo"] = $_POST["correo"];
    header("Location: final.php");
} 
else {
    $_SESSION["error"] = true;
    header("Location: formulario.php");
}

// FECHA

$_SESSION["fecha_seleccionada"] = $_POST["fecha"];

// RADIOS

$_SESSION["amenaza_seleccionada"] = $_POST["amenazas"];

// CHECKBOXES
$_SESSION["asignaturas_seleccionadas"] = array();

if(isset($_POST['asignatura_ciberseguridad'])) {
    $_SESSION["asignaturas_seleccionadas"][] = 'Ciberseguridad';
}

if(isset($_POST['asignatura_redes'])) {
    $_SESSION["asignaturas_seleccionadas"][] = 'Redes y Sistemas';
}

if(isset($_POST['asignatura_base_de_datos'])) {
    $_SESSION["asignaturas_seleccionadas"][] = 'Base de Datos';
}

if(isset($_POST['asignatura_lenguaje_de_programacion'])) {
    $_SESSION["asignaturas_seleccionadas"][] = 'Lenguaje de Programacion';
}

if(isset($_POST['asignatura_lenguaje_de_marcas'])) {
    $_SESSION["asignaturas_seleccionadas"][] = 'Lenguaje de Marcas';
}



// SELECT
$_SESSION["curso"] = $_POST["select"];


?>
