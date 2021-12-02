<?php 
$dbc = mysqli_connect('localhost','root');
mysqli_select_db($dbc,'banco');
$problema = FALSE;
//if (isset($_POST['dni'])) {
   // print'<p style = "color:red">Ese user ya existe </p>';
//}
// convertir en un elseif para que la comprobacion sirva aunque el de if que depende de $problema se seguiria
if (!empty($_POST['Nombre']) 
    && !empty($_POST['Primer_Apellido'])
    && !empty($_POST['Segundo_Apellido']) && !empty($_POST['dni'])
    && !empty($_POST['telefono'])&& !empty($_POST['correo']) 
    && !empty($_POST['direccion'])
    && !empty($_POST['numero_cuenta']) && !empty($_POST['dinero_cuenta'])) {
    $nombre = trim($_POST['Nombre']);
    $primeroApellido = trim($_POST['Primer_Apellido']);
    $segundoApellido = trim($_POST['Segundo_Apellido']);
    $dni = trim($_POST['dni']);
    $telefono = trim($_POST['telefono']);
    $correo = trim($_POST['correo']);
    $direccion = trim($_POST['direccion']);
    $numeroCuenta = trim($_POST['numero_cuenta']);
    $dineroCuenta = trim($_POST['dinero_cuenta']);
}else {
    print'<p style = "color:red">Por favor introduzca toda la información necesaria </p>';
    $problema = TRUE;
}
if (!$problema) {
    $query ="INSERT INTO banco(id,Nombre,Primer_Apellido,Segundo_Apellido,dni,telefono,correo,direccion,numero_cuenta,dinero_cuenta)
    VALUES (0,'$nombre','$primeroApellido','$segundoApellido','$dni','$telefono','$correo','$direccion','$numeroCuenta','$dineroCuenta')";
    if (mysqli_query($dbc,$query)) {
        print '<p>Entrada añadida</p>';
    } else {
        print'<p style = "color:red">No se pudieron añadir los datos porque: <br>' .
        mysqli_error($dbc) . '</p><p>El query que se estaba ejecuntado era' . $query . '</p>'; 
    }
}
mysqli_close($dbc);

?>