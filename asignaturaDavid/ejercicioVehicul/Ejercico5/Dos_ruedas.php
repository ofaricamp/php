<?php 
class Dos_Ruedas extends Vehiculo
{
    private $cilindrada;

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
        parent::$peso = $peso+$litros;
    }
}

?>