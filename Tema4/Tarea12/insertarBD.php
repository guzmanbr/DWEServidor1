<?
    require("./validar.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insertar</title>
    </head>
    <body>
        <h1>Insertar</h1>
        <form action="./insertarBD.php" method="post" enctype="multipart/form-data">
                    <p>
                        <label for="idTitulo">Titulo pelicula: </label>
                        <input type="text" name="titulo" id="idTitulo" placeholder="Titulo" value="<? 
                            if(enviado() && !vacio("titulo")){
                                echo $_REQUEST["titulo"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("titulo") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>

                    <p>
                        <label for="idFecha">Fecha estreno: </label>
                        <input type="text" name="fecha" id="idFecha" placeholder="Fecha" value="<? 
                            if(enviado() && !vacio("fecha")){
                                echo $_REQUEST["fecha"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("fecha") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>

                    <p>
                        <label for="idPrecio">Precio pelicula: </label>
                        <input type="text" name="precio" id="idPrecio" placeholder="Precio" value="<? 
                            if(enviado() && !vacio("precio")){
                                echo $_REQUEST["precio"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("precio") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>
                        <?php                    
                            if (enviado()) {
                                if (existe('insertar') && validarTodo()) {
                                    header('Location: ./index.php'); 
                                    exit();
                                }
                                if (existe('volver')) { 
                                    header('Location: ./index.php'); 
                                    exit();
                                }                        
                            }
                        ?>
                    </p>                
                    <p>
                        <input type="submit" value="Insertar" name="insertar">
                        <input type="submit" value="Volver" name="volver">
                    </p>
                </form>
    </body>
</html>
