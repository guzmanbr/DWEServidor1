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
            $existeBD = true;
            try {
                $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS);
                mostrarTabla($conexion);
                echo "<br><br>";
                echo "<a href='insertarBD.php?op=ins'>Insertar registro</a>";
                
            } catch (Exception $ex) {
                if ($ex -> getCode() == 1045) {
                    echo "<br>Error al configurar el usuario";
                }
                if ($ex -> getCode() == 2002) {
                    echo "<br>Error al configurar el host";
                }      
                if ($ex->getCode()==1049){
                    $existeBD = false; 
                    echo "No existe la base de datos";
                }      
            }
        ?>

        <input type="<?
        //Si existe la BD el boton estara oculto
        if ($existeBD) {
            echo "hidden";
        }else{
            //Si ni existe se mostrara
            echo "button";
        }?>" name="crearBD" value="Crear base">




    </body>
</html>