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
    
    //funcion paracontrolar que hay minimo un check y maximo 3
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

    //validar que el formulario se puede enviar
    function validarTodo(){
        if(enviado()){
            if ( !vacio($_REQUEST["nombre"]) && !vacio($_REQUEST["apellido1"]) && !vacio($_REQUEST["fecha"]) && !existe($_REQUEST["opcion"]) && !existe("opcionSelect") &&
            !existe("checks") && !vacio("telefono") && !vacio("mail") && !vacio("pass")) {
               return true;
            }
            
        }else{
            return false;
        }
 
    }

    // funcion para mostrar los datos rellenados una vez se haya enviado el formulario
    function mostraResultados(){
        echo "<h1>Datos introducidos</h1>";
        echo "Alfabetico: ".$_REQUEST["nombre"];
        if (!vacio("nombre2")) {
            echo "Alfabetico Opcional: ".$_REQUEST["nombre2"];
        }
        echo "<br><br>";
        echo "Alfanumerico: ".$_REQUEST["apellido1"];
        if (!vacio("apellido2")) {
            echo "Alfanumerico Opcional: ".$_REQUEST["apellido2"];
        }
        echo "<br><br>";
        if (!vacio("apellido2")) {
            echo "Alfanumerico Opcional: ".$_REQUEST["apellido2"];
        }
        echo "<br><br>";
        if (!vacio("fecha")) {
            echo "Fecha: ".$_REQUEST["fecha2"];
        }
        echo "<br><br>";
        if (!vacio("fecha2")) {
            echo "Fecha Opcional: ".$_REQUEST["fecha2"];
        }
        echo "<br><br>";
        if (!vacio("opcion")) {
            echo "Radio Obligatorio: ".$_REQUEST["opcion"];
        }
        echo "<br><br>";
        if (!vacio("opcionSelect")) {
            echo "Select: ".$_REQUEST["opcionSelect"];
        }
        echo "<br><br>";
        if (!vacio("checks")) {
            echo "CheckBox:";
            foreach ($_REQUEST["checks"] as $key => $value) {
                echo " ".$value." ";
            }
        }
        echo "<br><br>";
        if (!vacio("telefono")) {
            echo "Nº Telefono: ".$_REQUEST["telefono"];
        }
        echo "<br><br>";
        if (!vacio("mail")) {
            echo "Email: ".$_REQUEST["mail"];
        }
        echo "<br><br>";
        if (!vacio("pass")) {
            echo "Contraseña: ".$_REQUEST["pass"];
        }
        echo "<br><br>";
        if (!vacio("documento")) {
            echo "Documento: ".$_REQUEST["documento"];
        }
        
    }






?>