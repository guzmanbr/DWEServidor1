<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Tarea5</title>
    </head>
    <body>
   <?php
        echo "<h3>Tarea 5</h3>";

        echo "<h3>1. Escribe un programa que dado un array ordénalo y devuelve otro array sin que haya elementos repetidos. 
            datos = [2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3]; </h3>";
            $datos = [2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3]; 
            $num=-1;
            $datosord=[];   
            print_r($datos);
            echo "<br>";
            
            for ($i=0; $i < count($datos) ; $i++) { 

                if ($datos[$i]!=$num) {
                    $datosord[$i]=$datos[$i];
                }
                $num=$datos[$i];
                echo $datosord[$i];
                echo "  ";
            }

        echo "<br><br>";
        echo "<h3>2. Escribe un programa que dado un array devuelva la posición donde haya el valor 3 y cambie el valor por el número de la posición. 
            datos = [2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3]; </h3>";
            $datos2 = [2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3]; 
            $numero=3; 

            for ($i=0; $i < count($datos2) ; $i++) { 
                if ($datos2[$i]==$numero) {
                    $datos2[$i]=$i;
                }
            }
            print_r($datos2);

        echo "<br><br>";
        echo "<h3>3. Escribe un programa que pida por pantalla el tamaño de una matriz (Ej lado=4). Rellene de la siguiente manera.</h3>";

    ?>
    </body>
</html>