<?php

    $cadena = 'Hoy hace muy buen dia y hay nubes';
    $patron = '/hace/';//comprobar que hay una hace
    echo "<br> Cadena: ".$cadena." y patron  " .$patron. "  Match " .preg_match($patron,$cadena);

    echo "<br>";

    $patron = '/ha./';//comprobar que hay una ha, .(cualquier valor) 
    echo "<br> Cadena: ".$cadena." y patron  " .$patron. "  Match " .preg_match($patron,$cadena);

    echo "<br>";

    $patron = '/ha.\s/';//comprobar que hay una ha, .(cualquier valor) y un espacio
    echo "<br> Cadena: ".$cadena." y patron  " .$patron. "  Match " .preg_match($patron,$cadena);

    echo "<br>";

    $patron = '/h[o|a]y/';//comprobar que (hay u hoy) estan en la frase
    echo "<br> Cadena: ".$cadena." y patron  " .$patron. "  Match " .preg_match($patron,$cadena);

    echo "<br>";

    $mes = 'Noviembre';
    $mes1 = 'November';
    $mes2 = 'Nov.';

    $patron = "/^Nov[.|embre|iembre]$/";//comprobar que (Nov) esta en las tres cadenas pero solo si coincide con las tres palabras
    echo "<br> Cadena: ".$mes." y patron  " .$patron. "  Match " .preg_match($patron,$mes);
    echo "<br> Cadena: ".$mes1." y patron  " .$patron. "  Match " .preg_match($patron,$mes1);
    echo "<br> Cadena: ".$mes2." y patron  " .$patron. "  Match " .preg_match($patron,$mes2);

    echo "<br>";

    $cadena1= 'log.log';
    $cadena2= 'log1.log';
    $cadena3= 'log125.log';

    $patron = '/log[0-9]*.log/';//con * de 0 a mas veces, por lo que las 3 opciones son validas
    echo "<br> Cadena: ".$cadena1." y patron  " .$patron. "  Match " .preg_match($patron,$cadena1);
    echo "<br> Cadena: ".$cadena2." y patron  " .$patron. "  Match " .preg_match($patron,$cadena2);
    echo "<br> Cadena: ".$cadena3." y patron  " .$patron. "  Match " .preg_match($patron,$cadena3);

    echo "<br>";

    //IBAN valido
    // PAIS 2 letras, 4 numeros entidad, 4 numeros oficina, 2 numeros control, 10 numeros que es la cuenta.


    $IBAN1="ES6621000418401234567891";
    $IBAN2="ES66 1210 0418 40 1234567891";


    $patron = "/^[A-Z]{2}[0-9]{2}(\s)?[0-9]{4}(\s)?[0-9]{4}(\s)?[0-9]{2}(\s)?[0-9]{10}$/";//comprobar 
    echo "<br> Cadena: ".$IBAN1." y patron  " .$patron. "  Match " .preg_match($patron,$IBAN1);
    echo "<br> Cadena: ".$IBAN2." y patron  " .$patron. "  Match " .preg_match($patron,$IBAN2);

    echo "<br>";

    $num1="556";
    $num2="5655";
    $num3="5";
    $cadena="aa";
    //$patron = "/^\d{1,3}$/"; comprueba con la \d que solo sean digitos
    $patron = "/^\d[0-9]{1,3}$/";//comprobar que ESTA ENTRE 0 Y 999
    echo "<br> Cadena: ".$num1." y patron  " .$patron. "  Match " .preg_match($patron,$num1);
    echo "<br> Cadena: ".$num2." y patron  " .$patron. "  Match " .preg_match($patron,$num2);
    echo "<br> Cadena: ".$num3." y patron  " .$patron. "  Match " .preg_match($patron,$num3);
    echo "<br> Cadena: ".$cadena." y patron  " .$patron. "  Match " .preg_match($patron,$cadena);

    //  \d numero y \D letra
    echo "<br>";
    echo "<br>";
    //etiqueta que pueda ser o de apertura o de cierre html,  match con <html> o <h3> </html> </h3>

    $etiqueta1 ="<html>";
    $etiqueta2 ="</html>";
    $etiqueta3 ="<a>";
    $etiqueta4 ="</h3>";

    $patron = "/<\/?\D+\d*>/";//puede o no tener tiqueta de cierre, una o mas letras, 0 o mas numeros
    echo "<br> Cadena: ".$etiqueta1." y patron  " .$patron. "  Match " .preg_match($patron,$etiqueta1);
    echo "<br> Cadena: ".$etiqueta2." y patron  " .$patron. "  Match " .preg_match($patron,$etiqueta2);
    echo "<br> Cadena: ".$etiqueta3." y patron  " .$patron. "  Match " .preg_match($patron,$etiqueta3);
    echo "<br> Cadena: ".$etiqueta4." y patron  " .$patron. "  Match " .preg_match($patron,$etiqueta4);

    //quiero que me devuelva donde ha hecho match

    $patron = "/<\/?\D+\d*>/";
    $cadena="<html><a></a></html>";
    echo "<br> Cadena: ".$cadena." y patron  " .$patron. "  Match " .preg_match_all($patron,$cadena,$array);
    preg_match_all($patron,$cadena,$array);
?>