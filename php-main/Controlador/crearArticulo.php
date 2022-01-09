<?php 
    include "../Modelo/articulo.php";
    $isNombreCorrect = isset($_POST['nombre']) && $_POST['nombre'] != '';
    $isPrecioCorrect = isset($_POST['precio']) && $_POST['precio'] != '';
    $isDescuentoCorrect = $_POST['descuento'] <= 100;
    $isStockCorrect = isset($_POST['stock']) && $_POST['stock'] != '';
    $isValoracionCorrect = isset($_POST['valoracion']) && ($_POST['valoracion'] >= 0 && $_POST['valoracion'] <= 10);
    if (!$isNombreCorrect) {
        ?> <p>Nombre invalido</p><?php
    }
    if (!$isPrecioCorrect) {
        ?> <p>Precio invalido</p><?php
    }
    if (!$isDescuentoCorrect) {
        ?> <p>Descuento invalido</p><?php
    } elseif(!isset($_POST['descuento']) || $_POST['descuento'] <= 0) {
        $_POST['descuento'] = 0;
    }
    if (!$isStockCorrect) {
        ?> <p>Stock invalido</p><?php
    }
    if (!$isValoracionCorrect) {
        ?> <p>Valoracion invalida</p><?php
    }
    if ($isNombreCorrect && $isPrecioCorrect && $isDescuentoCorrect && $isStockCorrect && $isValoracionCorrect)
    {  
        $modelo= new Articulo();
        $precio = str_replace(',','.',$_POST['precio']);
        $modelo->crearArticulo(
            $_POST['nombre'],
            $precio,
            $_POST['descuento'],
            $_POST['stock'],
            $_POST ['imagen'],
            $_POST['valoracion']
        );
        header('Location: http://localhost/php-main/Controlador/listarArticulos.php');
    }
    
?>