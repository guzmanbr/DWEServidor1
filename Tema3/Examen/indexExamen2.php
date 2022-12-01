<?php
    require("validar.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Examen2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>
        <style>
            *,
            input {
                margin: 10px;
            }
        </style>

        <?php
        $array = array(
            "1DAM" => array("ENDE", "BD", "LM", "SI", "FOL"),
            "2DAM" => array("DI", "SGE", "ACDA", "EIE", "PSP"),
            "2DAW" => array("DWES", "DWEC", "DIW", "EIE")
        );
        ?>
            
        <form action="./indexExamen2.php" method="post" enctype="multipart/form-data">
            <label for="idNombre">Nombre y Apellidos:</label>
            <input type="text" name="nombre" id="idNombre" placeholder="Nombre" value="<? 
                    //Guardo el valor introducido
                    if(enviado() && !vacio("nombre")){
                        echo $_REQUEST["nombre"];
                    }
                ?>">
                <?php
                    //Compruebo que no este vacio.
                    if(enviado() && vacio('nombre')){
                        echo "<p>Lo ha enviado vacio.Debe escribir un nombre</p>";
                    }
                    $patron='/^[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}$/'; 
                    //Compruebo que coincida con el patron si se ha enviado
                    if (enviado() && !vacio('nombre') && !(preg_match($patron,$_REQUEST["nombre"]))) {
                        echo "<p>Debe escribir el nombre y apellido Mmm Mmm Mmm</p>";    
                    }
                ?>
            
            <br> 
            <label for="exp">Expediente</label> 
            <input type="text" name="exp" id="exp" placeholder="Expediente" value="<?php
                if (enviado() && !vacio('exp')){
                    echo $_REQUEST['exp'];
                }
            ?>">
            <?php
                $patron='/^[0-9]{2}[A-Z]{3}\/[0-9]{2}$/';
                //Compruebo que no este vacio.
                if(enviado() && vacio('exp')){
                    echo "<p>Lo ha enviado vacio.Debe escribir un exp</p>";
                }
                //Compruebo que coincida con el patron si se ha enviado
                if(enviado() && !vacio('exp') && !(preg_match($patron,$_REQUEST["exp"]))) {
                    echo "<p> Introduce bien los datos</p>";    
                }
            ?>
            <br> 
            <label for="curso">Curso:</label> 
            <select name="curso" id="curso">
                <option value="1">Selecione una opcion</option>
                <?php
                    foreach ($array as $key => $value) {
                        echo "<option value='".$key."'>".$key."</option>";
                    }  
                ?>
            </select>
            <?

                //deja selecionada la opcion tras enviar
                if(enviado() && existe("curso") && $_REQUEST["curso"] == "2"){
                }
                //Comprobar que hay una opcion seleccionada distinta a la predeterminada, sino muestra error
                if(enviado() && $_REQUEST["curso"]==1){
                    echo "<p>Debe seleccionar un curso</p>"; 
                }
            ?>

            <input type="hidden" name="2curso" value="<?php    
                //Si esta enviado le doy el valor de el select
                if (enviado()) {
                    echo $_REQUEST['curso'];         
                }
            ?>">
            <?php
                //Si he enviado el nombre expediente y curso genero el checkbox
                if (valido()){
                    echo "<span><br>Asignaturas:</span>";
                    foreach ($array as $key => $materias) {
                        if ($key == $_REQUEST['curso']){
                            foreach ($materias as $value) {
                                echo "<label for='".$value."'>".$value."</label>";
                                echo '<input   type="checkbox" id="'.$value.'" name="asignaturas[]"  value="'.$value .'">';
                            }
                        }
                    }
                    if (!existe('asignaturas') && enviado()){
                        echo "<p>Marca una opción</p>";
                    }
                }
            ?>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
</html>