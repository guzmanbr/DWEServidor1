<?
//Sirve para crear las conexiones a la base de datos 

Class FactoryBD {
    public static function ejecuta($sql,$datos){
        try {
            $con = new PDO("mysql:host=".HOST.";dbname=".BBDD,USER,PASS);
            $preparada = $con->prepare($sql);
            $preparada->execute($datos);//los datos llegan en forma de array
        } catch (Exception $e) {
            $preparada = null;
            echo $e;
            
        }finally{
            unset($con);
            return $preparada;
        }
    }
}

