<?
//Funciones formulario----------------------------------------

    //funcion para saber si el texto esta vacio
    function vacio($nombre){
        if (empty($_REQUEST[$nombre])) {
            return true;
        }else{
            return false;
        }
    }

    //funcion para comprobar que se ha pulsado insertar o volver
    function enviado(){
        if (isset($_REQUEST['insertar']) && isset($_REQUEST['volver'])) {
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

    function patTitulo($titulo){
        $patron= '/^[A-Z][a-z][0-9]?/';
        if (preg_match($patron,$_REQUEST[$titulo])==1){
            return true;
        }
        return false;
    }

    function patFecha($fehca){
        $patron= '/^$/';
        if (preg_match($patron,$_REQUEST[$fecha])==1){
            return true;
        }
        return false;
    }

    function patPrecio($precio){
        $patron= '/^[0-9]{4}\-[0-]$/';
        if (preg_match($patron,$_REQUEST[$precio])==1){
            return true;
        }
        return false;
    }

    function validarTodo(){
        if (enviado()){
            if (!vacio('titulo')){
                if(!vacio('fecha')){
                    if(!vacio('precio')){
                        return true;
                    }
                }
            }
        }
        return false;
    }



?>