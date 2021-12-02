<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $dbc = mysqli_connect('localhost', 'root');
            mysqli_select_db($dbc, 'usuariosbd');
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                //Definimos la consulta             
                $query = "SELECT Nombre, Apellido, Email FROM usuarios WHERE id={$_GET['id']}";
                if ($r = mysqli_query($dbc, $query)) { //Ejecutamos la consulta                 
                    $fila = mysqli_fetch_array($r); //Recuperamos la informacion                 
                    //Creamos el formulario                 
                    ?>
                        <form action="borrar.php" method="post">
                            <p>¿Seguro que quieres borrar esta entrada?</p>
                            <h3><?php $fila['Nombre'] ?></h3> 
                            <h3><?php $fila['Apellido'] ?></h3> 
                            <h3><?php $fila['Email'] ?></h3> 
                            <br/>
                            <input type = "hidden" name = "id" value = "<?php $_GET['id'] ?>"/>
                            <input type = "submit" name = "submit" value = "Borrar entrada"/>
                        </form>
                    <?php
                } else { 
                    //No se ha ejecutado la consulta                 
                    ?>
                        <p style="color:red;">No ha sido posible recuperar la entrada porque: <br/> <?php mysqli_error($dbc) ?></p>
                        <p>El query que se estaba ejecutando era <?php $query ?></p> 
                    <?php
                }
            } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {             //Definir la consulta            
                $query = "DELETE FROM usuarios WHERE id={$_POST['id']} LIMIT 1";
                $r = mysqli_query($dbc, $query); //Ejecutamos la consulta            
                //Resultado             
                if (mysqli_affected_rows($dbc) == 1) {
                    ?>
                        <p>La entrada de uusarios ha sido eliminada</p>
                    <?php
                } else { 
                    //No se ha ejecutado la consulta                 
                    ?>
                        <p style="color:red;">No ha sido posible borrar la entrada porque: <br/> <?php mysqli_error($dbc) ?></p>
                        <p>El query que se estaba ejecutando era <?php $query ?></p>
                    <?php
                }
            } else {
                ?> 
                    <p style="color:red;">Error de acceso a la página </p> 
                <?php
            } 
            mysqli_close($dbc);
        ?>
    </body>
</html>