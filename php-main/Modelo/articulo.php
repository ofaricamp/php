<?php
class Articulo
{
    private $db;
    public function __construct()
    {
        $this->articulo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=navidad', "root", "");
    }

    public function getArticulos()
    {
        $articulos = [];
        $sql = "SELECT * FROM juegosdemesa";
        foreach ($this->db->query($sql) as $res) {
            $precioFinal = round($res['precio'] * (1 - ($res['descuento'] / 100)), 2);
            $articulos[] = [
                'id' => $res['id'],
                'nombre' => $res['nombre'],
                'precio' => $res['precio'],
                'descuento' => $res['descuento'],
                'precioFinal' => $precioFinal,
                'valorDescuento' => $res['precio'] - $precioFinal,
                'stock' => $res['stock'],
                'imagen' => $res['imagen'],
                'valoracion' => $res['valoracion']
            ];
        }
        $this->db = null;
        return $articulos;
    }

    public function crearArticulo(string $nombre, float $precio, int $descuento, int $stock, string $imagen, int $valoracion)
    {
        if (empty($imagen)) {
            $sql =  "INSERT INTO juegosdemesa(nombre,precio,descuento,stock,valoracion) 
            VALUES (:nombre,:precio,:descuento,:stock,:valoracion)";
        } else {
            $sql =  "INSERT INTO juegosdemesa(nombre,precio,descuento,stock,imagen,valoracion) 
            VALUES (:nombre,:precio,:descuento,:stock,:imagen,:valoracion)";
        }
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':precio', $precio, PDO::PARAM_STR);
        $statement->bindParam(':descuento', $descuento, PDO::PARAM_INT);
        $statement->bindParam(':stock', $stock, PDO::PARAM_INT);
        if (!empty($imagen)) {
            $statement->bindParam(':imagen', $imagen, PDO::PARAM_STR);
        }
        $statement->bindParam(':valoracion', $valoracion, PDO::PARAM_INT);

        $result = $statement->execute();
        return $result ? true : false;
    }
    public function actualizarArticulo(int $id, string $nombre, float $precio, int $descuento, int $stock, string $imagen, int $valoracion)
    {
        if (empty($imagen)) {
            $sql = 'UPDATE juegosdemesa SET nombre = :nombre,
            precio = :precio,
            descuento = :descuento,
            stock = :stock, 
            valoracion = :valoracion 
            WHERE id = :id';
        } else {
            $sql = 'UPDATE juegosdemesa SET nombre = :nombre,
           precio = :precio,
           descuento = :descuento,
           stock = :stock,
           imagen = :imagen, 
           valoracion = :valoracion 
           WHERE id = :id';
        }

        $statement = $this->db->prepare($sql);
        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':precio', $precio, PDO::PARAM_STR);
        $statement->bindParam(':descuento', $descuento, PDO::PARAM_INT);
        $statement->bindParam(':stock', $stock, PDO::PARAM_INT);
        if (!empty($imagen)) {
            $statement->bindParam(':imagen', $imagen, PDO::PARAM_STR);
        }
        $statement->bindParam(':valoracion', $valoracion, PDO::PARAM_INT);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $result = $statement->execute();
        return $result ? true : false;
    }
    public function borrarArticulo(int $id)
    {
        $statement = $this->db->prepare('DELETE FROM juegosdemesa WHERE id = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $result = $statement->execute();
        return $result ? true : false;
    }
    public function getArticulo(int $id)
    {
        $sql = "SELECT * FROM juegosdemesa WHERE id = :id";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch();
    }
}
