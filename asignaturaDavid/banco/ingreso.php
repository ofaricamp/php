<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
</head>
<body>
    <?php 
    $dbc = mysqli_connect('localhost','root');
    mysqli_select_db($dbc,'banco');
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $query = "SELECT dinero_cuenta FROM banco WHERE id={$_GET['id']}";
        if ($r = mysqli_query($dbc,$query)) {
            $fila = mysqli_fetch_array($r);
            print'<form action="ingreso.php" method="post">
            <p>Dinero en Cuenta <input type="text" name="dinero_cuenta"'.htmlentities($fila['dinero_cuenta']).'</p>
            <p>Ingreso: <input type="text" name ="ingreso"/></p>
            <input type="hidden" name="id" value="'.$_GET['id'].'"/><br><br>
            <input type="submit" name="submit" value="Realizar ingreso"/>
            </form>';
        }
    } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $problema = FALSE;
        if (!empty($_POST['dinero_cuenta']) && !empty($_POST['ingreso'])) {
            $dinero_cuenta = mysqli_real_escape_string($dbc, trim($_POST['dinero_cuenta']));
            $ingreso = $_POST['ingreso'];
        } else {
            print'<p style="color:red;">Por favor introduzca un título y una entrada :c <br/>';
            $problema =TRUE;
        }if (!$problema) {
            $query2 = "UPDATE banco SET 
                dinero_cuenta = '$dinero_cuenta' +'$ingreso' 
                WHERE id={$_POST['id']}";
                $r = mysqli_query($dbc,$query2);
                if (mysqli_affected_rows($dbc) == 1) 
                 {
                    print'<p style="color:green;"> El dinero se añadio correctamente';
                } else {
                     print'<p style ="color:red;">No a sido posible recuperar la entrada porque: <br/>'. mysqli_error($dbc);
                }
        }else {
            print'<p style ="color:red;">Error de acceso a la página</p>';
        }
    } mysqli_close($dbc);
    ?>
</body>
</html>