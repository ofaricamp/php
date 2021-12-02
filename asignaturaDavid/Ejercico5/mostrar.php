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

  // echo'Vehículo<br>';
  // echo'--------------------------<br>';
  //  $vehiculo =  new Vehiculo("Negro",1500);
  //  $vehiculo->añadir_persona(70);
  //  echo 'Color: '.$vehiculo->getColor().'<br>';
  //  echo'Peso: '.$vehiculo->getPeso().'<br>';
  //  $vehiculo->circula();
   echo'<br><br>Cuatro Ruedas';
   echo'<br>--------------------------<br>';
   $cuatroRuedas = new Cuatro_Ruedas("Negro",1500,4);
   $cuatroRuedas->repintar('azul');
   echo 'Color: '.$cuatroRuedas->getColor().'<br>';
   //echo 'ColorV: '.$vehiculo->getColor().'<br>';
   echo'Peso: '.$cuatroRuedas->getPeso().'<br>';
   Vehiculo::ver_atributo($cuatroRuedas);
   echo'<br><br>Dos Ruedas';
   echo'<br>--------------------------<br>';
   $dosRuedas = new Dos_Ruedas("Negro",120,1000);
   $dosRuedas->poner_gasolina(20);
   $dosRuedas->añadir_personaABS(80);
   $dosRuedas->setColor('Verde');
   Vehiculo::ver_atributo($dosRuedas);
   echo 'Color: '.$dosRuedas->getColor().'<br>';
   echo'Peso: '.$dosRuedas->getPeso().'<br>';
   echo'<br><br>Coche';
   echo'<br>--------------------------<br>';
   $franchesco = new Coche ('Verde',1400,0,0);
   $franchesco ->añadir_personaABS(130);
   $franchesco -> repintar('rojo');
   $franchesco -> añadir_cadenas_nieve(2);
   Vehiculo::ver_atributo($franchesco);
 // echo'Color: '.$franchesco->getColor().'<br>';
  //echo'Peso: '.$franchesco->getPeso().'<br>';
 // echo'Cadenas de nieve: '.$franchesco->getNumeroCadenasNieve().'<br>';
  echo'<br><br>Camion';
  echo'<br>--------------------------<br>';
  $hosbaldo = new Camion ("Azul",10000,2,10);
  $hosbaldo->añadirRemolque(5);
  $hosbaldo->añadir_personaABS(80);
  Vehiculo::ver_atributo($hosbaldo);
 // echo'Color: '.$hosbaldo->getColor().'<br>';
  //echo'Peso: '.$hosbaldo->getPeso().'<br>';
 // echo'Numero De Puertas: '.$hosbaldo->getNumero_Puedas().'<br>';
  //echo'Longitud: '.$hosbaldo->getLongitud().'<br>';
 ?>
</body>
</html>
