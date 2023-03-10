<?php

class Trabajador
{
    private $idTrabajador;
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $telefono;
    private $email;
    private $cargo;
    private $sueldo;
    private $usuario;
    private $contrasenna;

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
        $query = "INSERT INTO trabajadores (nombre, apellido, dni, direccion, telefono, email, cargo, sueldo, usuario, contrasenna) 
                  VALUES ('$this->nombre', '$this->apellido', '$this->dni', '$this->direccion', '$this->telefono', '$this->email', '$this->cargo', '$this->sueldo', '$this->usuario', '$this->contrasenna')";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function read()
    {
        $connection = Open();
        $query = "SELECT * FROM trabajadores";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function update()
    {
        $connection = Open();
        $query = "UPDATE trabajadores 
                  SET nombre = '$this->nombre', apellido = '$this->apellido', dni = '$this->dni', direccion = '$this->direccion', telefono = '$this->telefono', email = '$this->email', cargo = '$this->cargo', sueldo = '$this->sueldo', usuario = '$this->usuario', contrasenna = '$this->contrasenna' 
                  WHERE idTrabajador = '$this->idTrabajador'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function delete()
    {
        $connection = Open();
        $query = "DELETE FROM trabajadores WHERE idTrabajador = '$this->idTrabajador'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }
}

?>
