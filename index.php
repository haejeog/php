<?php 

require_once("config.php");
//Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);

//carrega uma lista de usuarios
//$lista= Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search();
//echo json_encode($search);
 
 //Carrega usuário usando login e senha
$usuario = new Usuario();
$usuario->login("root","123");

echo $usuario;

 ?>