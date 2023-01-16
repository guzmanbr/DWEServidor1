<?

require_once('FactoryBD.php');

class UsuarioDao extends FactoryBD implements DAO{

    public static function findAll(){
        $sql = 'select * from usuarios;';
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos); //devuelve un resultset
        while ($obj = $devuelve->fetchObject()) {
            print_r($obj);
        }
    }
    public static function findById($id){

    }
    public static function delete($id){

    }
    public static function insert(){

    }
    public static function update($objeto){

    }
}