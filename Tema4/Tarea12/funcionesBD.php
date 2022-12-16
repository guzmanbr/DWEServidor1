<?php

require './conexionBD.php';

// Conexión con Funciones

    // $conexion = mysqli_connect(HOST,USER,PASS);


    function conectar(){
        try {
            $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'peliculasBD');
        } catch (Exception $ex) {
    
            echo mysqli_connect_errno();
            echo mysqli_connect_error();
        }
    }

    function mostrarTabla($conexion){
        $sql = 'select * from peliculasBD';

        $resultado = mysqli_query($conexion, $sql);

        while ($row = $resultado -> fetch_array()) {
            print_r($row);
            echo "<br>";
        }
    }

    function insertarRegistro(){
 
    }



    try {
        $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'peliculasBD');
        // Consultar la Base de Datos
        $sql = 'select * from equipo';
        $resultado = mysqli_query($conexion, $sql);
        // echo "<br><b>All</b><br>";
        //print_r($resultado -> fetch_all());
        echo "<br><br><b>Array</b><br>";
        // print_r($resultado -> fetch_array());
        // print_r($resultado -> fetch_array());
        // print_r($resultado -> fetch_array());
        while ($row = $resultado -> fetch_array()) {
            print_r($row);
            echo "<br>";
        }

        mysqli_close($conexion);
    } catch (Exception $ex) {

        echo mysqli_connect_errno();
        echo mysqli_connect_error();
    }

    echo "";



// Conexión con Objetos
    // try {
    //     $conexion0 = new mysqli();
    //     $conexion0 -> connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

        // Consultar la Base de Datos
        // $sql = 'select * from equipo';

        // $resultado = mysqli_query($conexion, $sql);

        // echo "<br><br><b>Array</b><br>";
        // while ($row = $resultado -> fetch_object()) {
        //     print_r($row);
        //     echo "<br>";
        // }

    //     mysqli_close($conexion0);

    // } catch (Exception $ex) {

    //     echo $conexion0 -> connect_errno;
    //     echo $conexion0 -> connect_error;
        
    // }



// Consulta Preparada SELECT
    // try {
    //     $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    //     // Consultar la Base de Datos
    //     $sql = 'select * from equipo where id = ? and nombre = ?';

    //     $consulta_preparada = mysqli_stmt_init($conexion);
    //     mysqli_stmt_prepare($consulta_preparada, $sql);

    //     $id = 1;
    //     $nombre = 'España';
    //     mysqli_stmt_bind_param($consulta_preparada,'is',$id,$nombre);
    //     mysqli_stmt_execute($consulta_preparada);

    //     mysqli_stmt_bind_result($consulta_preparada, $r_id, $r_nombre);
    //     while (mysqli_stmt_fetch($consulta_preparada)) {
    //         echo "<br><b>Id:</b> " . $r_id . ", <b>Nombre:</b> " . $r_nombre;
    //     }

    //     mysqli_close($conexion);

    // } catch (Exception $ex) {

    //     echo mysqli_connect_errno();
    //     echo mysqli_connect_error();
    // }


// Consulta Preparada INSERT
    // try {
    //     $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    //     // Consultar la Base de Datos
    //     $sql = 'insert into equipo values(?,?)';

    //     $consulta_preparada = mysqli_stmt_init($conexion);
    //     mysqli_stmt_prepare($consulta_preparada, $sql);

    //     $id = 3;
    //     $nombre = 'Japon';
    //     mysqli_stmt_bind_param($consulta_preparada,'is',$id,$nombre);
    //     mysqli_stmt_execute($consulta_preparada);

    //     echo mysqli_stmt_num_rows($consulta_preparada);

    //     mysqli_close($conexion);

    // } catch (Exception $ex) {

    //     echo mysqli_connect_errno();
    //     echo mysqli_connect_error();
    //     echo " " .$ex -> getMessage();
    // }


// Consulta Preparada UPDATE
    // try {
    //     $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    //     // Consultar la Base de Datos
    //     $sql = 'update equipo set nombre = ? where nombre = \'Japon\' ';

    //     $consulta_preparada = mysqli_stmt_init($conexion);
    //     mysqli_stmt_prepare($consulta_preparada, $sql);

    //     $nombre = 'China';
    //     mysqli_stmt_bind_param($consulta_preparada,'s',$nombre);
    //     mysqli_stmt_execute($consulta_preparada);

    //     echo mysqli_stmt_num_rows($consulta_preparada);

    //     mysqli_close($conexion);

    // } catch (Exception $ex) {

    //     echo mysqli_connect_errno();
    //     echo mysqli_connect_error();
    //     echo " " .$ex -> getMessage();
    // }







//Funciones formulario----------------------------------------


    //funcion para saber si el texto esta vacio
    function vacio($nombre){
        if (empty($_REQUEST[$nombre])) {
            return true;
        }else{
            return false;
        }
    }

    //funcion para comprobar que se ha pulsado leer o editar
    function enviado(){
        if (isset($_REQUEST['insertar'])) {
            return true;
        }else {
            return false;
        }
    }

    //funcion para comprobar si existe
    function existe($nombre){
        if (isset($_REQUEST[$nombre])) {
            return true;
        }else {
            return false;
        }
    }


?>


