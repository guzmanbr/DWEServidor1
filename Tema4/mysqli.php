<?

require './seguro/conexion.php';

// //conexion con funciones
// try{
//     $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');
    
//     //Consultar la base de datos ----------
//     $sql = 'select * from equipo';//variable con la sentencia

//     //Guardamos consulta ---------------
//     $resultado = mysqli_query($conexion,$sql);//devuelve mysqli_resulte


//     //Mostramos Datos---------------

//     echo "<br>All:<br>";
//     //print_r($resultado->fetch_all());//muestro todos los resultados

//     echo "<br> Array:<br>";
//     // print_r($resultado->fetch_array());//asi solo muestra uno
//     // print_r($resultado->fetch_array());
//     //De esta forma mostramos todo el array 
//     while ($row = $resultado->fetch_array()) {
//         print_r($row);//va mostrando cada linea
//         echo "<br>";
//     }

//     echo "<br> Object:<br>";
//     // print_r($resultado->fetch_object());//asi solo muestra uno
//     // print_r($resultado->fetch_object());
//     //De esta forma mostramos todo el array
//     // while ($row = $resultado->fetch_object()) {
//     //     print_r($row);//va mostrando cada linea
//     //     echo "<br>";
//     // }



//     mysqli_close($conexion);
// }catch(Exception $ex){
//     // if ($ex->getCode() == 2002) {
//     //     echo "Error, no están bien configurada la base de datos en el wp-config. php";
//     // }
//     // if ($ex->getCode() == 1045) {
//     //     echo "Error, Puede deberse a haber cambiado la password al usuario root@localhost en privilegios de usuarios.";
//     // }
//     echo mysqli_connect_errno();
//     echo mysqli_connect_error();
// }


//conexion con objetos
// try{
//     $conexionO = new mysqli();
//     $conexion->connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');
//     $conexionO->close();
// }catch(Exception $ex){
//     echo $conexionO->connect_errno;
//     echo $conexionO->connect_error;

// }



//Consultas preparadas
try{
    $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');
    
    //Consultar la base de datos ----------
    $sql = 'select * from equipo where id = ? and nombre = ?';//creo sentencia
    $consulta_preparada = mysqli_stmt_init($conexion);//creo consulta preparada
    mysqli_stmt_prepare($consulta_preparada,$sql);
    $id=1;
    $nombre='España';

    //le pasamos consulta, tipo(i-int,s-cadena,d-float,b-binario) y valor
    mysqli_stmt_bind_param($consulta_preparada,'i',$id);
    mysqli_stmt_bind_param($consulta_preparada,'s',$nombre);
    mysqli_stmt_execute($consulta_preparada);


    //Guardamos consulta ---------------

    

    //Mostramos Datos---------------

    mysqli_close($conexion);
}catch(Exception $ex){
    echo mysqli_connect_errno();
    echo mysqli_connect_error();
}


?>