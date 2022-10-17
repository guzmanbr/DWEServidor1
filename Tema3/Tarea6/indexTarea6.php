<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Tarea6</title>
    </head>
    <body>
   <?php
        echo "<h3>Tarea 6</h3>";

        $liga = array(
            "Zamora" =>  array("Salamanca" => array("Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0),
                               "Avila" => array("Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0),
                               "Valladolid" => array("Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 1 )
            ),

            "Salamanca" =>  array("Zamora" => array("Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0 ),
                                  "Avila" => array( "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0),
                                  "Valladolid" => array("Resultado" => "1-2", "Roja" => 1, "Amarilla" => 2, "Penalti" => 1)
            ),

            "Avila" =>  array("Zamora" => array("Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 2 ),
                              "Salamanca" => array("Resultado" => "1-3", "Roja" => 1, "Amarilla" => 3, "Penalti" => 0),
                              "Valladolid" => array("Resultado" => "1-3", "Roja" => 1, "Amarilla" => 0, "Penalti" => 1)
            ),

            "Valladolid" =>  array("Zamora" => array("Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0),
                                   "Salamanca" => array("Resultado" => "3-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0),
                                    "Avila" => array("Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 2)
            )
        );

        $locales =array();

        echo "<br>";

        foreach ($liga as $key => $local) {
            $cont=0;
            echo "<br>";
            foreach ($local as $partidos) {
                foreach ($visitantes as $resultados) {
                    if ($local==$locales[$cont]) {
                        echo "<td></t>";
                    }
                }
            }
            $cont++;
        }


    ?>

    </body>
</html>