<?php
$dbc = mysqli_connect('localhost','root');//conecta al servidor necesita dos strings
mysqli_select_db($dbc,'ejemplo');// selecciona la base de datos

if (isset($_get['id'])&& is_numeric($_GET['id'])) {
    $query = "SELECT Nombre,Apellido,DNI,Numero De Telefono from banco where id ={$_GET['id']}";
    // ejecuta la query en la base de datos para obtener una row de la base de datos
    if ($row = mysqli_query($dbc,$query)) {
        //se guarda en una variable para poder acceder a la row que queremos Modificar o borrar
        $fila = mysqli_fetch_row($row);
// EN EL FORMULARIO REALIZAMOS EL BOTON EN METODO GET PARA OBTENER LA ID DEL CLIENTE
//FINALMENTE EN EL FORMULARIO HACEMOS UN MINIFORMULARIOS DONDE SE MUESTRA LA INFORMACION
// Y CON UN INPUT HIDDEN PONEMOS DE VALUE EL GET PARA QUE EN EL POST MANDE LA ID
        print'<from action="borrar.php" method="post"><p>'.$fila['Nombre'].'</p>
        <p>'.$fila['Apellido'].'</p>
        <p>'.$fila['DNI'].'</p>
        <p>'.$fila['Numero De Telefono'].'</p>
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type = "submit" value ="borrar"
        </from>';
    }
    else {
        // NO FUE POSIBLE EJECUTAR LA QUERY
    }
}elseif (isset($_post['id']) && is_numeric($_POST['id'])) {
    $queryDELETE = "DELETE FROM banco WHERE id={$_POST['id']}";
}
mysqli_close($dbc); //Cerramos la base de datos

?>