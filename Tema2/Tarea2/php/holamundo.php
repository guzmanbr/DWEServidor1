<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hola mundo idiomas</title>
    </head>

    <body>
        <h1>Hola mundo</h1>
        <?
            $es="holamundo";
            $in="Hellow World";
            $fr="Salut monde";
            $it="Ciao mondo";
            $idioma=$_GET['pais'];
            echo "${$idioma}";
        ?>
    </body>

</html>