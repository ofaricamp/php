<?php 

class Camion extends Cuatro_ruedas
{
    private $longitud;

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
        
    }
}


?>