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

    function validarTodo(){
        if(enviado()){
            if ( !vacio($_REQUEST["nombre"]) && !vacio($_REQUEST["apellido1"]) && !vacio($_REQUEST["fecha"]) && !existe($_REQUEST["opcion"]) ) {
               return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
 
    }

    function mostraResultados(){
        echo "<h1>Datos introducidos</h1>";
        echo "Alfabetico: ".$_REQUEST["nombre"];
        if (!vacio("nombre2")) {
            echo "Alfabetico Opcional: ".$_REQUEST["nombre2"];
        }
        echo "Alfanumerico: ".$_REQUEST["apellido1"];
        if (!vacio("apellido2")) {
            echo "Alfanumerico Opcional: ".$_REQUEST["apellido2"];
        }
        if (!vacio("apellido2")) {
            echo "Alfanumerico Opcional: ".$_REQUEST["apellido2"];
        }
        if (!vacio("fecha2")) {
            echo "Fecha Opcional: ".$_REQUEST["fecha2"];
        }
        if (!vacio("fecha2")) {
            echo "Fecha Opcional: ".$_REQUEST["fecha2"];
        }


    }






?>