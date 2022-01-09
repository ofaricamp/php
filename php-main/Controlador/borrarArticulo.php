<?php
include "../Modelo/articulo.php";
$modelo = new Articulo();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $articulo = $modelo->getArticulo($_GET['id']);
    if ($articulo) {
        include "../Vista/confirmacionBorrarArticulo.php";
    } else {
        print 'No existe un articulo con esa ID';
    }
} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $modelo->borrarArticulo($_POST['id']);
    header('Location: http://localhost/php-main/Controlador/listarArticulos.php');
}
