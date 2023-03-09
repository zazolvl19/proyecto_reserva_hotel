<?php

class consumo
{
    private $idConsumo;
    private $idReserva;
    private $idProducto;
    private $cantidad;
    private $subtotal;

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
        $query = "INSERT INTO consumos (idReserva, idProducto, cantidad, subtotal) 
                  VALUES ('$this->idReserva', '$this->idProducto', '$this->cantidad', '$this->subtotal')";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function read()
    {
        $connection = Open();
        $query = "SELECT * FROM consumos";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function update()
    {
        $connection = Open();
        $query = "UPDATE consumos 
                  SET idReserva = '$this->idReserva', idProducto = '$this->idProducto', cantidad = '$this->cantidad', subtotal = '$this->subtotal' 
                  WHERE idConsumo = '$this->idConsumo'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function delete()
    {
        $connection = Open();
        $query = "DELETE FROM consumos WHERE idConsumo = '$this->idConsumo'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }
}

?>