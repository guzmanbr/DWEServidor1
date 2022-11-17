<?php
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
        if (isset($_REQUEST['leer']) || isset($_REQUEST['editar']) ) {
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