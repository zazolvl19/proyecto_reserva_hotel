<?php

function Open()
{
    $host = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $database = "proyectovn_reservas_hotel";

    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    return $connection;
}

function Close($connection)
{
    mysqli_close($connection);
}


?>