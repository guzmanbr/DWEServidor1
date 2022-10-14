//piramide
<?php

$variable = (int)$_GET["filas"]; 

for ($i=1; $i < $variable; $i++) {

    for ($blanco=1; $blanco <= $variable ; $j++) { 
        echo "&";
    }
    

    echo "<br>";
}

?>

