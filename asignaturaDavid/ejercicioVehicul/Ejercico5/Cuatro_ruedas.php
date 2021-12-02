<?php 
 class Cuatro_Ruedas extends Vehiculo 
 {
    protected $numero_puertas;

    public function __construct($newColor,$newPeso,$newNumeroPuertas)
    {
       parent::__construct($newColor,$newPeso);
       $this->numero_puertas = $newNumeroPuertas;
    }

    public function setNumero_Ruedas($numPuertas)
    {
        $this->numero_puertas = $numPuertas;
    }

    public function getNumero_Ruedas()
    {
        return $this->numero_puertas;
    }

    public function repintar($color)
    {
        parent::$color = $color;
    }
 }
 
 ?>