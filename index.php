<?php 

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadById(5);


//carrega uma lista de usuarios
 //$lista = Usuario::getList();

//$lista = new Usuario();
//$lista->login("dois","123456");

 //echo $lista;


$aluno = new Usuario();

$aluno->loadById(10);

$aluno->update("aluno","@lunoss");



echo $aluno;


 ?>