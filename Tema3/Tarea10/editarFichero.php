<?php
    require("validar.php");
?>

<?php
    //si pulso volver abre ventana eligeFichero
    if (existe('volver')) {
        header('Location: ./eligeFichero.php'); 
        exit();
    } 
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
        <h1>Tarea 10</h1>
        <?php
            ?>
                <h2>Editar Fichero</h2>

                <form action="./editarFichero.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="fichero" value ="<? echo$_REQUEST["fichero"] ?>">
                    <textarea name="textArea"><?
                            if (!$fp = fopen($_REQUEST['fichero'],'r')) {
                                ?><span>Hubo un problema al abrir el fichero</span><?
                            } else {  
                                while ($lea = fgets($fp, filesize($_REQUEST['fichero']))) {
                                    echo $lea;
                                }

                                if(existe('modificar')){
                                    if($fp = fopen($_REQUEST["fichero"], "w")){
                                        $texto = $_REQUEST["textArea"];
                                        fwrite($fichero, $texto, strlen($texto));
                                        fclose($fichero);
                                    }
                                }
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
            <?
        ?>
    </body>
</html>