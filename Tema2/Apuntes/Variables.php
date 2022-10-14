<?php
    include_once("./fragmentos/header.html"); //  include me muestra parte aunque de error "include_once para evitar repeitr muchas veces si hubiera mas de una"
    //require ("..."); si da error no me muestra nada "require_once para evitar repeitr muchas veces si hubiera mas de una"
?>

<h2>Valor y Referencias</h2>
<?
    $var = 1;
    $var1 = $var;
    echo $var . "<br>";
    echo $var1 . "<br>";
    $var1 = $var1 + 1;
    echo $var ."<br>";
    echo $var1 ."<br><br>";

    $var = 1;
    $var1 = &$var;
    echo $var . "<br>";
    echo $var1 . "<br>";
    $var1 = $var1 + 1;
    echo $var ."<br>";
    echo $var1 ."<br>";
?>

<h2>Ambito de las variables</h2>

<?php
    // usando el mismo nombre en local y global
    echo "<h2>Usando local y global</h2>";
    $global = 1;
    function cambio(){
        $global =2;
        echo "El valor de global dentro de la funcion es " .$global;
    }
    cambio();
    echo " <br>El valor de global es =" . $global;
    echo "<br><br><hr>";

    //vamos a intentar usar la misma variable
    echo "<h2>Misma variable (global)</h2>";
    $global = 1;
    function cambio2(){
        global $global;//utilizo global delante de la variable para poder utilizarla dentro de la funcion
        $local = $global;
        echo "El valor de global dentro de la funcion es " .$local;
    }
    cambio2();
    echo " <br>El valor de global es =" . $global;
    echo "<br><br><hr>";

    //crear variable de fnciones
    echo "<h2>Crear variable static funciones</h2>";
    function crearCoches(){
        static $numeroVecesCreada =0;//static hace que solo se cree 1 vez la variable, la siguiente vez que se use la funcion no creara la variable de nuevo y no la inicializara a 0 otra vez.
        $numeroVecesCreada = $numeroVecesCreada +1;
        echo"<br> Ha sido creado un coche";
        echo "<br> Llevo creados  ". $numeroVecesCreada . " coches";
    }

    crearCoches();
    crearCoches();
    echo "<br><br><hr>";

    //Constantes
    echo "<h2>Constantes</h2>";
    include("./constantes.php");

    echo "Al usuario ".USER." le gusta el numero ".PI;// SE ESCRIBE LA VARIABLE CONSTANTE PERO SIN $
    // USER = "PEPE"; no se puede modificar valor de constante
    echo "<hr>";
    //Variables especiale
    echo"<h1>Variables especiales</h1>";
    echo "<pre>";//para que la informacion se vea legible
    var_dump($_SERVER);
    var_dump($_GET);
    var_dump($_POST);
    var_dump($_REQUEST);
    var_dump($_COOKIE);
    var_dump(getenv());
    var_dump($_FILES);
    session_start();//iniciar sesion
    var_dump($_SESSION);
    echo "</pre>";
    echo "<hr>";
    //Fechas
    echo"<h1>Fechas</h1>";
    



 
?>