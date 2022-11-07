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
    function existeDoc($nombre){
        if (isset($_FILES[$nombre])) {
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

    
    // funcion para mostrar los datos rellenados una vez se haya enviado el formulario
    function mostrarResultados(){
        echo "<h1>Datos introducidos</h1>";
        echo "<br><br>Alfabetico: ".$_REQUEST["nombre"];//
        if (!vacio("nombre2")) {
            echo "Alfabetico Opcional: ".$_REQUEST["nombre2"];
        }
        echo "<br><br>Alfanumerico: ".$_REQUEST["apellido1"];//
        if (!vacio("apellido2")) {
            echo "Alfanumerico Opcional: ".$_REQUEST["apellido2"];
        }
        echo "<br><br> Fecha: ".$_REQUEST["fecha"];//
        if (!vacio("fecha2")) {
            echo " <br><br>Fecha Opcional: ".$_REQUEST["fecha2"];
        }
        echo "<br><br>Radio Obligatorio: ".$_REQUEST["opcion"];//
        echo "<br><br>Select: ".$_REQUEST["opcionSelect"];//
        
        echo "<br><br>CheckBox:";//
        foreach ($_REQUEST["checks"] as $key => $value) {
            echo " ".$value." ";
        }
        echo "<br><br>Nº Telefono: ".$_REQUEST["telefono"];//
        echo "<br><br>Email: ".$_REQUEST["mail"];//
        echo "<br><br>Contraseña: ".$_REQUEST["pass"];//

    }
    
    
    function validarTodo(){
        if (enviado()) {
           if (!vacio("nombre")) {
               if (!vacio("apellido1")) {
                   if (!vacio("fecha")) {
                       if (existe("opcion")) {
                           if (existe("opcionSelect") && $_REQUEST["opcionSelect"]!=0) {
                               if (existe("checks")) {
                                    if (!vacio("telefono")) {
                                        if (!vacio("mail")) {
                                            if (!vacio("pass")) {
                                                return true;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return false;
    }
?>
