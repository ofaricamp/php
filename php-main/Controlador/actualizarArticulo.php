<?php
include "../Modelo/articulo.php";
$modelo = new Articulo();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $articulo = $modelo->getArticulo($_GET['id']);
    if ($articulo) {
        include "../Vista/actualizarArticuloForm.php";
    } else {
        print 'No existe un articulo con esa ID';
    }
} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
    if (
        !empty($_POST['nombre'])
        && !empty($_POST['precio'])
        && !empty($_POST['stock'])
        && !empty($_POST['valoracion'])
    ) {
        $modelo->actualizarArticulo($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['descuento'], $_POST['stock'], $_POST['imagen'], $_POST['valoracion']);
        header('Location: http://localhost/php-main/Controlador/listarArticulos.php');
    } else {
        print '<p style="color:red;">Uno o varios de los parametros introducidos son incorrectos<br/>';
    }
}
