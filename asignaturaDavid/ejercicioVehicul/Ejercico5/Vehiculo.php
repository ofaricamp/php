<?php 
    class Vehiculo
    {
        protected $color;
        protected $peso;

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

        public function añadir_persona($peso_persona)
        {
            $pesoVehiculo = $this->peso;
            $this->peso=$pesoVehiculo+$peso_persona;
        }
    }
    
?>