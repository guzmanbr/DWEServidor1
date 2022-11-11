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


    function mayorEdad(){
        
    }

    function letraDni() {
        $dniForm=$_REQUEST["dni"];
        echo $dniForm;
        $dniSinLetra=$_REQUEST["dni"];
        unset($dniSinLetra[8]);
        echo $dniSinLetra;
        $dni=$dniSinLetra;
        // $dni=$_REQUEST["dni"];
        $valor= (int) ($dni / 23);
        $valor *= 23;
        $valor= $dni - $valor;
        $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
        $letra= substr ($letras, $valor, 1);
        echo $letra;
        if($letra==$dniForm[8]){
            return true;
        }else{
            return false;
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
               if (!vacio("apellido")) {
                   if (!vacio("fecha")) {
                        if (!vacio("dni")) {
                            if (!vacio("email")) {
                                return true;
                            }
                        }
                    }
                }
            }
        }
        return false;
    }
?>
