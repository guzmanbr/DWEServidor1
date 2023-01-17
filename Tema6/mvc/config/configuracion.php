<?
//base de datos
require_once('./config/conexion.php');
//Modelo
require_once('./dao/FactoryBD.php');
require_once('./dao/DAO.php');
require_once('./modelo/Usuario.php');
require_once('./dao/UsuarioDAO.php');

//Controladores
$controladores = array(
    'login'=>'loginController.php'
);
//Vistas
$vista = array(
    'home'=>'homeView.php',
    'login'=>'loginView.php'
);

//Funciones
require_once('./core/funcionesSesiones.php');