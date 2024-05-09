<?php

function caducarSessio() {
    $tiempo_inactividad = 30; // 30 segundos, ( para que sean 5 min es 5 * 60 o 300 ), pongo 30 segundos para que sea menos tiempo para que puedas corregirlo sin esperar 5 min)

    if ((time() - $_SESSION['ultimoAcceso']) >= $tiempo_inactividad) {
        session_unset();
        $_SESSION["sessionCaducada"] = true;
        header("Location: inici.php");

    } else {
        $_SESSION['ultimoAcceso'] = time();
    }
}

?>

<!-- Info : https://es.stackoverflow.com/questions/33750/como-cerrar-sesi%C3%B3n-despu%C3%A9s-de-un-tiempo-de-inactividad -->    