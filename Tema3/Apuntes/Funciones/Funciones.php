

<?php



    // Sin Parametros
    function saludo() {
        echo "Hola";
    }

    // Con un parametro
    function saludo2($nombre) {
        echo "Hola " .$nombre;
    }

    // Parametros tipos de dato 'normales' se pasan por valor
    function saludo3($nombre) {
        $nombre = $nombre . "valor";
        echo "Hola " .$nombre;
    }

    // Cambiar una funcion global
    function saludo4() {
        global $nombre;
        $nombre = $nombre . "valor";
        echo "Hola " .$nombre;
    }

    // Que devuelva algo con un return
    function saludo5($nombre) {
        $nombre = $nombre . "valor";
        echo "Hola " .$nombre;
        return $nombre;
    }

    // Por referencia
    function saludo6(&$nombre) {
        $nombre = $nombre . "valor";
        echo "Hola " .$nombre;
    }

    // Funcion que si no le pasamos valores, use un valor por defecto
    function saludo7($nombre = "Mundo") {
        echo "Hola " .$nombre;
    }

    // Funcion rellene un array con la hora que se ha hecho la llamada
    function rellenaArray($array) {
        array_push($array, date("h:i:s"));
        print_r($array);
    }

    //funcion cambia lado de cuadrado
    function cambioLado($objeto,$lado){
        $objeto->lado =$lado;
    }


?>