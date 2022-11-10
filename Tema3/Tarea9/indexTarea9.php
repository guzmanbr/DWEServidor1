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
                <div>
                <form action="./indexTarea9.php" method="post" enctype="multipart/form-data">
                    <p>
                        <label for="idNombre">Nombre: </label>
                        <input type="text" name="nombre" id="idNombre" placeholder="Nombre" value="<? 

                            $patron='/^[a-z A-Z]{3,}$/'; 
                            //comprobar si el patron coincide, si coincide guardar valor
                            if(enviado() && !vacio("nombre") && preg_match($patron,$_REQUEST["nombre"])){
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
                                ?><span><--Debe tener un minimo de 3 letras.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idApellidos">Apellidos: </label>
                        <input type="text" name="apellidos" id="idApellidos" placeholder="Apellidos" value="<? 

                            $patron='/^[a-z A-Z]{3,}\s[a-z A-Z]{3,}$/'; 
                            if(enviado() && !vacio("apellidos") && preg_match($patron,$_REQUEST["apellidos"])){
                                echo $_REQUEST["apellidos"];
                            }
                        ?>">
                        <?php
                            if (vacio("apellidos") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                            if (!vacio("apellidos") && enviado() && !preg_match($patron,$_REQUEST["apellidos"])){
                                ?><span><--Debe llevar cada apellido minimo 3 letras y un espacio entre ellos.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idFecha">Fecha: </label>
                        <input type="text" name="fecha" id="idFecha" placeholder="Dia-Mes-Año" value="<? 
                            $patron='/^\d{1,2}\-\d{1,2}\-\d{4}$/';
                            if(enviado() && !vacio("fecha") && preg_match($patron,$_REQUEST["fecha"])){
                                echo $_REQUEST["fecha"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("fecha") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                            if (!vacio("fecha") && enviado() && !preg_match($patron,$_REQUEST["fecha"])){
                                ?><span><--Debe rellenar con el formato adecuado.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idDni">DNI: </label>
                        <input type="text" name="dni" id="idDni" placeholder="DNI" value="<? 
                            $patron='/^\d{8}[A-Z]{1}/';
                            if(enviado() && !vacio("dni") && preg_match($patron,$_REQUEST["dni"])){
                                echo $_REQUEST["dni"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("dni") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                            
                            if (!vacio("dni") && enviado() && !preg_match($patron,$_REQUEST["dni"])  &&  ){
                                ?><span><--Debe utilizar el formatoa decuado.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idEmail">Email: </label>
                        <input type="text" name="email" id="idEmail" placeholder="email1@email.com" value="<? 
                            $patron='/^\w{1,}\@\D{1,}\.\D{2,}$/';
                            if(enviado() && !vacio("email") && preg_match($patron,$_REQUEST["email"])){
                                echo $_REQUEST["email"];
                            }
                        ?>">
                        <?php
                            if (vacio("email") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                            if (!vacio("email") && enviado() && !preg_match($patron,$_REQUEST["email"])){
                                ?><span><--Debe rellenar con el formato adecuado.</span><?
                            }
                        ?>
                    </p>


                    <p>
                        <input type="submit" value="Enviar" name="enviar">
                    </p>
                </form>
                </div>
                <ul>
                    <li><a href="../../verFichero.php?fichero=Tema3/Tarea9/indexTarea9.php">Codigo IndexTarea 9</a></li>
                    <li><a href="../../verFichero.php?fichero=Tema3/Tarea9/validar.php">Codigo validar.php </a></li>
                </ul>
            <?
        ?>
    </body>

</html>