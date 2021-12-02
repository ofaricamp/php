<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  require 'Vehiculo.php';
       require 'Cuatro_ruedas.php';
       require 'Dos_ruedas.php';
       require 'Coche.php';
       require 'Camion.php';

  echo'Vehículo<br>';
  echo'--------------------------<br>';
   $vehiculo = new Vehiculo("Negro",1500);
   $vehiculo->añadir_persona(70);
   echo 'Color: '.$vehiculo->getColor().'<br>';
   echo'Peso: '.$vehiculo->getPeso().'<br>';
   $vehiculo->circula();
   echo'--------------------------<br>';
   $coche = new Coche("azul",1500,4,4);
   echo $coche->getColor();
 ?>
</body>
</html>
