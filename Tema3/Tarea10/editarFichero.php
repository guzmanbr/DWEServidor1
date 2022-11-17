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
        <h1>Tarea 10</h1>
        <?php
            ?>
                <h2>Editar Fichero</h2>
                <div>
                <?php
                    if(enviado()){
                        if($fichero = fopen($_REQUEST["fichero"], "w")){
                            $texto = $_REQUEST["textArea"];
                            fwrite($fichero, $texto, strlen($texto));
                            fclose($fichero);
                        }
                        header('Location: ./editarFichero.php?fichero='.$_REQUEST["fichero"]);
                        exit();
                    }
                ?>
                <form action="./editaFichero.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="fichero" value=" <?php echo $_REQUEST["fichero"]; ?>">

                    <textarea name="textArea" rows="15" cols="25">
                        
                    </textarea>
                    <br>
                    <input type="submit" name="leer" value="modificar">
                </form>             
                <p>
                    <input type="submit" value="Volver" name="volver">
                    <input type="submit" value="Elige" name="elige">
                </p>
                <?php                    
                    if (enviado()) {
                        if (existe('volver') && preg_match($patron,$_REQUEST["fichero"])) {
                            header('Location: ./eligeFichero.php?fichero='. $_REQUEST["fichero"]); 
                            exit();
                        }
                        if (existe('elige') && preg_match($patron,$_REQUEST["fichero"])) { 
                            header('Location: ./eligeFichero.php?fichero='. $_REQUEST["fichero"]); 
                            exit();
                        }                        
                    }
                ?>
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