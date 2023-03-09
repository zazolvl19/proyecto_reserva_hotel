<?php

class Pago
{
    private $idPago;
    private $idReserva;
    private $fechaPago;
    private $monto;

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
        $query = "INSERT INTO pagos (idReserva, fechaPago, monto) 
                  VALUES ('$this->idReserva', '$this->fechaPago', '$this->monto')";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function read()
    {
        $connection = Open();
        $query = "SELECT * FROM pagos";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function update()
    {
        $connection = Open();
        $query = "UPDATE pagos 
                  SET idReserva = '$this->idReserva', fechaPago = '$this->fechaPago', monto = '$this->monto' 
                  WHERE idPago = '$this->idPago'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function delete()
    {
        $connection = Open();
        $query = "DELETE FROM pagos WHERE idPago = '$this->idPago'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }
}

?>