<?php 

require_once("config.php");

$root = new Prestadores();

$root->loadById(2);

echo $root;


 ?>