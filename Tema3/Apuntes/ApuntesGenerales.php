<h2>Nave espacial</h2>

<?php
    $a = 2;
    $b = 3;

    var_dump($a<=>$b);
    var_dump($b<=>$a);

    $a = 5;
    $b = 2;

    echo "<br> Logicos";
    var_dump($a & $b);
    var_dump($a << $b);
    echo "<br> Toma de decisiones";
    //Switch
    switch ($a) {
        case 1:
            echo "Es 1";
            break;
        case 2:
            echo "Es 2";
            break;
            
        default:
            echo "Otra";
    }
    echo "<br> Bucles";
    // ejemplo break 
    //cuando llegue al 5 se sale
    for ($i=0; $i < 10; $i++) { 
        echo "<br>".$i;
        if ($i==5) {
            break;
        }
    }

    //Ejemplo continue
    //No imprime el 5
    for ($i=0; $i < 10; $i++) { 

        if ($i==5) {
            continue;
        }
        echo "<br>".$i;
    }

    //while mientras hacer
    $a = 1;
    while ($a < 5) {
        echo "<br>".$a;
        $a++;
    }

    // while hacer mientas
    do {
        echo "<br>".$a;
        $a++;
    } while ($a < 5);
    echo"<br><br><br>";
 




?>