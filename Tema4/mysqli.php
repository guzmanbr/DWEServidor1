<?

require './seguro/conexion.php';

//conexion con funciones
try{
    $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    mysqli_close($conexion);
}catch(Exception $ex){
    if ($ex->getCode() == 2002) {
        echo "Error, no están bien configurada la base de datos en el wp-config. php";
    }
    if ($ex->getCode() == 1045) {
        echo "Error, Puede deberse a haber cambiado la password al usuario root@localhost en privilegios de usuarios.";
    }
}
echo "";

?>