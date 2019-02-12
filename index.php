<?php

require_once("config.php");

$sql = new Sql();
// $usuarios = $sql->Select("SELECT * FROM tb_usuarios");
// var_dump($usuarios);


// $usuario = new Usuario();
// $usuario->loadById(1);

// echo $usuario;


// $lista = Usuario::getList();
// echo $lista = json_encode($lista);

// $buscar = Usuario::search("An");
// $buscar = json_encode($buscar);
// echo $buscar;

$carregarUsuario = new Usuario();
$carregarUsuario->login("Leticia",123);

echo $carregarUsuario;


?>