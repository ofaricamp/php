<?php 
class Dos_Ruedas extends Vehiculo
{
    private $cilindrada;

    public function __construct($newColor,$newPeso,$newCilindrada)
    {
       parent::__construct($newColor,$newPeso);
       $this->cilindrada = $newCilindrada;
    }

    public function setCilindrada($cilindros)
    {
        $this->cilindrada = $cilindros;
    }

    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    public function poner_gasolina($litros)
    {
       // parent::añadir_persona($litros);
       $this->añadir_personaABS($litros);
    }
    
    public function añadir_personaABS($peso_persona)
    {
        //$pesoTotal = $this->peso + $peso_persona;
        //parent::setPeso($pesoTotal);
        //$this->peso = $pesoTotal;
        $pesoVehiculo = $this->getPeso();
        $this->setPeso($pesoVehiculo+$peso_persona);
    }
}
?>