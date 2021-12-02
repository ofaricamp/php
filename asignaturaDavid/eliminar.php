<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar usuario</title>
    </head>
    <body>
        <?php
        $dbc = mysqli_connect('localhost', 'root');
        mysqli_select_db($dbc, 'usuariosbd2');
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            //Definimos la consulta            
            $query = "SELECT Nombre,Apellido,Email FROM usuarios WHERE id={$_GET['id']}";
            if ($r = mysqli_query($dbc, $query)) {  //Ejecutamos la consulta                 
                $fila = mysqli_fetch_array($r); //Recuperamos la información                 
//Creamos el formulario                 
                print'<form action="actualizar.php" method="post">   <p>Nombre: <input type="text" name="nombre" value="' . htmlentities($fila['Nombre']) . '"/></p>'
                        . ' <p>Apellido: <input type="text" name="apellido" value="'. htmlentities($fila['Apellido']) .'"/><p>Nombre: <input type="text" name="email" value="' . htmlentities($fila['Correo']) . '"/></p>'.
                        '</p><input type="hidden" name="id" value="' . $_GET['id'] . '"/>
                        <input type="submit" name="submit" value ="Actualizar Entrada"/>
                        </form>';
            } else { //No se puede recuperar la informacion                 
                print '<p style="color:red;">No ha sido posible recuperar la entrada porque: <br/>' . mysqli_error($dbc) . '</p><p>El query que se estaba ejecutando era' . $query . '</p>';
            }
        } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
            $problema = FALSE;
            if (!empty($_POST['Nombre']) && !empty($_POST['Apellido']) && !empty($_POST['Correo'])) {
                $nombre = mysqli_real_escape_string($dbc, trim($_POST['Nombre']));
                $apellido = mysqli_real_escape_string($dbc, trim($_POST['Apellido']));
                $email = mysqli_real_escape_string($dbc, trim($_POST['Correo']));
            } else {
                print '<p style="color:red;">Por favor introduzca un título y una entrada <br/>';
                $problema = TRUE;
            } if (!$problema) {
//Definimos y ejecutamos la consulta                 
                $query = "UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido',Correo='$email' WHERE id={$_POST['id']}";
                $r = mysqli_query($dbc, $query);
                //Mostramos el resultado                 
                if (mysqli_affected_rows($dbc) == 1) {
                    print '<p>La entrada de usuarios ha sido actualizada</p>';
                } else {
                    '<p style="color:red;">No ha sido posible actualizar la entrada porque: <br/>' . mysqli_error($dbc) . '</p><p>El query que se estaba ejecutando era' . $query . '</p>';
                }
            } else {
//no se establece el ID                
                print '<p style="color:red;">Error de acceso a la página </p>';
            }
        } mysqli_close($dbc);
        ?>     
    </body> </html>