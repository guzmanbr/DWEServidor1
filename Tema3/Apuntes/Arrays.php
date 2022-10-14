<?php
echo "<h1> Array </h1>";

//crearlo vacio

$meses = array();
echo var_dump($meses);

//crearlo con datos
$meses = array("Enero", "Febrero", "Marzo");
echo "<pre>";
echo var_dump($meses);
echo "</pre>";

//crearlo con datos
$diaSemana = array(7);
echo "<pre>";
echo var_dump($diaSemana);
echo "</pre>";

//sintaxis corta
$notas = [2.3, 2, 5.5];
echo "<pre>";
echo "<h5> Mostramos Array </h5>";
echo var_dump($notas);
echo "</pre>";
print_r($meses);

//Acceder o modificar un elemento
echo "Posicion 3 => ".$meses[2];
echo "<br><br>";

//Contar elementos array
echo "Contar elementos con count(array)=>".count($meses);
echo "<br><br>";

//Recorrer
echo "Recorrer :";
for ($i=0; $i < count($meses) ; $i++) { 
    echo "<br>";
    echo $meses[$i];
}
echo "<br><br>";


echo "<h2>Asignar valores</h2>";
//Asignar valores nuevos al array
$meses[3]="Abril";
for ($i=0; $i < count($meses) ; $i++) { 
    echo "<br>";
    echo $meses[$i];
}

$meses[5]="Junio";
$meses[6]="Julio";
echo "<pre>";
echo var_dump($meses);
echo "</pre>";
echo count($meses);

echo "<h3>Recorrer array con posicion vacia for</h3>";
for ($i=0; $i < count($meses) ; $i++) { 
    echo $meses[$i];
    echo "<br>";
}

echo "<h3>Recorrer array con posicion vacia foreach</h3>";
foreach ($meses as $key) {
    echo $key." - ";
}

echo "<h5> Añadimos Agosto </h5>";
array_push($meses, "Agosto");//se añade a la siguiente posicion
foreach ($meses as $key) {
    echo $key." - ";
}
echo "<h5> Quitamos Agosto </h5>";//eliminamos ultima posicion
array_pop($meses);
foreach ($meses as $key) {
    echo $key." - ";
}
echo "<h5> Quitamos Enero </h5>";//eliminamos  primera posicion
unset($meses[0]);
foreach ($meses as $key) {
    echo $key." - ";
}


?>