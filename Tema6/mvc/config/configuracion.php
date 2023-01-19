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
    'login'=>'./controlador/LoginController.php'
);
//Vistas
$vistas = array(
    'home'=>'homeView.php',
    'login'=>'loginView.php',
    'user'=>'UserView.php'
);

//Funciones
require_once('./core/funcionesSesiones.php');