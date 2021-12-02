<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar Clientes</title>
    </head>
    <body>
        <?php
        $dbc = mysqli_connect('localhost', 'root');
        mysqli_select_db($dbc, 'banco');
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {         
            $query = "SELECT Nombre,Primer_Apellido,Segundo_Apellido,dni,telefono,correo,direccion,numero_cuenta,dinero_cuenta FROM banco WHERE id={$_GET['id']}";
            if ($r = mysqli_query($dbc, $query)) {                 
                $fila = mysqli_fetch_array($r);                    
                print'<form action ="actualizar.php" method="post"> 
                <p>Nombre: <input type="text" name="Nombre" value="'.htmlentities($fila['Nombre']).'"/></p>'
                .'<p>Primer_Apellido: <input type="text" name="Primer_Apellido" value="'.htmlentities($fila['Primer_Apellido']).'"/></p>'
                .'<p>Segundo_Apellido: <input type="text" name="Segundo_Apellido" value="'.htmlentities($fila['Segundo_Apellido']).'"/></p>'
                .'<p>Dni: <input type="text" name="dni" value="'.htmlentities($fila['dni']).'"/></p>'
                .'<p>Telefono: <input type="text" name="telefono"'.htmlentities($fila['telefono']).'"/></p>'
                .'<p>Correo: <input type="email" name="correo"'.htmlentities($fila['correo']).'"/></p>'
                .'<p>Direccion: <input type="text" name="direccion"'.htmlentities($fila['direccion']).'"/></p>'
                .'<p>Numero_Cuenta: <input type="text" name="numero_cuenta"'.htmlentities($fila['numero_cuenta']).'"/></p>'
                .'<p>Dinero_Cuenta: <input type = "text" name="dinero_cuenta"'.htmlentities($fila['dinero_cuenta']).'"/</p>'
                .'<input type="hidden" name="id" value="'.$_GET['id'].'"/><br><br>'
                .'<input type="submit" name="submit" value="Actualizar Cliente"/>
                </form>';
            } else {
                print'<p style ="color:red;">No a sido posible recuperar la entrada porque: <br/>'. mysqli_error($dbc);

            }
        } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
            $problema = FALSE;
            if (!empty($_POST['Nombre']) 
            && !empty($_POST['Primer_Apellido'])
            && !empty($_POST['Segundo_Apellido']) && !empty($_POST['dni'])
            && !empty($_POST['telefono'])&& !empty($_POST['correo']) 
            && !empty($_POST['direccion'])
            && !empty($_POST['numero_cuenta']) && !empty($_POST['dinero_cuenta'])) {
                
                    $nombre = mysqli_real_escape_string($dbc, trim($_POST['Nombre']));
                    $Primer_Apellido = mysqli_real_escape_string($dbc, trim($_POST['Primer_Apellido']));
                    $Segundo_Apellido = mysqli_real_escape_string($dbc, trim($_POST['Segundo_Apellido']));
                    $dni = mysqli_real_escape_string($dbc, trim($_POST['dni']));
                    $telefono = mysqli_real_escape_string($dbc, trim($_POST['telefono']));
                    $correo = mysqli_real_escape_string($dbc, trim($_POST['correo']));
                    $direccion = mysqli_real_escape_string($dbc, trim($_POST['direccion']));
                    $numero_cuenta = mysqli_real_escape_string($dbc, trim($_POST['numero_cuenta']));
                    $dinero_cuenta = mysqli_real_escape_string($dbc, trim($_POST['dinero_cuenta']));
            }else {
                print'<p style="color:red;">Por favor introduzca un título y una entrada :c <br/>';
                $problema =TRUE;
            }if (!$problema) {
                $query2 = "UPDATE banco SET Nombre ='$nombre',
                Primer_Apellido ='$Primer_Apellido',
                Segundo_Apellido = '$Segundo_Apellido',
                dni = '$dni',
                telefono = '$telefono',
                correo = '$correo',
                direccion = '$direccion',
                numero_cuenta = '$numero_cuenta',
                dinero_cuenta = '$dinero_cuenta' 
                WHERE id={$_POST['id']}";

                $r = mysqli_query($dbc,$query2);
                if (mysqli_affected_rows($dbc) == 1) 
                 {
                    print'<p style="color:green;"> El cliente fue actualizado correctamente';
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