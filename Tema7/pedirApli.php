<?

$url = 'https://datos.madrid.es/egob/catalogo/300600-0-comisaria.json?distrito_nombre=VILLAVERDE';

$datos = file_get_contents($url);//devuelve un string 

//print_r($datos);

//Comprobamos que devuelve algo
if ($datos) {
    //pasamos el string json a un array con true
    $array = json_decode($datos,true);
    foreach ($array['@graph'] as $evento) {
        //print_r($evento);
        echo $evento['title'];
        echo "<br>";
        echo $evento['location']['latitude'].",".$evento['location']['longitude'];
        echo "<br><br><br>";
    }
}
echo "<br><br>";
//
