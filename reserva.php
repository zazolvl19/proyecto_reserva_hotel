<?php

class reserva
{
    private $idReserva;
    private $idCliente;
    private $idHabitacion;
    private $fechaIngreso;
    private $fechaSalida;
    private $cantidadPersonas;
    private $costoTotal;

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
        $query = "INSERT INTO reservas (idCliente, idHabitacion, fechaIngreso, fechaSalida, cantidadPersonas, costoTotal) 
                  VALUES ('$this->idCliente', '$this->idHabitacion', '$this->fechaIngreso', '$this->fechaSalida', '$this->cantidadPersonas', '$this->costoTotal')";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function read()
    {
        $connection = Open();
        $query = "SELECT * FROM reservas";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function update()
    {
        $connection = Open();
        $query = "UPDATE reservas 
                  SET idCliente = '$this->idCliente', idHabitacion = '$this->idHabitacion', fechaIngreso = '$this->fechaIngreso', fechaSalida = '$this->fechaSalida', cantidadPersonas = '$this->cantidadPersonas', costoTotal = '$this->costoTotal' 
                  WHERE idReserva = '$this->idReserva'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function delete()
    {
        $connection = Open();
        $query = "DELETE FROM reservas WHERE idReserva = '$this->idReserva'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }
}

?>
