<?php
    // Abrir un fichero SI EXISTE
    // Si se va a abrir para lectura con r, comprobar que exista antes. 
    // Leer fichero

    ?>
    <h2>Leer fichero</h2>
    <?php
    if (!file_exists('miarchivo.txt')) {
        echo "No existe";
            
    } else {
        echo "Existe <br>";
        // Abrir fichero
        if (!$fp = fopen('miarchivo.txt','r')) {
            echo "Ha habido un problema al abrir el fichero <br>";
       
        } else {
            // Leer el fichero entero
            $leido = fread($fp, filesize('miarchivo.txt')); //PHP no interpreta el \n (salto de línea), por lo que mostrará el texto en una sola línea
            echo $leido;
            fclose($fp);
        }
    }
?>
<h2>Leer línea por línea</h2>
<?php
    // Leer fichero
    if (!file_exists('miarchivo.txt')) {
        echo "<br>No existe";
            
    } else {
        echo "Existe";

        // Abrir fichero
        if (!$fp = fopen('miarchivo.txt','r')) {
            echo "<br> Ha habido un problema al abrir el fichero";
       
        } else {  
            // Mientras pueda leer una línea en un fichero, leerlo línea por línea
            while ($lea = fgets($fp, filesize('miarchivo.txt'))) {
                echo "<br>";
                echo $lea;
            }
            fclose($fp);
        }
    }

    ?>
    <h2>Escribir </h2>
    <?php
        // Escribir
        // Abrir el fichero para escritura (w)
        if ($fp = fopen('mifichero.txt','w')) {
            $escribir = '08/11/22';
            fwrite($fp, $escribir, strlen($escribir));
            fclose($fp);

        } else {
            echo "<br>";
            echo "<br>Ha habido un problema al abrir el fichero";
        }
        // Leo
        if (!file_exists('mifichero.txt')) {
            echo "No existe";
                
        } else {
            echo "Existe";
            // Abrir fichero
            if (!$fp = fopen('mifichero.txt','r')) {
                echo "Ha habido un problema al abrir el fichero <br>";
           
            } else {
                // Leer el fichero entero
                $leido = fread($fp, filesize('mifichero.txt'));
                echo "<br>" .$leido;
                fclose($fp);
            }
        }
    ?>
    <h2>Escribir al final</h2>
    <?php
        if ($fp = fopen('mifichero.txt','a')) {
            $escribir = ' Escribir al final';
            fwrite($fp, $escribir, strlen($escribir));
            fclose($fp);
        } else {
            echo "Ha habido un problema al abrir el fichero";
        }

        // Cambiar la fecha de 22 a 2022: replace --> str_replace
        // r+
        if (!file_exists('mifichero.txt')) {
            echo "<br>No existe";
        } else {
            echo "<br>Existe";
            // Abrir fichero
            // si el fichero no se ha podido abrir para leer, da fallo
            // $fp es la conexion (tuberia) para conectar con el fichero
            if (!$fp = fopen('mifichero.txt','r+')) {
                echo "<br> Ha habido un problema al abrir el fichero";
        
            } else {
                // Leemos
                $leido = fread($fp, filesize('mifichero.txt'));
                $reemplazado = str_replace('/22', '/2022', $leido);
                fseek($fp,0);
                fwrite($fp, $reemplazado, strlen($reemplazado));
                fclose($fp);
                echo "<br>".$leido;
            }
        }


?>