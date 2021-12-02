<?php 
class Coche extends Cuatro_Ruedas
{
    private $numero_cadenas_nieve;

    public function __construct($newColor,$newPeso,$newNumeroPuertas,$newCadenas)
    {
       parent::__construct($newColor,$newPeso,$newNumeroPuertas);
       $this->numero_cadenas_nieve = $newCadenas;
    }

    public function setNumeroCadenasNieve($numeroCad)
    {
        $this->numero_cadenas_nieve = $numeroCad;
    }
   
    public function getNumeroCadenasNieve()
    {
        return $this->numero_cadenas_nieve;
    }

    public function añadir_cadenas_nieve($numero)
    {
        $cadenasActuales = $this->numero_cadenas_nieve;
        $this->numero_cadenas_nieve=$cadenasActuales+$numero;
    }

    public function quitar_cadenas_nieve($numero)
    {
        $cadenasActuales = $this->numero_cadenas_nieve;
        $this->numero_cadenas_nieve=$cadenasActuales-$numero;
    }

     public function añadir_personaABS($peso_persona)
     {
        parent::añadir_personaABS($peso_persona);
     }
}
?>