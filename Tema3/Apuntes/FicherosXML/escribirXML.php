<?php
    $dom = new DOMDocument("1.0","utf-8");// se le pasa la version y el encoding
    $raiz = $dom->createElement("Mundial");//creamos la raiz mundial
    $dom->appendChild($raiz);//metemos la raiz en el dom

    //elemento equipo
    $equipo = $raiz->appendChild($dom->createElement("Equipo"));//creo equipo y lo introduzco en raiz directamente
    $equipo->appendChild($dom->createElement("Nombre","España"));//creo los elementos de dentro de equipo (nombre de la etiqueta, valor de dentro)
    $equipo->appendChild($dom->createElement("Entrenador","Luis Enrique"));
    //otro equipo
    $equipo = $raiz->appendChild($dom->createElement("Equipo"));//creo equipo y lo introduzco en raiz directamente
    $equipo->appendChild($dom->createElement("Nombre","Francia"));//creo los elementos de dentro de equipo (nombre de la etiqueta, valor de dentro)
    $equipo->appendChild($dom->createElement("Entrenador","Pepe"));



    //guardamos el dom en un documento
    if ($dom->save('mundial.xml')) {
        echo "Todo correcto <br>";
    }else{
        echo "Error ";
    }









?>