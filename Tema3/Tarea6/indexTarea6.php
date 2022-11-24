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

            $visitantes =array();
        ?>
        <h1>Tarea 6</h1>
        <hr>
        <h2>Liga</h2>

 
        <table>
            <tr>
                <th>EQUIPOS</th>
                <?php
                    foreach($liga as $local => $valor){
                        echo "<th>$local</th>";
                        array_push($visitantes, $local);
                    }
                ?>
            </tr>
            
            <?php

                $resultados = array();
                $index =0;
                foreach($liga as $local => $valor){
                    echo "<tr><td> $local </td>";    
                    $index =0;
                        foreach($valor as $equipo => $resultado){
                            $cont=0;
                            if($local == $visitantes[$index]){
                                echo "<td></td>";
                            }  
                            echo "<td>";
                            foreach($resultado as $key => $res){
                                if ($cont==0) {
                                    echo "<span id='verde'>".$res."</span><br> ";
                                }else if($cont==1){
                                    echo "<span id='rojo'>".$res."</span> ";
                                }else if($cont==2){
                                    echo "<span id='amarillo'>".$res."</span> ";
                                }else if($cont==3){
                                    echo "<span id='naranja'>".$res."</span> ";
                                }
                                $cont++;
                            }
                            echo "</td>";
                            $index++; 
                        }
                    echo "</tr>";  
                } 
            ?>
        </table>

        <h2>Clasificación</h2>

        <table>
            <tr>
                <th>Equipos</th>
                <th>Puntos</th>
                <th>Goles a favor</th>
                <th>Goles en contra</th>
            </tr>
            <tr>
                <?php
                    $estadisticas = array(
                        "Zamora" => array(
                            "Puntos" => "0", "GolesFavor" => "0", "GolesContra" => "0"),
                        "Salamanca" => array(
                            "Puntos" => "0", "GolesFavor" => "0", "GolesContra" => "0"),
                        "Avila" => array(
                            "Puntos" => "0", "GolesFavor" => "0", "GolesContra" => "0" ),
                        "Valladolid" => array(
                            "Puntos" => "0", "GolesFavor" => "0", "GolesContra" => "0")
                    );

                    foreach($liga as $key => $valor){ 

                        foreach($valor as $equipo => $resultado){


                            $array= explode("-", $resultado["Resultado"]);

                            if($array[0] > $array[1]){
                                $estadisticas[$key]["Puntos"] += 3;

                            }else if($array[0] < $array[1]){
                                $estadisticas[$equipo]["Puntos"] += 3;

                            }else if($array[0] == $array[1]){

                                $estadisticas[$key]["Puntos"] += 1;
                                $estadisticas[$equipo]["Puntos"] += 1;
                            }

                            $estadisticas[$key]["GolesFavor"] += $array[0];
                            $estadisticas[$equipo]["GolesContra"] += $array[0];
                            $estadisticas[$equipo]["GolesFavor"] += $array[1];   
                            $estadisticas[$key]["GolesContra"] += $array[1];
                        }
                    }

                    foreach($estadisticas as $key => $valor){
                        echo "<tr>";
                        echo "<td>$key</td>";
                        foreach($valor as $clave => $value){
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>

    </body>
</html>
