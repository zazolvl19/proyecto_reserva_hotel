<?php

class cliente
{
    private $idCliente;
    private $nombres;
    private $apellidos;
    private $dni;
    private $telefono;
    private $email;
    private $direccion;

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
        $query = "INSERT INTO clientes (nombres, apellidos, dni, telefono, email, direccion) 
                  VALUES ('$this->nombres', '$this->apellidos', '$this->dni', '$this->telefono', '$this->email', '$this->direccion')";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function read()
    {
        $connection = Open();
        $query = "SELECT * FROM clientes";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function update()
    {
        $connection = Open();
        $query = "UPDATE clientes 
                  SET nombres = '$this->nombres', apellidos = '$this->apellidos', dni = '$this->dni', telefono = '$this->telefono', email = '$this->email', direccion = '$this->direccion' 
                  WHERE idCliente = '$this->idCliente'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function delete()
    {
        $connection = Open();
        $query = "DELETE FROM clientes WHERE idCliente = '$this->idCliente'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }
}

?>