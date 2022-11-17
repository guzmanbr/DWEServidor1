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
                <h2>Elige Fichero</h2>
                <div>
                <form action="./eligeFichero.php" method="post" enctype="multipart/form-data">
                    <p>
                        <label for="idFichero">Nombre fichero: </label>
                        <input type="text" name="fichero" id="idFichero" placeholder="Nombre" value="<? 
                            $patron='/^.+\.(txt)$/'; 
                            //comprobar si el patron coincide, si coincide guardar valor )
                            if(enviado() && !vacio("fichero")  && preg_match($patron,$_REQUEST["fichero"])){
                                echo $_REQUEST["fichero"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("fichero") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                            //comprobar si el patron coincide, sino mostrar mensaje
                            if (!vacio("fichero") && enviado() && !preg_match($patron,$_REQUEST["fichero"])){
                                ?><span><-- Debe cumplir el patron (nombre.txt).</span><?
                            }
                        ?>
                    </p>                
                    <p>
                        <input type="submit" value="Editar" name="editar">
                        <input type="submit" value="Leer" name="leer">
                    </p>
                    <?php                    
                        if (enviado()) {
                            if (existe('editar') && preg_match($patron,$_REQUEST["fichero"])) {
                            header('Location: ./editarFichero.php?fichero='. $_REQUEST["fichero"]); 
                                exit();
                            }
                            if (existe('leer') && preg_match($patron,$_REQUEST["fichero"])) { 
                                if (file_exists($_REQUEST['fichero'])){
                                    header('Location: ./leerFichero.php?fichero='. $_REQUEST["fichero"]); 
                                    exit();
                                }else {
                                    ?><span><--El fichero selecionado no existe.</span><?
                                }
                            }                        
                        }
                    ?>
                </form>
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