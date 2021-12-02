<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Clientes</title>
</head>
<body>
    <h1>Listado de Clientes</h1>
    <hr>
    <?php 
    $dbc = mysqli_connect('localhost','root');
    mysqli_select_db($dbc,'banco');
    $query = 'SELECT * FROM banco';
    if ($r = mysqli_query($dbc,$query)) {
        while ($fila = mysqli_fetch_array($r)) {
            print"<strong>ID_Cliente: </strong>".$fila['id']."<br>";
            print"<strong>Nombre: </strong>".$fila['Nombre']."<br>";
            print"<strong>Primer_Apellido: </strong>".$fila['Primer_Apellido']."<br>";
            print"<strong>Segundo_Apellido: </strong>".$fila['Segundo_Apellido']."<br>";
            print"<strong>DNI: </strong>".$fila['dni']."<br>";
            print"<strong>Teléfono: </strong>".$fila['telefono']."<br>";
            print"<strong>Correo: </strong>".$fila['correo']."<br>";
            print"<strong>Dirección: </strong>".$fila['direccion']."<br>";
            print"<strong>Numero_Cuenta: </strong>".$fila['numero_cuenta']."<br>";
            if (($fila['dinero_cuenta']) >= 0) {
                print '<strong>Dinero_Cuenta:</strong><strong style="color:green;">'.$fila['dinero_cuenta'].'</strong><br>';
            }else {
                print '<strong>Dinero_Cuenta:</strong><strong style="color:red;">'.$fila['dinero_cuenta'].'</strong><br>';
            }
            print "<br>";
        }
    }else {
        print '<p style = "color:red;">No fue posible recuperar la entrada porque<br/>'
        .mysqli_error($dbc).
        '</p><p>La query que se estaba ejecuntando era'.$query.'</p>';
    }
    ?>
    <form action="actualizar.php" method="get">
        ID: <input type="text" name="id" id="id"><br>
        <br> <input type="submit" value="actualizar">
    </form>
    <br>
    <form action="borrar.php" method="get">
        ID: <input type = "text" name="id" id="id"> <br>  
        <br> <input type="submit" value="borrar">
    </form>
    <br>
    <form action="ingreso.php" method="get">
        ID: <input type = "text" name="id" id="id"> <br>  
        <br> <input type="submit" value="Ingresar Dinero">
    </form>
    <br>
    <form action="retirarDinero.php" method="get">
        ID: <input type = "text" name="id" id="id"> <br>  
        <br> <input type="submit" value="Retirar Dinero">
    </form>
    <br>
</body>
</html>