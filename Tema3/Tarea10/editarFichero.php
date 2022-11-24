<?php
    require("validar.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webrootTema3/css/estilos.css">
        <title>Tarea10</title>
    </head>
    <body>
        <?php
            //si pulso volver abre ventana eligeFichero
            if (existe('volver')) {
                header('Location: ./eligeFichero.php'); 
                exit();
            } 
            if (enviado()){
                if (($abrir = fopen($_REQUEST['fichero'],'w')) && existe("modificar")){
                    $escribir = $_REQUEST['textArea'];
                    fwrite($abrir,$escribir,strlen($escribir));
                    fclose($abrir);
                }
                header('Location: ./leerFichero.php?fichero='. $_REQUEST['fichero']);
                exit();
            }
        ?>
        <h1>Tarea 10</h1>
        <h2>Editar Fichero</h2>
        <form action="./editarFichero.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="fichero" value ="<? echo$_REQUEST["fichero"] ?>">
            <textarea name="textArea" id="idArea" cols="40" rows="20"><?

            if (!file_exists($_REQUEST['fichero'])){

                if($abierto = fopen($_REQUEST['fichero'],'w')){
                    fclose($abierto);
                }
                
            } else {
                if($abierto = fopen($_REQUEST['fichero'],'r+')){
                    if (filesize($_REQUEST['fichero']) == 0){
                        echo "El fichero esta vacio escribe algo:";

                    } else {
                        while($linea = fgets($abierto,filesize($_REQUEST['fichero']))){
                            echo $linea;
                        }
                    }
                } else {
                    while($linea = fgets($abierto,filesize($_REQUEST['fichero']))){
                        echo $linea;
                    }
                }

                fclose($abierto);
            }
                ?></textarea>
            <p>
                <input type="submit" value="Modificar" name="modificar">
                <input type="submit" value="Volver" name="volver">
            </p>
        </form>             
        <hr>
        <ul>
            <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/eligeFichero.php">Codigo Tarea 10</a></li>
            <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/validar.php">Codigo validar.php</a></li>
            <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/leerFichero.php">Codigo leerFichero.php</a></li>
            <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/editarFichero.php">Codigo editarFichero.php</a></li>
        </ul>

    </body>
</html>