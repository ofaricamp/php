<?php 

class Camion extends Cuatro_ruedas
{
    private $longitud;

    public function __construct($newColor,$newPeso,$newNumeroPuertas,$newLongitud)
    {
       parent::__construct($newColor,$newPeso,$newNumeroPuertas);
       $this->longitud = $newLongitud;
    }

    public function setLongitud($longi)
    {
        $this->longitud = $longi;
    }

    public function getLongitud()
    {
        return $this->longitud;
    }

    public function añadirRemolque($longitudRemolque)
    {
        $longitudActual = $this->longitud;
        $this->longitud=$longitudActual+$longitudRemolque;
    }
}
?>