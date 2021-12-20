<?php 
    if ((isset($_POST['nombre']) && ($_POST['nombre'] != ''))
    && (isset($_POST['precio']) && ($_POST['precio'] != ''))
    && (isset($_POST['descuento']) && ($_POST['descuento'] != ''))
    && (isset($_POST['Unidades']) && ($_POST['Unidades'] != ''))
    && (isset($_POST['stock']) && ($_POST['stock'] != ''))
    && (isset($_POST['cantidadDeDescuento']) && ($_POST['cantidadDeDescuento'] != ''))
    && (isset($_POST['imagen']) && ($_POST['imagen'] != ''))) {
        
        include "Modelo/modelo.php";
        $nuevo = new Articulo();
        $posteo = $nuevo->setArticulo(
            $_POST['nombre'],
            $_POST['precio'],
            $_POST['descuento'],
            $_POST['Unidades'],
            $_POST['stock'],
            $_POST ['cantidadDeDescuento'],
            $_POST ['imagen']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo De Navidad</title>
    <form action="#" method="$_POST">
        Nombre: <input type="text" name="nombre"><br><br>
        Precio <input type="text" name="precio"><br><br>
        Descuento: <input type="text" name="descuento"><br><br>
        Unidades: <input type="text" name = "Unidades"><br><br>
        Cantidad De Descuento: <input type="cantidadDeDescuento" name="cantidadDeDescuento"><br><br>
        Imagen: <input type="text" name="imagen"><br><br>
        <input type="button" value="añadir juego"><br><br>
    </form>
<form action="Modelo/modelo.php" method="">
    <input type="button" value="Borrar Juego"><br><br>
</form>

<form action="Modelo/modelo.php" method="">
    <input type="button" value="Actualizar Juego">
</form>
</head>
<body>
    
</body>
</html>