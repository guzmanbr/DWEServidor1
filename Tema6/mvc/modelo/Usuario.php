<?

class Usuario{

    private $usuario;
    private $clave;
    private $nombre;
    private $correo;
    private $perfil;

    public function __construct($usuario,$clave,$nombre,$correo,$perfil){
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->perfil = $perfil;
    }

    public function __get($_get)
    {
        if (property_exists(__CLASS__,$_get)) {
            return $this->$_get;
        }else{
            return null;
        }
    }

    //Al crearlo asi devuelve el get de todos los atriubutos
    public function __set($clave, $valor)
    {
        if (property_exists(__CLASS__,$clave)) {
            $this->$clave=$valor;
        }
    }
    public function __toString()
    {
        return $this->id. ": Nombre: ".$this->nombre. ".    Edad: ".$this->edad. ".    Email: ".$this->email."<br>";        
    }

}