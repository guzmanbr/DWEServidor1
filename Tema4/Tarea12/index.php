<?
    require("./conexionBD.php");
    require("./funcionesBD.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../CSS/estilo.css">
        <title>Peliculas</title>
    </head>
    <body>
        <h1>Peliculas</h1>
        <?php
        ?>
        <form action="./editaXML.php" method="POST">
            <input type="<?
            //Si existe la BD el boton estara oculto
            if (condition) {
                echo "hidden";
            }else{
                //Si ni existe se mostrara
                echo "button";
            }?>" name="crearBD" value="Crear base">

            <p>
                <label for="idAlumno">Alumno: </label>
                <?php
                    echo " ". $notas->children()[intval($_REQUEST['indice'])]->children()[0];
                ?>
            </p>

            
        </form>
    </body>
</html>