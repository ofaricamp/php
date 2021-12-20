<?php

class Empleado
{
    private $empleado;
    private $db;

    public function __construct()
    {
        $this->empleado = array();
        $this->db = new PDO('mysql:host=localhost;dbname=empresa', "root", "");
    }

    public function getEmpleado()
    {
        $sql = "SELECT ID, Nombre, Apellidos, Telefono, departamento FROM empleado";
        foreach ($this->db->query($sql) as $res) {
            $this->empleado[] = $res;
        }
        $this->db = null;
        return $this->empleado;
        // $this->db = null; 
    }

    public function setEmpleado($nombre, $apellidos, $telefono, $departamento)
    {
        $sql  =  "INSERT  INTO  empleado(Nombre,  Apellidos,  Telefono,  departamento)  VALUES  ('"  .
            $nombre . "', '" . $apellidos . "', '" . $telefono . "', '" . $departamento . "')";
        $result = $this->db->query($sql);
        $this->db = null;
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
