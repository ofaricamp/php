<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar usuarios</title>
</head>
<body>
    <h1>Listado de usuarios</h1>
    <hr>
    <?php 
    $dbc = mysqli_connect('localhost','root');
    mysqli_select_db($dbc,'usuariosbd2');
    //Definir la consulta
    $query = 'SELECT * FROM usuarios';
    if ($r = mysqli_query($dbc,$query)) {
        //Ejecutamos la consulta
        //Recuperar y mostrar cada registro
        while ($fila = mysqli_fetch_array($r)) {
            print "<strong>Nombre:</strong>".$fila['Nombre']."<br>";
            print "<strong>Apellidos:</strong>".$fila['Apellido']."<br>";
            print "<strong>Correo:</strong>".$fila['Correo']."<br>";
            print "<br>";
        }
    } else{ // No se ha ejecutado la consulta
        print'<p style = "color:red;">No ha sido posible recuperar la entrada porque <br/>'.mysqli_error($dbc).'</p><p>El query que se estaba ejectando era'.$query.'</p>';
    }mysqli_close($dbc)
    ?>
    <form action="eleminar.php" method="GET">
    <br><br><input type="submit" value ="borrar">
    </form>
    
</body>
</html>