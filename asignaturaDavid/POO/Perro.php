<?php 
class Perro
{
    public $nombre;
    public $raza;
    public $edad;
    public $sexo;
    public $adiestrado;
    public $foto;
    public $comida;
    private $pulgas;
    public static $mejorAmigo = "Hombre";
    const MejorCualidad = 'Fidelidad';

    public function __construct($n,$r,$e,$s,$a,$f,$p){
        $this->nombre = $n;
        $this->raza = $r;
        $this->edad = $e.' años';
        $this->sexo = ($s) ? 'Macho':'Hembra';
        $this->adiestrado = ($a) ? 'Adiestrado' : 'No Adiestrado';
        $this->foto = $f;
        $this->pulgas = $p;
        echo'<p><mark>Hola soy el constructor de la clase</mark></p>';
    }
    public function __destruct(){
        echo '<p><mark>Hi I´m GALACTUS and I´ll destry your Class</mark></p>';
    }
    public function ladrar(){
        echo'<p><mark>GUAUUUUUUUU GAUUUUUUUUUUUUU!!!!!</mark></p>';
    }
    public function comer($c){
        $this->comida = $c;
        echo'<p>'.$this->nombre.' comer '.$this->comida.'</p>';
    }
    public function aparecer(){
        echo '<img src="'.$this->foto.'">';
    }
    public function tiene_pulgas(){
        echo ($this->pulgas)?'<p>Tiene Pulgas</p>' : '<p>No tiene Pulgas</p>';
    }

    public function masInfo(){
        $this->ladrar();
        $this->comer('huesos');
        echo'<p>El mejor amigo del <mark>'.self::$mejorAmigo.'</mark> es el Perro</p>';
        echo '<p>La mejor cualidad del PErro es la <mark>'.Perro::MejorCualidad.'</mark></p>';
    }
}
$duke = new Perro('Boli','Desconocida',2,true,true,'perrito.jpg',false);
echo '<h1>'.$duke->nombre.'</h1>';
echo '<h2>'.$duke->raza.'</h2>';
echo '<h3>'.$duke->edad.'</h3>';
echo '<h4>'.$duke->sexo.'</h4>';
echo'<h5>'.$duke->adiestrado.'</h5>';
echo'<h6>'.$duke->foto.'</h6>';

$duke->ladrar();
$duke->comer('comida de perro de HACENDADO'); 
$duke->comer('comida de perro de EROSKI');
$duke->aparecer();
$duke->tiene_pulgas();
$duke->masInfo();
?>