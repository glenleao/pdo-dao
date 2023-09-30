<?php 

require_once("config.php");

$sql = new Sql();

$expositores = $sql->select("SELECT * FROM tbl_expositores");

echo json_encode($expositores);

 ?>