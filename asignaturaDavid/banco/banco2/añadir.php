<?php
$dbc = mysqli_connect('localhost','root');
mysqli_select_db($dbc,'ejemplo');
$problema = false;
// Comprobamos que ningun campo estea vacio para poder almacenarlo en variables temporales
// que almacenaran los datos enviados en el formulario principañ
if (!empty($_POST['Nombre'])
&& !empty($_POST['Apellido'])
&& !empty($_POST['DNI'])
&& !empty($_POST['Numero De Telefono'])) {
    // se utiliza trim para quitar todos los espacios en blanco del mismo
    $nombre = trim($_POST['Nombre']);
    $apellido = trim($_POST['Apellido']);
    $DNI = trim($_POST['DNI']);
    $Numero_De_Telefono = trim($_POST['Numero De Telefono']);
}else {
   print '<p style="color:red">Por favor introduzca toda la información necesaria<br></p>';
    $problema = true;
}

if (!$problema) {
    // Insertamos los datos
    $query = "INSERT INTO banco(id,Nombre,Apellido,Numero_De_Telefono)
    VALUES(0,$nombre,$apellido,$DNI,$Numero_De_Telefono)";
    // realizamos la query en la base de datos porque si no hay ningun fallo esto
    // devolvera TRUE
    if (mysqli_query($dbc,$query)) {
        print'<p>Entrada Añadida</p>';
    }else {
        print'<p>Error Error Error</p>';
        mysqli_error($dbc);//pone el error de sentencia de la query 
    }
}
mysqli_close($dbc);
?>