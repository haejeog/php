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
//$usuario = new Usuario();
//$usuario->login("root","123");
//echo $usuario;

//Criando novo usuário
//$aluno = new Usuario("Alun#","@lun@");
//$aluno->insert();
//echo $aluno;

//alterar usuario
//$usuario = new Usuario();
//$usuario-> loadById(5);
//$usuario-> update("Professor","!@#$%%!");
//echo $usuario;

//Deletar usuário
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;
 ?>