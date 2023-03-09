<?php

class SeguridadController
{
    public function login()
    {
        $usuario = $_POST["usuario"];
        $contrasenna = $_POST["contrasenna"];

        $connection = Open();
        $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasenna = '$contrasenna'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        Close($connection);

        if ($row) 
        {
            session_start();
            $_SESSION["usuario"] = $row["usuario"];
            $_SESSION["tipoUsuario"] = $row["tipoUsuario"];
            header("Location: ../index.php");
        } 
        else 
        {
            header("Location: ../Views/login.php?error=1");
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: ../index.php");
    }

    public function verificarSesion()
    {
        session_start();
        if (!isset($_SESSION["usuario"])) 
        {
            header("Location: ../Views/login.php");
        }
    }
}

?>