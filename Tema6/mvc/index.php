<?

require './config/configuracion.php';

$u1 = new Usuario('Guzman','1','guzman','correo','prefil');
echo $u1->__get();

UsuarioDao::findAll();



?>