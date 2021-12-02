<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Cliente</title>
</head>
<body>
    <?php  
    $dbc = mysqli_connect('localhost','root');
    mysqli_select_db($dbc, 'banco');
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $query = "SELECT Nombre,Primer_Apellido,Segundo_Apellido,dni,telefono,correo,direccion,numero_cuenta,dinero_cuenta FROM banco WHERE id={$_GET['id']}";
        if ($r = mysqli_query($dbc,$query)) {
            $fila = mysqli_fetch_array($r);
            print'<form action = "borrar.php" method="post">'
            .'<p>¿Seguro que desea borrar este cliente?</p>'
            .'<p><h3>'.$fila['Nombre'].'</h3>'
            .'<h3>'.$fila['Primer_Apellido'].'</h3>'
            .'<h3>'.$fila['Segundo_Apellido'].'</h3>'
            .'<h3>'.$fila['dni'].'</h3>'
            .'<h3>'.$fila['telefono'].'</h3>'
            .'<h3>'.$fila['correo'].'</h3>'
            .'<h3>'.$fila['direccion'].'</h3>'
            .'<h3>'.$fila['numero_cuenta'].'</h3>'
            .'<h3>'.$fila['dinero_cuenta'].'</h3> <br>'
            .'<input type ="hidden" name = "id" value = "'.$_GET['id'].'"/><br>'
            .'      <input type ="submit" name = "submir" value = "Borrar entrada"/>'
            .'</form>';
        }else {
            print'<p style="color:red;">No fue posible recuperar la entrada porque'.mysqli_error($dbc).'</p>
            <p>El query que se estaba ejecutando era' . $query . '</p>';
        }
    }elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $query2 = "DELETE FROM banco WHERE id={$_POST['id']} LIMIT 1";
        $r = mysqli_query($dbc,$query2);
        if (mysqli_affected_rows($dbc) == 1) {
            print '<p>La entrada del cliente ha sido eleminada</p>';
        }else {
            print '<p style="color:red;">No ha sifo posible borrar la entrada';
        }
    }else {
            print'<p style="color:red;">Error de acceso a la página</p>';
    }mysqli_close($dbc);
    ?>
</body>
</html>