<?

if (isset($_REQUEST['admProductos'])) {
    $_SESSION['vista'] = $vista['listaProd'];
    $_SESSION['controlador'] = $controladores['preoducto'];
    require_once  $_SESSION['controlador'];
} 