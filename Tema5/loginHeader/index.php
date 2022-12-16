<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido Restringido');
    header('HTTP/1.0 401 Unauthorized');
    echo "No autorizado";
} elseif ($_SERVER['PHP_AUTH_USER'] == 'guzman' && $_SERVER['PHP_AUTH_PW'] == "guzman") {
    header('Location: ./paginaConPermiso.php');
} else {
    header('WWW-Authenticate: Basic Realm="Contenido Restringido');
    header('HTTP/1.0 401 Unauthorized');
    echo "No autorizado";
}

?>
