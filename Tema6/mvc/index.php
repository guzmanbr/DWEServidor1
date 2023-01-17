<?php
    require './config/configuracion.php';
    
    session_start();

    //si no tiene una vitsta guardada en la sesion
    if (!isset($_SESSION['vista'])) {
        $_SESSION['vista'] = $vista['home'];
    }
    //si ha pulsado login
    elseif(isset($_SESSION['login'])) {  
        $_SESSION['pagina']= 'login';
        $_SESSION['controlador']= $controladores['login'];
        $_SESSION['vista'] = $vista['login'];
    }
    elseif (isset($_SESSION['pagina'])) {
        require_once $_SESSION['controlador'];
    }

    require_once('./vista/layout.php');



//    $arrayUsuarios = UsuarioDAO::findAll();
//     //print_r($arrayUsuarios);

//     $findbyId = UsuarioDAO::findById('u1d');
//     print_r($findbyId);

    
//     $usuario = new Usuario('maria',sha1('maria'),'maria','maria@gmail.com','ADM01');
//     //UsuarioDAO::insert($usuario);

//     $usuario -> nombre = 'pepito';
//     if(!UsuarioDAO::update($usuario)){
//         echo "No se ha modificado";
//     }
//     if(!UsuarioDAO::delete($usuario->usuario)){
//         echo "No se ha modificado";
//     }


?>