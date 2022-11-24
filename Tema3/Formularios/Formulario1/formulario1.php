<?php
    require("./validaFormulario.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>formulario</title>
    </head>
    <body>
        <h1>Formulario</h1>

        <form action="./formulario1.php" method="post" enctype="multipart/form-data">
            <p>
                <label for="idNombre">Nombre: </label>
                <input type="text" name="nombre" id="idNombre" 
                value="<? 
                    //guarda si se ha pulsado enviar y no estaba vacio, el valor anteriormente escrito
                    if(enviado() && !vacio("nombre")){
                        echo $_REQUEST["nombre"];
                    }
                ?>">

                <?php
                    //comprobar que no este vacio, si lo esta pongo error
                    if (vacio("nombre") && enviado()){
                        ?>
                            <span>Debe rellenar el nombre.</span>
                        <?
                    }
                ?>
            </p>
            <p>
                <label for="idPass">Contraseña: </label>
                <input type="password" name="pass" id="idPass" 
                value="<? 
                    //guarda si se ha pulsado enviar y no estaba vacio, el valor anteriormente escrito
                    if(enviado() && !vacio("pass")){
                        echo $_REQUEST["pass"];
                    }
                
                ?>">
                
                <?php
                    //comprobar que no este vacio, si lo esta pongo error
                    if (vacio("pass") && enviado()){
                        ?>
                            <span>Debe rellenar la contraseña.</span>
                        <?
                    }
                ?>
            </p>
            </br>
            <p>
                <b>Genero</b>
            </br>
                <label for="idMasculino">Masculino</label>
                <input type="radio" name="genero" id="idMasculino" value="masculino"
                    <?
                        //si se ha enviado, existe genero y genero es igual que masculino, entonces checked masculino
                        if(enviado() && existe("genero") && $_REQUEST["genero"] == "masculino"){
                            echo "checked";
                        }
                    ?>
                >
                </br>
                <label for="idFemenino">Femenino</label>
                <input type="radio" name="genero" id="idFemenino" value="femenino"
                    <?
                        //si se ha enviado, existe genero y genero es igual que femenino, entonces checked femenino
                        if(enviado() && existe("genero") && $_REQUEST["genero"] == "femenino"){
                            echo "checked";
                        }
                    ?>
                >
                <?php
                    //Comprobar que hay una opcion marcada, sino muestra error
                    if (!(existe("genero")) && enviado()){
                        ?>
                           <br><span>Debe marcar una opcion.</span>
                        <?
                    }
                ?>
            </p>
            </br>
            <p>
                <b>Aignaturas</b>
                <br>
                <label for="idDWES">Desarrollo Web Servidor</label>
                <input type="checkbox" name="asignaturas[]" id="idDWES" value="DWES">
                <br>
                <label for="idDWEC">Desarrollo Web Cliente</label>
                <input type="checkbox" name="asignaturas[]" id="idDWEC" value="DWEC">
            </p>
            </br>
            <p>
                <b>Curso</b>
                <br>
                <select name="curso" id="idCurso">
                    <option value="0">Selecciona una opcion</option>
                    <option value="1">Primero</option>
                    <option value="2">Segundo</option>
                </select>
            </p>
            </br>
            <p>
                <b>Fichero</b><br>
                <input type="file" name="fichero" id="idFichero">
            </p>
            <br>
            <p>
                <b>Boton enviar</b>
                <br>
                <input type="submit" value="Enviar" name="enviar">
            </p>
        </form>
        
    </body>
</html>