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
                        <label for="idNombre">Nombre fichero: </label>
                        <input type="text" name="nombre" id="idNombre" placeholder="Nombre" value="<? 
                            $patron='/^.+\.(txt)$/'; 
                            //comprobar si el patron coincide, si coincide guardar valor )
                            if(enviado() && !vacio("nombre")  && preg_match($patron,$_REQUEST["nombre"])){
                                echo $_REQUEST["nombre"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("nombre") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                            //comprobar si el patron coincide, sino mostrar mensaje
                            if (!vacio("nombre") && enviado() && !preg_match($patron,$_REQUEST["nombre"])){
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
                            if (existe('editar') && preg_match($patron,$_REQUEST["nombre"])) {
                            header('Location: ./editarFichero.php?nombre='. $_REQUEST["nombre"]); 
                                exit();
                            }

                            if (existe('leer') && preg_match($patron,$_REQUEST["nombre"])) { 
                                if (file_exists($_REQUEST['nombre'])){
                                    header('Location: ./leerFichero.php?nombre='. $_REQUEST["nombre"]); 
                                    exit();
                                }
                            }                        
                        }
                    ?>
                </form>
                <ul>
                    <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/eligeFichero.php">Codigo Tarea 10</a></li>
                    <li><a class="codigo" href="../../verFichero.php?fichero=Tema3/Tarea10/validar.php">Codigo validar.php</a></li>
                </ul>
            <?
        ?>
    </body>

</html>