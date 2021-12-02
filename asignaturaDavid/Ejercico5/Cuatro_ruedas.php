<?php 
 class Cuatro_Ruedas extends Vehiculo 
 {
    private $numero_puertas;

    public function __construct($newColor,$newPeso,$newNumeroPuertas)
    {
       parent::__construct($newColor,$newPeso);
       $this->numero_puertas = $newNumeroPuertas;
    }

    public function setNumero_Puedas($numPuertas)
    {
        $this->numero_puertas = $numPuertas;
    }

    public function getNumero_Puedas()
    {
        return $this->numero_puertas;
    }

    public function repintar($color)
    {
        parent::setColor($color);
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