<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar usuario</title>
    </head>
    <body>
        <?php
            $dbc = mysqli_connect('localhost', 'root');
            mysqli_select_db($dbc, 'usuariosbd');
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                //Definimos la consulta            
                $query = "SELECT Nombre,Apellido,Email FROM usuarios WHERE id={$_GET['id']}";
                if ($r = mysqli_query($dbc, $query)) {  //Ejecutamos la consulta                 
                    $fila = mysqli_fetch_array($r); //Recuperamos la información                 
                    //Creamos el formulario                 
                    ?>
                        <form action="actualizar.php" method="post">   
                            <p>Nombre: <input type="text" name="nombre" value="<?php htmlentities($fila['Nombre']) ?>"/></p>
                            <p>Apellido: <input type="text" name="apellido" value="<?php htmlentities($fila['Apellido']) ?>"/>
                            <p>Email: <input type="text" name="email" value="<?php htmlentities($fila['Email']) ?>"/></p>
                            </p><input type="hidden" name="id" value="<?php $_GET['id'] ?>"/>
                            <input type="submit" name="submit" value ="Actualizar Entrada"/>
                        </form>
                    <?php
                } else { //No se puede recuperar la informacion                 
                    ?>
                        <p style="color:red;">No ha sido posible recuperar la entrada porque: <br/> <?php mysqli_error($dbc) ?></p>
                        <p>El query que se estaba ejecutando era <?php $query ?></p>
                    <?php
                }
            } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
                $problema = FALSE;
                if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email'])) {
                    $nombre = mysqli_real_escape_string($dbc, trim($_POST['nombre']));
                    $apellido = mysqli_real_escape_string($dbc, trim($_POST['apellido']));
                    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
                } else {
                    ?>
                    <p style="color:red;">Por favor introduzca un título y una entrada <br/>
                    <?php
                    $problema = TRUE;
                } if (!$problema) {
                    //Definimos y ejecutamos la consulta                 
                    $query = "UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido',Email='$email' WHERE id={$_POST['id']}";
                    $r = mysqli_query($dbc, $query);
                    //Mostramos el resultado                 
                    if (mysqli_affected_rows($dbc) == 1) {
                        ?>
                            <p>La entrada de usuarios ha sido actualizada</p>
                        <?php
                    } else {
                        ?>
                            <p style="color:red;">No ha sido posible actualizar la entrada porque: <br/><?php mysqli_error($dbc) ?></p><p>La query que se estaba ejecutando era <?php $query ?></p>
                        <?php
                    }
                } else {
                    //no se establece el ID                
                    ?>
                        <p style="color:red;">Error de acceso a la página.</p>
                    <?php
                }
            } 
            mysqli_close($dbc);
        ?>     
    </body>
</html>