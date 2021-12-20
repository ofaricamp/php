<?php  
class Articulo{
    private $articulo;
    private $db;

    public function __construct()
    {
        $this->articulo = array();
        //$this->db = new PDO('mysql:host=localhost;dbname=empresa', "root", "");
        $this->db = new PDO('mysql:host=localhost;dbname=navidad',"root","");
    }

    public function getArticulo()
    {
        $sql = "SELECT id,nombre,precio,descuento,Unidades,stock,cantidadDeDescuento,imagen FROM navidad";
        
        foreach ($this->db->query($sql) as $res) {
            $this->articulo[] = $res;
        }

        $this->db = null;
        return $this->articulo;
    }

    public function setArticulo($nombre,$precio,$descuento,$unidades,$stock,$cantidaDeDescuento,$imagen)
    {
        $sql = 
        "INSERT INTO navidad(nombre,precio,descuento,Unidades,stock,cantidadDeDescuento,imagen) 
            VALUES ($nombre,$precio,$descuento,$unidades,$stock,$cantidaDeDescuento,$imagen)";
        $result = $this->db->query($sql);
        if ($result) {
            $this->db = null;
            return true;
        } else {
            $this->db = null;
            return false;
        }
    }

    public function DameUnaImagen($id)
    {
        $sql = "SELECT imagen FROM navidad WHERE id LIKE $id";
        $result = $this->db->query($sql);
        $this->db = null;
        return $result;
    }

    public function StockONoStock($unidades,$id)
    {
        $sql = "SELECT Unidades FROM navidad WHERE id LIKE $id";
        $result = $this->db->query($sql);
        if ($result > 0) {
            $sql2 = "INSERT INTO navidad(stock) VALUES(true)";
            $this->db->query($sql2);
            $this->db = null;
        }else {
            $sql3 = "INSERT INTO navidad(stock) VALUES(false)";
            $this->db->query($sql3);
            $this->db = null;
        }
    }
/**
 * La idea de la funcion seria el conocer si un Juego dispone de un descuento.
 * Una posible idea podria ser el almacenar los Juegos que dispongas de Descuento
 * en un array de Juegos y implementar un descuento dependiendo de la posicion
 * del mismo con respecto al array creado
 */
    public function PrecioDescuento($id)
    {
        $sql = "SELECT descuento FROM navidad WHERE id LIKE $id";
        //$result = $this->db->query($sql);
        if ($this->db->query($sql)) {
            switch ($id) {
                case 10:
                    break;
                case 25:
                    break;
                case 30:
                    break;
                case 45:
                    break;
                default:
                    # code...
                    break;
            }
        }else {
            
        }
    }

    public function ActualizarJuego($id)
    {
        //poner el del banco pero haciendo referencia a la tabla actual
    }

    public function BorrarJuego($id)
    {
        //poner el del banco pero haciendo referencia a la tabla actual
    }
}
?>