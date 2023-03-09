<?php

class habitacion
{
    private $idHabitacion;
    private $numero;
    private $piso;
    private $descripcion;
    private $caracteristicas;
    private $precioNoche;
    private $estado;
    private $tipoHabitacion;

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
        $query = "INSERT INTO habitaciones (numero, piso, descripcion, caracteristicas, precioNoche, estado, tipoHabitacion) 
                  VALUES ('$this->numero', '$this->piso', '$this->descripcion', '$this->caracteristicas', '$this->precioNoche', '$this->estado', '$this->tipoHabitacion')";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function read()
    {
        $connection = Open();
        $query = "SELECT * FROM habitaciones";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function update()
    {
        $connection = Open();
        $query = "UPDATE habitaciones 
                  SET numero = '$this->numero', piso = '$this->piso', descripcion = '$this->descripcion', caracteristicas = '$this->caracteristicas', precioNoche = '$this->precioNoche', estado = '$this->estado', tipoHabitacion = '$this->tipoHabitacion' 
                  WHERE idHabitacion = '$this->idHabitacion'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function delete()
    {
        $connection = Open();
        $query = "DELETE FROM habitaciones WHERE idHabitacion = '$this->idHabitacion'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }
}

?>