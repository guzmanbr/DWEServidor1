
<?php

    function br(){
        echo "<br>";
    }

    function h1($cadena){
        echo "<h1>".$cadena."</h1>";
    }

    function p($cadena){
        echo "<p>".$cadena."</p>";
    }

    function letraDni($dni) {
        $valor= (int) ($dni / 23);
        $valor *= 23;
        $valor= $dni - $valor;
        $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
        $letra= substr ($letras, $valor, 1);
        echo $letra;
    }


    function numAleatorio($min,$max){
        $num = random_int($min,$max);
        echo $num;
    }
    






?>