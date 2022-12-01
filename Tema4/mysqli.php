<?

require './seguro/conexion.php';
try{
    $conexion = mysqli_connect('HOST',USER,PASS);
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