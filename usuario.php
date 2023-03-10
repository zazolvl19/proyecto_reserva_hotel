<?php

class Usuario
{
    private $idUsuario;
    private $nombreUsuario;
    private $contrasenna;
    private $tipoUsuario;

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
        $query = "INSERT INTO usuarios (nombreUsuario, contrasenna, tipoUsuario) 
                  VALUES ('$this->nombreUsuario', '$this->contrasenna', '$this->tipoUsuario')";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function read()
    {
        $connection = Open();
        $query = "SELECT * FROM usuarios";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function update()
    {
        $connection = Open();
        $query = "UPDATE usuarios 
                  SET nombreUsuario = '$this->nombreUsuario', contrasenna = '$this->contrasenna', tipoUsuario = '$this->tipoUsuario' 
                  WHERE idUsuario = '$this->idUsuario'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }

    public function delete()
    {
        $connection = Open();
        $query = "DELETE FROM usuarios WHERE idUsuario = '$this->idUsuario'";
        $result = mysqli_query($connection, $query);
        Close($connection);
        return $result;
    }
}

?>
