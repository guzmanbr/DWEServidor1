<?php
require("validar.php");
?>

<?php
    if (existe('editar')) {
        header('Location: ./editarFichero.php?fichero='. $_REQUEST["fichero"]); 
        exit();
    }
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
    <h2>Leer Fichero</h2>

    <form action="./leerFichero.php" method="post" enctype="multipart/form-data">
        <textarea name="textArea"><?php 
                if (!$fp = fopen($_REQUEST['fichero'],'r')) {
                    ?><span>Hubo un problema al abrir el fichero</span><?
                } else {  
                    
                    while ($lea = fgets($fp, filesize($_REQUEST['fichero']))) {
                        echo $lea;
                    }
                    fclose($fp);
                } 
            
            
            ?></textarea>
        <p>
            <input type="submit" value="Editar" name="editar">
            <input type="submit" value="Volver" name="volver">
        </p>
    </form>
    <br><br>
    <ul>
        <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/eligeFichero.php">Codigo Tarea 10</a></li>
        <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/valitaidar.php">Codigo validar.php</a></li>
        <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/leerFichero.php">Codigo leerFichero.php</a></li>
        <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/edrFichero.php">Codigo editarFichero.php</a></li>
    </ul>

</body>

</html>