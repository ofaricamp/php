<?php 
$dbc = mysqli_connect('localhost,root');
mysqli_select_db($dbc,'EjemploDeDataBase');
$problema = false;
if (!empty($_POST['Nombre']) 
&& !empty($_POST['Apellido'])
&& !empty($_POST['DNI'])
&& !empty($_POST['Direccion'])) {
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $DNI = $_POST['DNI'];
    $direccion = $_POST['Direccion'];
}else {
    print'<p>Por favor introduzca todos los datos necesarios</p>';
    $problema = true;
}
if (!$problema) {
    $query = "INSERT INTO EjemploDataBase(ID,Nombre,Apellido,DNI,Direccion) VALUES(0,$nombre,$apellido,$DNI,$direccion)";
    if (mysqli_query($dbc,$query)) {
        print'<p>Entrada Añadida</p>';
    }else {
        print'<p>Esto FALLA PORQUE ERES TONTO</p>';
        mysqli_error($dbc);

    }
}
mysqli_close($dbc);
?>