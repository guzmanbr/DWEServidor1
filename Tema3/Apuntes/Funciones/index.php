    <h1>Funcion</h1>

<?php
    include("./Funciones.php");


    saludo();
    echo "<br>";
    saludo2("Guzman");
    echo "<br>";
    $nombre = "Guzman";

    // No se cambia porque se ha pasado por valor
    saludo3($nombre);
    echo "<br>Cambio de nombre: ".$nombre;

    // Global
    echo "<br>";
    echo "<br>";
    echo "Usando la global";
    echo "<br>";
    saludo4();
    echo "<br>";
    echo "Cambio de nombre: ".$nombre;

    // Que devuelva algo con un return
    $nombre = "Guzman";
    echo "<br>";
    echo "<br>";
    echo "Usando return";
    echo "<br>";
    $nombre = saludo5($nombre);
    echo "<br>";
    echo "Cambio de nombre: ".$nombre;



    // Por referencia
    $nombre = "Guzman";
    echo "<br>";
    echo "<br>";
    echo "Usando referencia";
    echo "<br>";
    saludo6($nombre);
    echo "<br>";
    echo "Cambio de nombre: ".$nombre;

   



    // Funcion que si no le pasamos valores, use un valor por defecto

    echo "<br>";
    echo "<br>";
    echo "Usando valores por defecto";
    echo "<br>";
    saludo7("Guzman");
    echo "<br>";
    saludo7();
    echo "<br>";
    echo "<br>";



    // Pasar un array
    $array = array();
    // Llamar a la funcion que rellene con la hora que se ha hecho la llamada
    rellenaArray($array);
    rellenaArray($array);
    rellenaArray($array);
    echo "<br>";
    print_r($array);
    echo "<br>";
    echo "<br>";

    //Objetos
    class Cuadrado{
        public $lado = 5;
    }
    //creo objeto
    $objeto = new Cuadrado();

    cambioLado($objeto,6);
    echo "<br> Objeto ". $objeto->lado;
    echo "<br>";


?>