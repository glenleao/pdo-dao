<?php 

require_once("config.php");

// Carrega um usuario
// $root = new Expositores();
// $root->loadById(2);
// echo $root;

// Carrega uma lista de Expositores
$lista = Expositores::getList();
echo json_encode($lista);


 ?>