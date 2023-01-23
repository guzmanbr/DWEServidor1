<?

require './config/configuracion.php';

session_start();

if (isset($_REQUEST['logout'])) {
    session_destroy();
    $_SESSION['controlador'] = $controladores['login'];
    $_SESSION['vista'] = $vistas['login'];
    $_SESSION['pagina'] = 'login';
    header('Location: ./index.php');
    exit;
} else {

    //si no tiene una vista 
    ///guardad en la sesion va a home
    if (estaValidado() && !isset($_SESSION['pagina']))
        $_SESSION['vista'] = $vistas['home'];
    //si ha pulsado login 
    elseif ((!estaValidado() && !isset($_SESSION['pagina'])) || isset($_REQUEST['login'])) {
        $_SESSION['pagina'] = 'login';
        $_SESSION['controlador'] = $controladores['login'];
        $_SESSION['vista'] = $vistas['login'];
    } elseif (isset($_SESSION['pagina'])) {

        if (esAdmin() && isset($_REQUEST['admin'])) {
            $_SESSION['controlador'] = $controladores['admin'];
            $_SESSION['pagina'] = 'admin';
            $_SESSION['vista'] = $vistas['admin'];
            require_once $_SESSION['controlador'];
        }else {
        
        }

        require_once $_SESSION['controlador'];
    }
}


require_once('./vista/layout.php');
