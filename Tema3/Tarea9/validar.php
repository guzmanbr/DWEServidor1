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
    function existeDoc($nombre){
        if (isset($_FILES[$nombre])) {
            return true;
        }else {
            return false;
        }
    }


    function mayorEdad(){
 
        //pongo el mismo formato en la fecha del formulario y en la actual
        $fecha=date("Y-m-d",strtotime($_REQUEST['fecha']));
        $hoy=date("Y-m-d");
        //creo objeto de ambas fechas para poder realizar la resta
        $fecha2 = new Datetime($fecha);
        $hoy2 = new Datetime($hoy);
        //resto las fechas 
        $diferencia= $hoy2->diff($fecha2);
        //hago que la diferencia este en años
        $edad = $diferencia->y;
        //compruebo que la edad sea superior o igual a 18
        if ($edad >=18){
            return true;
        }
        return false;
    }

    function validarDni() {
        //creo variable con el dni
        $dniForm=$_REQUEST["dni"];
        //seleciono solo la letra
        $letraForm = substr($dniForm,8);
        //seleciono sololos numeros
        $numForm = substr($dniForm,0,8);
        $valor= (int) ($numForm / 23);
        $valor *= 23;
        $valor= $numForm - $valor;
        $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
        $letra= substr ($letras, $valor, 1);
        //compruebo si es la letra correcta
        if($letra==$letraForm){
            return true;
        }else{
            return false;
        }
    }

    
    function validarTodo(){
        if (enviado()) {
           if (!vacio("nombre")) {
               if (!vacio("apellidos")) {
                   if (!vacio("fecha")&& mayorEdad()) {
                        if (!vacio("dni") && validarDni()) {
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
    // funcion para mostrar los datos rellenados una vez se haya enviado el formulario
    function mostrarResultados(){
        echo "<h1>Datos introducidos</h1>";
        echo "<br><br>Alfabetico: ".$_REQUEST["nombre"];
        echo "<br><br>Alfanumerico: ".$_REQUEST["apellidos"];
        echo "<br><br> Fecha: ".$_REQUEST["fecha"];
        echo "<br><br> DNI: ".$_REQUEST["dni"];
        echo "<br><br>Email: ".$_REQUEST["email"];

    }
?>
