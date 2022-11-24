<?php

    $dom = new DOMDocument();//CREAMOS CLASE DOM

    $dom->load('departamento.xml');//cargamos lo que hay en el fichero

    echo "Fichero <br>";

    //leer la raiz
    $raiz = $dom->childNodes[0];
    echo "Raiz: " . $raiz->nodeName;

    //numero de hijos de la raiz
    echo " tiene " . $raiz-> childNodes->length . " hijos contando los textos";

    //recorremos los hijos
    foreach ($raiz->childNodes as $elementos) {
        if($elementos->nodeType ==1){
            echo "<br> Un hijo que es: ".$elementos->nodeName;
            foreach ($elementos->childNodes as $datos) {
                if($datos->nodeType ==1){
                    echo "<br> Un hijo que es: ".$datos->nodeName. " y valor ". $datos->nodeValue;
                }
            }
        }
    }
?>
    