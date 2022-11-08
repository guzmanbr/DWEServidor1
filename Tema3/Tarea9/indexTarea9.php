<?php
    require("validar.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="../webrootTema3/css/estilos.css">
        <title>Tarea9</title>
    </head>
    <body>
        <h1>Tarea 9</h1>
        
        
        <?php
            ?>
                <h2>Fromulario de registro</h2>
                <form action="./indexTarea9.php" method="post" enctype="multipart/form-data">
                    <p>
                        <label for="idNombre">Nombre: </label>
                        <input type="text" name="nombre" id="idNombre" placeholder="Nombre" value="<? 
                            if(enviado() && !vacio("nombre") && validaNombre()){
                                echo $_REQUEST["nombre"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("nombre") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idApellidos">Apellidos: </label>
                        <input type="text" name="apellidos" id="idApellidos" placeholder="Apellidos" value="<? 
                            if(enviado() && !vacio("apellidos")){
                                echo $_REQUEST["apellidos"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("apellidos") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idContraseña">Contraseña: </label>
                        <input type="text" name="contraseña" id="idContraseña" placeholder="Contraseña" value="<? 
                            if(enviado() && !vacio("contraseña")){
                                echo $_REQUEST["contraseña"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("contraseña") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idContraseña2">Repetir Contraseña: </label>
                        <input type="text" name="contraseña2" id="idContraseña2" placeholder="Contraseña" value="<? 
                            if(enviado() && !vacio("contraseña2")){
                                echo $_REQUEST["contraseña2"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("contraseña2") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idFecha">Fecha: </label>
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
                        <label for="idDni">DNI: </label>
                        <input type="text" name="dni" id="idDni" placeholder="DNI" value="<? 
                            if(enviado() && !vacio("dni")){
                                echo $_REQUEST["dni"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("dni") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idEmail">Email: </label>
                        <input type="text" name="email" id="idEmail" placeholder="Email" value="<? 
                            if(enviado() && !vacio("email")){
                                echo $_REQUEST["email"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("email") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>


                    <p>
                        <input type="submit" value="Enviar" name="enviar">
                    </p>
                </form>
            <?
        ?>



    </body>

</html>