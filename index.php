<?php 

require_once "libs/EasyPDO.php";

use EasyPDO\EasyPDO;

$conex = new EasyPDO();

$dados = $conex->select("SELECT * FROM usuarios");

?>