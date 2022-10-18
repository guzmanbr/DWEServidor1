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

        <h1>Tarea 6</h1>
        <hr>
        <h2>Liga</h2>
        <hr>

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
                    echo "<tr sty><td> $local </td>";    
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



            


    </body>
</html>