<?

require './seguro/conexion.php';
try{
    $conexion = mysqli_connect(HOST,'USER',PASS);
}catch(Exception $ex){
    echo $ex;
}


echo "";

?>