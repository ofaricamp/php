<html>

<body>
<?php 

    class Menu{
        private $enlaces = array();
        private $titulos = array();

        public function cargarOpcion($en,$tit){
            $this->enlaces[] = $en;
            $this->titulos[] = $tit;
        }
        public function mostrar(){
            for ($i=0; $i < count($this->enlaces) ; $i++) { 
                echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
                echo '<br>';
            }
        }
    }

    $menu1 = new Menu();
    $menu1 -> cargarOpcion('http://www.google.com','Google');
    $menu1 -> cargarOpcion('http://www.yahoo.com','Yahoo');
    $menu1 -> mostrar(); 
?>

</body>

</html>