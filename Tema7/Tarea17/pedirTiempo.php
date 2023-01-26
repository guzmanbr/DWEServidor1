<?

$ciudad = "Zamora Castilla y León";

$url = 'http://dataservice.accuweather.com/locations/v1/cities/search?apikey=mFsKtV7pfZJr6tswXcIupqjbbl0K6vgK&q='.$ciudad.'&language=es';

$datos = file_get_contents($url);//devuelve un string 

//print_r($datos);

//Comprobamos que devuelve algo
if ($datos) {
    //pasamos el string json a un array con true
    $array = json_decode($datos,true);
    print_r($array);
    // foreach ($array['@graph'] as $evento) {
    //     //print_r($evento);
    //     echo $evento['title'];
    //     echo "<br>";
    //     echo $evento['location']['latitude'].",".$evento['location']['longitude'];
    //     echo "<br><br><br>";
    // }
}else {
    echo "No hay datos disponibles";
}
