<?php

class Producto
{
    private $idProducto;
    private $nombre;
    private $descripcion;
    private $precio;

    public function __construct()
    {
    }

    public function __get($property) 
    {
        if (property_exists($this, $property)) 
        {
            return $this->$property;
        }
    }

    public function __set($property, $value) 
    {
        if (property_exists($this, $property)) 
        {
            $this->$property = $value;
        }
    }

    public function create()
    {
        $connection = Open();
        $query = "INSERT INTO productos (nombre, descripcion, precio) 
                  VALUES ('$this->nombre', '$this->descripcion', '$this->precio')";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function read()
    {
        $connection = Open();
        $query = "SELECT * FROM productos";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function update()
    {
        $connection = Open();
        $query = "UPDATE productos 
                  SET nombre = '$this->nombre', descripcion = '$this->descripcion', precio = '$this->precio' 
                  WHERE idProducto = '$this->idProducto'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function delete()
    {
        $connection = Open();
        $query = "DELETE FROM productos WHERE idProducto = '$this->idProducto'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }
}

?>