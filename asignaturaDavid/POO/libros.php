<?php 
class Libro
{
    private $autor;
    private $titulo;
    private $paginas;
    private $refLibro;
    private $prestado = 0;
    private $contieneCD;

    public function __construct($autor,$titulo,$paginas){
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->paginas = $paginas;
        $this->refLibro = "";
        $this->contieneCD;
    }
    public function getTitulo()
    {
        return $this->nombre;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getPaginas()
    {
        return $this->pagina;
    }

    public function getPrestado(){
        return $this->refLibro;
    }

    public function setPrestado(){
        $prestado++;
    }

    public function setRefLibro($rl){
        if ($rl.strlen() > 3) {
            echo '<p style="color:red;">Hmmmmmm me da que esto es un error</p><br>';
        }else {
            $this->refLibro = $rl;
        }
        
    }

    public function printTitulo()
    {
        echo'<p>Titulo: '.$this->titulo.'</p> <br>';
    }

    public function printAutor()
    {
        echo'<p>Autor: '.$this->autor.'</p> <br>';
    }

    public function printLibro()
    {
        $this->setPrestado();
        $this->printTitulo();
        $this->printAutor();
        if (($this->reflibro = $refLibro).strlen() > 0) {
            echo'<p> Referencia Del Libro: '.$this->reflibro.'</p><br>';
        }
        echo'<p>Nº de Páginas: '.$this->paginas.'</p><br>';
        echo'<p>Nº de veces que fue pretado el libro: '.$this->prestado.'</p><br>';
    }
    
}

?>