<?

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

if (empty($user)) {
    
    $_SESSION['error'] = "<span style=color:red>El usuario no puede estar vacio!!</span>";
    header('Location: ../login.php');
    exit;

} elseif (empty($pass)) {
    $_SESSION['error'] = "<span style=color:red>La contraseña no puede estar vacia!!</span>";
    header('Location: ../login.php');
    exit;

} else{
    $usuario = UsuarioDAO::valida($user,$pass);
    if ($usuario != null) {
        $_SESSION['validado'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['nombre'] = $usuario->nombre;
        $_SESSION['perfil'] = $usuario->perfil;
        $_SESSION['vista'] = $vistas['home'];
        $_SESSION['controlador'] = './controlador/UserController.php';
        // unset($_SESSION['controlador']);
    }
}