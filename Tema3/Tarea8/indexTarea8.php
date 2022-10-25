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
        <title>Tarea8</title>
    </head>
    <body>
        <h1>Tarea 8</h1>
        <h2>Fromulario de registro</h2>
        <form action="./indexTarea8.php" method="post" enctype="multipart/form-data">
            <p>
                <label for="idNombre">Alfabetico: </label>
                <input type="text" name="nombre" id="idNombre" placeholder="Nombre" value="<? 
                    if(enviado() && !vacio("nombre")){
                        echo $_REQUEST["nombre"];
                    }
                ?>">
                <?php
                    //comprobar que no este vacio
                    if (vacio("nombre") && enviado()){
                        ?><span><--Debe rellenar este campo.</span><?
                    }
                    if(!vacio("nombre2") && !alfabetico("nombre")){
                        ?><span><--Tiene que ser alfabetico</span><?
                    }

                ?>
            </p>
            <p>
                <label for="idNombre2">Alfabetico Opcional: </label>
                <input type="text" name="nombre2" id="idNombre2" placeholder="Nombre" value="<? 
                    if(enviado() && !vacio("nombre2")){
                        echo $_REQUEST["nombre2"];
                    }
                ?>">
            </p>
            <p>
                <label for="idApe1">Alfanumérico: </label>
                <input type="text" name="apellido1" id="idApe1" placeholder="Apellido" value="<? 
                    //guarda si se ha pulsado enviar y no estaba vacio, el valor anteriormente escrito
                    if(enviado() && !vacio("apellido1")){
                        echo $_REQUEST["apellido1"];
                    }
                ?>">
                <?php
                    //comprobar que no este vacio
                    if (vacio("apellido1") && enviado()){
                        ?><span><--Debe rellenar este campo.</span><?
                    }
                ?>
                
            </p>
            <p>
                <label for="idApe2">Alfanumérico Opcional: </label>
                <input type="text" name="apellido2" id="idApe2" placeholder="Apellido" value="<? 
                    if(enviado() && !vacio("apellido2")){
                        echo $_REQUEST["apellido2"];
                    }
                ?>">
            </p>
            <p>
                <label for="idFecha">Fecha: </label>
                <input type="date" name="fecha" id="idFecha" value="<? 
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
                <label for="idFecha2">Fecha Opcional: </label>
                <input type="date" name="fecha2" id="idFecha2" value="<? 
                    if(enviado() && !vacio("fecha2")){
                        echo $_REQUEST["fecha2"];
                    }
                ?>">
            </p>
            <p>
                <p>Radio Obligatorio</p>
                <label for="id1">Opcion1</label>
                <input type="radio" name="opcion" id="id1" value="opcion1"               
                    <?
                        if(enviado() && existe("opcion") && $_REQUEST["opcion"] == "opcion1"){
                            echo "checked";
                        }
                    ?>>

                <label for="id2">Opcion2</label>
                <input type="radio" name="opcion" id="id2" value="opcion2"               
                    <?
                        if(enviado() && existe("opcion") && $_REQUEST["opcion"] == "opcion2"){
                            echo "checked";
                        }
                    ?>>
                <label for="id3">Opcion3</label>
                <input type="radio" name="opcion" id="id3" value="opcion3"
                    <?
                        if(enviado() && existe("opcion") && $_REQUEST["opcion"] == "opcion3"){
                            echo "checked";
                        }
                    ?>>
                <?php
                    //Comprobar que hay una opcion marcada, sino muestra error
                    if (!(existe("opcion")) && enviado()){
                        ?><span><--Debe marcar una opcion.</span><?
                    }
                ?>
            </p>
            <p>
                <p>Elige una opcion</p>
                <select name="opcionSelect" id="idSelect">
                    <option value="1">Seleccione</option>
                    <option value="2">Opcion1</option>
                    <option value="3">Opcion2</option>
                    <option value="4">Opcion3</option>
                </select>
            </p>
            <p>
                <p>Elige al menos 1 y maximo 3:</p>     
                <input type="checkbox" name="checks[]" id="idcheck1" value="check1"
                    <?
                        if(enviado() && existe("checks") && in_array("check1",  $_REQUEST["checks"])){
                            echo "checked";
                        }
                    ?>
                >
                <label for="idcheck1">Check1</label>
                <input type="checkbox" name="checks[]" id="idcheck2" value="check2"
                    <?
                        if(enviado() && existe("checks") && in_array("check2",  $_REQUEST["checks"])){
                            echo "checked";
                        }
                    ?>
                >
                <label for="idcheck1">Check2</label>
                <input type="checkbox" name="checks[]" id="idcheck3" value="check3"
                    <?
                        if(enviado() && existe("checks") && in_array("check3",  $_REQUEST["checks"])){
                            echo "checked";
                        }
                    ?>
                >
                <label for="idcheck1">Check3</label>
                <input type="checkbox" name="checks[]" id="idcheck4" value="check4"
                    <?
                        if(enviado() && existe("checks") && in_array("check4",  $_REQUEST["checks"])){
                            echo "checked";
                        }
                    ?>
                >
                <label for="idcheck1">Check4</label>
                <input type="checkbox" name="checks[]" id="idcheck5" value="check5"
                    <?
                        if(enviado() && existe("checks") && in_array("check5",  $_REQUEST["checks"])){
                            echo "checked";
                        }
                    ?>
                >
                <label for="idcheck1">Check5</label>
                <input type="checkbox" name="checks[]" id="idcheck6" value="check6"
                    <?
                        if(enviado() && existe("checks") && in_array("check6",  $_REQUEST["checks"])){
                            echo "checked";
                        }
                    ?>
                >
                <label for="idcheck6">Check6</label>

                <?php
                    if (vacio("checks") && enviado()){
                        ?><span><--Debe seleccionar al menos 1 opcion.</span><?
                    }
                    if (existe("checks")) {
                        if (!controlChecks("checks")) {
                            ?><span><--Debe seleccionar de 1 a 3 opciones.</span><?
                        }
                    }
                ?>
            </p>
            <p>
                <label for="idTel">Nº Telefono: </label>
                <input type="tel" name="telefono" id="idTel" placeholder="654987321"value="<? 
                    if(enviado() && !vacio("telefono")){
                        echo $_REQUEST["telefono"];
                    }
                ?>">
                <?php
                    if (vacio("telefono") && enviado()){
                        ?><span><--Debe rellenar este campo.</span><?
                    }
                ?>
            </p>
            <p>
                <label for="idMail">Email: </label>
                <input type="text" name="mail" id="idMail" placeholder="admin" value="<? 
                    //guarda si se ha pulsado enviar y no estaba vacio, el valor anteriormente escrito
                    if(enviado() && !vacio("mail")){
                        echo $_REQUEST["mail"];
                    }
                ?>">
                <?php
                    //comprobar que no este vacio
                    if (vacio("mail") && enviado()){
                        ?><span><--Debe rellenar este campo.</span><?
                    }
                ?>
            </p>
            <p>
                <label for="idPass">Contraseña: </label>
                <input type="password" name="pass" id="idPass" value="<? 
                    //guarda si se ha pulsado enviar y no estaba vacio, el valor anteriormente escrito
                    if(enviado() && !vacio("pass")){
                        echo $_REQUEST["pass"];
                    }
                
                ?>">
                <?php
                    //comprobar que no este vacio
                    if (vacio("pass") && enviado()){
                        ?><span><--Debe rellenar este campo.</span><?
                    }
                ?>
            </p>
            </br>
            <p>
                <label for="idDoc">Subir documento </label>
                <input type="file" name="documento" id="idDoc">
                <?php
                    //comprobar que no este vacio
                    if (vacio("documento") && enviado()){
                        ?><span><--Debe rellenar este campo.</span><?
                    }
                ?>
            </p>
            <br>
            <p>
                <input type="submit" value="Enviar" name="enviar">
            </p>
        </form>
    </body>

</html>