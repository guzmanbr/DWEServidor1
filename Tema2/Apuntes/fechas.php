
<?php
    echo "<h1>Fechas</h1>";
    echo time();//caldulo de los segunos desde 1970
    echo "<p>zona</p>";
    echo date_default_timezone_get();
    echo "<br>";
    date_default_timezone_set('Europe/Madrid');
    echo date_default_timezone_get();
    echo "<br>";

    echo "<p>Fecha de hoy</p>";
    echo date("d  M Y h:i:s O" ); // M mayuscula para que salga mes en letras o m para que sea numero, h:i:s ,O para meridiano,
    echo "<p>Fecha en texto a int</p>";
    echo strtotime("now");
    echo "<br>";
    echo strtotime("2022-10-04");// fecha en segundos
    echo "<br>";
    echo date("d M Y" , strtotime("2022-10-04"));//PARA CAMBIAR UNA FECHA AL FORMATO QUE QUERAMOS //time() si quiero cambiar la actual
    echo "<br>";
    echo mktime(0,0,0,10,4,2022);
    echo "<br>";

    //restar fechas

    $primera= mktime(0,0,0,10,11,1994);
    $segunda= strtotime("2022-10-04");
    $dif = $segunda - $primera;
    echo "Diferencia : " . $dif;
    echo "<br>";
    $anos = $dif / (60*60*24*365);
    echo "Los años que han pasado son : " . $anos;   
    echo"<br>";
    //$date = new DateTime();
    $fecha1 = new DateTime("1994-10-11");
    $fecha2 = new DateTime();//actual
    
    $intervalo= $fecha2->diff($fecha1);
    echo "Años:" .$intervalo->y . "  Meses:" .$intervalo->m ."  Dias:". $intervalo->d;

?>