
<?php
    //Funcion para saber si el texto esta vacio
    function vacio($nombre){
        if (empty($_REQUEST[$nombre])) {
            return true;
        }else{
            return false;
        }
    }
    //Funcion para comprobar que se ha pulsado el boton enviar
    function enviado(){
        if (isset($_REQUEST['enviar'])) {
            return true;
        }else {
            return false;
        }
    }
    function existe($nombre){
        if (isset($_REQUEST[$nombre])) {
            return true;
        }else {
            return false;
        }
    }
    function valido(){
        if (enviado()) {
            if (!vacio('nombre')){
                if (!vacio('exp')) {
                    if ($_REQUEST['curso']!="1") {
                        return true;
                    }
                }
            }
        }
        return false;
    }
    function valido2(){
        if (enviado()) {
            if (!vacio('nombre')){
                if (!vacio('exp')) {
                    if ($_REQUEST['curso']!="1") {
                        if (!existe('asignarturas[]')) {
                            return true;
                        }
                    }
                }
            }
        }
        return false;
    }
?>
