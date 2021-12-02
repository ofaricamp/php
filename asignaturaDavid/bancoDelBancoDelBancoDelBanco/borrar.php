<?php
$dbc = mysqli_connect('localhost', 'root');
mysqli_select_db($dbc, 'EjemploDataBase');

if (isset($_GET['ID']) && is_numeric($_GET['ID'])) {
    $query = "SELECT * FROM banco WHERE ID={$_GET['ID']}";
    if ($row = mysqli_query($dbc, $query)) {
        $fila = mysqli_fetch_row($row);
?>
        <form action="borrar.php" method="POST">
            <p><?php $fila['Nombre'] ?></p>
            <p><?php $fila['Apellido'] ?></p>
            <p><?php $fila['DNI'] ?></p>
            <p><?php $fila['Direccion'] ?></p>
            <p>Seguro que desea eliminarme?</p>
            <input type="hidden" name="ID" value="<?php $_GET['ID'] ?>">
            <input type="submit" value="Sabia que seriamos nosotros">
        </form>
<?php

        if (!isset($_POST['ID']) && is_numeric($_POST['ID'])) {
            $query2 = "DELETE FROM ejemploDataBase WHERE ID = {$_POST['ID']} LIMIT 1";
            mysqli_query($dbc, $query2);
            // comprueba el nuemero de rows que se le afecta la ejecucion anterior
            if (mysqli_affected_rows($dbc) == 1) {
                print 'Desintegracion realizada con exito';
            } else {
                print 'El es inevitable';
            }
        }
    }
} else {
    print '<p>No existe esa ID en nuestra base de datos</p>';
}
mysqli_close($dbc);
?>