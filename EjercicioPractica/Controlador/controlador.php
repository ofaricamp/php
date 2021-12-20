<?php 
require_once("../Modelo/modelo.php");
$articulo = new Articulo();
$datos = $articulo->getArticulo();
require_once("../Vista/vista.php");
?>