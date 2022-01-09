<?php
 include "../Modelo/articulo.php"; 
 $juegoDeMesa = new Articulo();
 $informacion = $juegoDeMesa->getArticulos();
 include "../Vista/listadoDeArticulos.php";
?>