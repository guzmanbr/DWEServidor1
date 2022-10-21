<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recibe</title>
</head>
<body>
    <h1>FormularioRecibido</h1>    
    <?php
    echo "El nombre es: ".$_GET['nombre'];
    echo "<br><br>";
    echo "La contraseña es: ".$_GET['pass'];
    echo "<br><br>";

    if (isset($_REQUEST['genero'])) {
        echo "El genero es: ".$_REQUEST['genero'];
    }else{
        echo "No hay genero seleccionado";
    }
    echo "<br><br>";

    echo "Las asignaturas son: ";

    if (isset($_REQUEST["asignaturas"])) {
        foreach ($_REQUEST["asignaturas"] as $key => $value) {
            echo " aignatura: " .$value;
        }

    }else{
        echo "Ninguna";
    }
    echo "<br>";
    print_r($_REQUEST);

    echo "<br><br>";

    echo "El curso es: ".$_GET['curso'];
    echo "<br><br>";

    print_r($_FILES);
    echo "<br><br>";

    //print_r($_SERVER);
    $ubicacion = "var/www/html";
    $nombreTemporal = basename($_FILES['fichero']['name']);
    $ubicacion =$ubicacion.$nombreTemporal;
    if (move_uploaded_file($_FILES['fichero']['tmp_name'],$ubicacion)) {
        echo"El fichero se ha subido";
    }else{
        echo "Ha fallado";
    }

?>

</body>
</html>
