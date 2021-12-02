<?php 
$dbc = mysqli_connect('localhost','root');
mysqli_select_db($dbc,'usuariosbd2');
// validamos los datos del formulario
$problema = FALSE;
if (!empty($_POST['Nombre']) && !empty($_POST['Apellidos']) && !empty($_POST['Correo'])) {
    $nombre = trim($_POST['Nombre']);
    $apellido = trim($_POST['Apellidos']);
    $email = trim($_POST['Correo']);
} else {
    print '<p stylr = "color:red"> Por favor introduzca un Nombre, un Apellidos y un Correo</p>';
    $problema = TRUE;
} if (!$problema) {
//Definimos los datos a introducir
    $query = "INSERT INTO usuarios(id,Nombre,Apellido,Correo) VALUES(0,'$nombre','$apellido','$email')";
    //se ejecuta la consulta
    if (mysqli_query($dbc,$query)) {
        print '<p>Entrada añadida</p>';
    } else {
        print'<p style = "color:red">No se pudieron añadir los datos porque: <br>' .
            mysqli_error($dbc) . '</p><p>El query que se estaba ejecuntado era' . $query . '</p>'; 
    
    }
}

// TODO OK
mysqli_close($dbc);
?>