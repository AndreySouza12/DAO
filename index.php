<?php

require_once("config.php");

$sql = new Sql();
// $usuarios = $sql->Select("SELECT * FROM tb_usuarios");
// var_dump($usuarios);


$usuario = new Usuario();
$usuario->loadById(1);

echo $usuario;


?>