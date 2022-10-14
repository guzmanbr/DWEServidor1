<?php
//Arrays asociativos
echo "<h2>Asociativos</h2>";

$notas = array("Cristan"=>7, "Lucia"=>10,"Itziar"=>10,"Manuel"=>10,"Javier"=>9.75);
print_r($notas);

echo "<br> Nota: ". $notas["Lucia"];

echo "<h5> Foreach clave valor </h5>";
foreach ($notas as $clave => $valor) {
    echo "<br> La Nota de ".$clave . " es ".$valor;
}
echo "<h5> Foreach  valor </h5>";
//si no pongo clave coge siempre el va
foreach ($notas as $valor) {
    echo "<br> La Notas son ".$valor;
}
echo "<h2>Multidimensionales</h2>";
//Mulidimensionales
$multi = array(array(),array());
echo var_dump($multi);
echo "<br><br>";
$asignaturas = array(
    "Dam" => array("Prog"=>"Programacion","Leng"=>"Lenguaje"),
    "Daw2" => array("DES"=>"Servidor","DEC"=>"Cliente")
);
print_r($asignaturas);
echo "<br><br>";
echo "<h5> Recorremos Array foreach</h5>";
foreach ($asignaturas as $key => $value) {
    echo "<br> El curso de " .$key. " tiene las siguientes asignaturas";
    foreach ($value as $siglas => $nombre) {
        echo "<br>" .$siglas .":".$nombre;
    }   
    echo "<br>"; 
}

echo "<h2>Funciones</h2>";
//current
echo "Current ". current($notas);
echo "<br>";
echo "Ultimo ". end($notas);
echo "<br>";
reset($notas);
echo "Current ". current($notas);
echo "<br>";
echo "Clave ". key($notas);
echo "<br>";

end($notas);
reset($notas);


?>