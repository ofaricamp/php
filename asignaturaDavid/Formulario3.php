<?php 
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Correo'];
$contraseña = $_POST['Contraseña'];
$sexo = $_POST['sexo'];
$temas = $_POST['temas'];
for ($i=0; $i < count($temas) ; $i++) { 
    
}
echo "Nombre: $nombre <br> Apellidos: $apellido <br> Correo: $correo <br>
contraseña: $contraseña <br> sexo: $sexo <br> temas: $temas<br>";
?>