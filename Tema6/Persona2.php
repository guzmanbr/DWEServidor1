<?

class Persona2{
    private $nombre;
    private $edad;
    private $email;
    public static $id = 0;

    public function __construct($nombre,$edad,$email)
    {
        self::$id = self::$id + 1;
        $this->edad = $edad;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function __destruct()
    {
        //echo "Se destruye".$this;
    }

    //Al crearlo asi devuelve el get de todos los atriubutos
    public function __get($get)
    {
        return $this->$get;
    }

    //Al crearlo asi devuelve el get de todos los atriubutos
    public function __set($clave, $valor)
    {
        return $this->$clave = $valor;
    }
    
    public function __toString()
    {
        return $this->id. ": Nombre: ".$this->nombre. ".    Edad: ".$this->edad. ".    Email: ".$this->email."<br>";        
    }


    public function __clone()
    {
        //$this->id = $this->id+1;//Al clonarlo se suma 1 al id
    }
}

?>