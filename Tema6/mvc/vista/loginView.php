<?
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
?>
<h1>Login</h1>
<form action="./funciones/valida.php" method="post">
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user">
    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass">
    <input type="submit" value="Enviar" name="enviar">
</form>