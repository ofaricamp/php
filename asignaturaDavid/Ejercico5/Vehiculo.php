<?php 
    abstract class Vehiculo
    {
        private $color;
        private $peso;
        static protected $numero_cambio_color;

        public function __construct($construcColor,$construcPeso)
        {
            $this->color = $construcColor;
            $this->peso = $construcPeso;
        }
        
        public function setColor($color)
        {
            $this->color = $color;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function setPeso($peso)
        {
            $this->peso = $peso;
        }

        public function getPeso()
        {
            return $this->peso;
        }

        public function circula()
        {
            echo'El vehículo Circula';
        }

        // public function añadir_persona($peso_persona)
        // {
        //     $pesoVehiculo = $this->peso;
        //     $this->peso=$pesoVehiculo+$peso_persona;
        // }

        abstract function añadir_personaABS($peso_persona);

        static function ver_atributo($objeto)
        {
             if ($objeto instanceof Cuatro_ruedas) {
                 $color = $objeto->getColor();
                 $peso = $objeto->getPeso();
                $numero_puertas = $objeto->getNumero_Puedas();
                echo 'Color: '.$color.'<br>'.'Peso: '.$peso.'<br>'.'Numero de Puertas: '.$numero_puertas.'<br>';                
             }
            if ($objeto instanceof Dos_ruedas) {
                $color = $objeto->getColor();
                $peso = $objeto->getPeso();
                $cilindrada = $objeto->getCilindrada();
                echo 'Color: '.$color.'<br>'.'Peso: '.$peso.'<br>'.'Numero de Puertas: '.$cilindrada.'<br>';                
            }
            if ($objeto instanceof Coche) {
                $numero_cadenas_nieve = $objeto->getNumeroCadenasNieve();
                echo 'Cadenas de Nieve: '.$numero_cadenas_nieve.'<br>';                
            }
            if ($objeto instanceof Camion) {
                $longitud = $objeto->getLongitud();
                echo 'Longitud: '.$longitud.'<br>';                
            }

        }
    }
?>