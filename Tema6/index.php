<?

require_once('Persona.php');
require_once('Persona2.php');

//-----Creamos Persona1
$p1 = new Persona('maria',21,'guzman@gmail.com');
//-------Set
$p1->setNombre('pepe');
var_dump($p1);
echo "<br><br>";
//------ToString
echo $p1;//metodo magico, llama al string al escribir echo delante
echo "<br><br>";

//Clonar
$p2 = clone $p1;
//$p1->setEdad(22);
echo $p1;
echo $p2;
echo "<br><br>";

//Diferenciar mismos valores  a mismo objeto
if ($p1==$p2) {
    echo "Tiene los mismos valores";
}
echo "<br>";
if ($p1===$p2) {
    echo "Es el mismo objeto";
}
echo "<br><br>";

//***Creamos Persona2 con get y set magico***
echo"Persona 2 <br>";
$p3 = new Persona2('maria',21,'guzman@gmail.com');

//Get
echo $p3->edad;
echo "<br>";
echo $p3->__get('nombre');
echo "<br>";
echo $p3->__get('email');
echo "<br>";

//Set
$p3->edad=25;
echo "<br>";
echo $p3->edad;
echo "<br>";

echo Persona2::$id;