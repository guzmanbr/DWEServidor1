<?
    interface DAO{
        public static function findAll();
        public static function findById($id);
        public static function findByFecha($fecha);
        public static function findOrderByFecha($orden);
        public static function findByFechaOrder($fecha,$orden);
        public static function delete($id);
        public static function insert($objeto);
        public static function update($objeto);
    }
?>