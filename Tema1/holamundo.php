<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>
<body>
    <?
    echo"<p>Hola Mundo</p>";
    print"<p>Hola Mundo</p>";
    ?>
    <p><?echo"Hola Mundo"?></p>
    
    <?echo"<p>Hola Mundo <br/>Hola clase</p>";?>

    <h1>Tipos de datos</h1>
    <? 
        var_dump("Guzman");
        echo"<br>";
        var_dump(3);
        echo"<br>";
        var_dump(3.17);
        echo"<br>";
    ?>

    <?
        $mivariable = 3;
        var_dump($mivariable);
        $mivariable = "maria";
        echo"<br>";
        var_dump($mivariable);
        $mifloat = 3.23;
        echo"<br>";
        var_dump($mifloat);
        $nuevoint = (int)$mifloat;
        echo"<br>";
        var_dump($nuevoint);
        echo"<br>";
        $booleano = true;
        var_dump($booleano);
        echo"<br>";
        $vacia = null;
        $esnula =is_null($vacia);
        var_dump($esnula);


    ?>

    <h1>Comparar tipo</h1>
    <?
        echo "La variable mi variable es tipo ". gettype($mivariable);
        echo "La variable de la url hijos es ". $_GET["hijos"] ." ". is_numeric($_GET["hijos"]). " (devuelve 1 porque es true)"; 
        echo "<br>";

    ?>
    <!--http://10.1.20.102/tema1/holamundo.php?usuario=maria&pass=contrase%C3%B1a&hijos=5-->
    <h1>Get</h1>
    <?
        var_dump($_GET);

    ?>

    <h1>Variable de variable</h1>
    <?
        $viernes="fiesta";
        $$viernes="copas";
        echo $viernes;
        echo "<br>";
        echo $$viernes. " significa lo mismo que " . $fiesta;
        echo "<br>";
        

    ?>

        

  
    
</body>
</html>