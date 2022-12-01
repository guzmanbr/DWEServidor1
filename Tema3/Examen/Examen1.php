<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Examen1</title>
    </head>
    <body>
        <h1>Examen 1</h1>
        <?php
            //Si no existe el fichero lo creo
            if(!file_exists('Examen1.xml')){
                $dom = new DOMDocument("1.0","utf-8");
                $raiz = $dom->createElement("direcciones");
                $dom->appendChild($raiz);
                if ($dom->save('Examen1.xml')) {
                    echo "Fichero creado correctamente<br>";
                }else{
                    echo "Error ";
                }
            }

            $cont = 1;//Variable para iniciar a 1 las veces en las nuevas ip
            $contEx =0;//Variable para controlar si existe la Ip

            //Abro el fichero 
            $direcciones = simplexml_load_file('Examen1.xml');

            //Si el fichero esta vacio escribo en el 
            if (count($direcciones->children())==0){
                $nuevaIp = $direcciones->addChild('direccion');
                $nuevaIp->addChild('Ip',$_SERVER['REMOTE_ADDR']);
                $nuevaIp->addChild('Veces', $cont);
                $nuevaIp->addChild('Fecha',date("D, d M Y h:i:s O"));
            }

            //Muestro el fichero
            foreach ($direcciones as $direccion) {
                echo "<b>Ip</b>: ".$direccion->children()[0];
                echo " <b>Veces</b>: ".$direccion->children()[1];
                echo " <b>Fecha</b>: ".$direccion->children()[2];
                echo "<br>";
            }

            //Compruebo si la Ip existe ya en el fichero
            foreach ($direcciones as $direccion) {
                if ($direccion->children()[0] == $_SERVER['REMOTE_ADDR']) {
                    $ipExistente = $direccion;//Si existe la guardo
                    $contEx=1;
                }else{
                    $contEx=2;//Si no existe
                }
            }
        
            //Si la ip existe se modifica
            if ($contEx == 1) {
                
                $ipExistente->Veces = $ipExistente->Veces + 1;
                $ipExistente->Fecha = date("D, d M Y h:i:s O");
                $contEx=0;
                $ipExistente=0;
            }

            //Si la ip no existe se crea 
            if ($contEx == 2) {
                $nuevaIp = $direcciones->addChild('direccion');
                $nuevaIp->addChild('Ip',$_SERVER['REMOTE_ADDR']);
                $nuevaIp->addChild('Veces', $cont);
                $nuevaIp->addChild('Fecha',date("D, d M Y h:i:s O"));
                $contEx=0;
            }

            //Guardo los cambios
            $direcciones->asXML('Examen1.xml');
        ?>
    </body>
</html>