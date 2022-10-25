<?php

    //funcion para saber si el texto esta vacio
    function vacio($nombre){
        if (empty($_REQUEST[$nombre])) {
            return true;
        }else{
            return false;
        }
    }
    //funcion para comprobar que se ha pulsado l boton enviar
    function enviado(){
        if (isset($_REQUEST['enviar'])) {
            return true;
        }else {
            return false;
        }
    }
    //funcion para comprobar que hay una opcion seleccionada
    function existe($nombre){
        if (isset($_REQUEST[$nombre])) {
            return true;
        }else {
            return false;
        }
    }
    function controlChecks($nombre){
        $conta=0;
        if (isset($_REQUEST[$nombre])) {
            $conta = count($_REQUEST[$nombre]);
        }
        if ($conta <1 || $conta>3) {
            return false;
        }else {
            return true;
        }
    }

    function alfabetico($nombre) {
        $conta=0;
        $nombre = array();
        foreach ($nombre as $key => $value) {
            if(is_int($value)){
                $conta++;
            }
        }
        if($conta>0){
            return false;
        }else{
            return true;
        }
    }
?>