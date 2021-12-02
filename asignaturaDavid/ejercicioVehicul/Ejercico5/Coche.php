<?php 
class Coche extends Cuatro_Ruedas
{
    private $numero_cadenas_nieve;

    public function setNumeroCadenasNieve($numeroCad)
    {
        $this->numero_cadenas_nieve = $numeroCad;
    }
   
    public function getNumeroCadenasNieve()
    {
        return $this->numero_cadenas_nieve;
    }

    public function añadir_cademas_nieve($numero)
    {
        $cadenasActuales = $this->numero_cadenas_nieve;
        $this->numero_cadenas_nieve=$cadenasActuales+$numero;
    }

    public function quitar_cadenas_nieve($numero)
    {
        $cadenasActuales = $this->numero_cadenas_nieve;
        $this->numero_cadenas_nieve=$cadenasActuales-$numero;
    }
}

?>