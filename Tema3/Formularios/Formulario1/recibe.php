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
    echo "El nombre es: ".$_REQUEST['nombre'];
    echo "<br><br>";
    echo "La contraseña es: ".$_REQUEST['pass'];
    echo "<br><br>";

    if (isset($_REQUEST['genero'])) {
        echo "El genero es: ".$_REQUEST['genero'];
    }else{
        echo "No hay genero seleccionado";
    }
    echo "<br><br>";

    echo "Las asignaturas son: ";

    if (isset($_REQUEST['asignaturas'])) {

        foreach ($_REQUEST["asignaturas"] as $key => $value) {
            echo "<br> aignatura: " .$value;
        }

    }else{
        echo "<br>Ninguna";
    }
    echo "<br><br>";
    print_r($_REQUEST);

    echo "<br><br>";

    echo "El curso es: ".$_REQUEST['curso'];
    echo "<br><br>";

    print_r($_FILES);
    echo "<br><br>";

    //print_r($_SERVER);

    $ubicacion = "/var/www/html/DWEServidor/Tema3/Formularios/Formulario1/";
    $nombreTemporal = basename($_FILES['fichero']['name']);
    $ubicacion =$ubicacion.$nombreTemporal;

    if (move_uploaded_file($_FILES['fichero']['tmp_name'],$ubicacion)) {
        echo "<br> El fichero se ha subido";
    }else{
        echo "<br> Ha fallado";
    }
?>

</body>
</html>
