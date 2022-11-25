<?php
    function enviado(){
        if (isset($_REQUEST['guardar'])) {
            return true;
        }
        return false;
    }

    function vacio($nombre){
        if (empty($_REQUEST[$nombre])) {
            return true;
        }
        return false;
    }
    
    function enviado(){
        if (isset($_REQUEST['leer']) || isset($_REQUEST['editar']) || isset($_REQUEST['volver']) || isset($_REQUEST['modificar']) ) {
            return true;
        }else {
            return false;
        }
    }

    function valido(){
        if (enviado()) {
            if (!vacio('nota1')) {
                if (!vacio('nota2')) {
                    if (!vacio('nota3')) {
                        return true;
                    }
                }
            }
        }
        return false;
    }
?>