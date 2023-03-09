<?php

class ReservasController
{
    public function index()
    {
        $reservas = Reserva::read();
        require_once('views/reservas/index.php');
    }

    public function create()
    {
        if (!isset($_POST['submit'])) {
            require_once('views/reservas/create.php');
        } else {
            $reserva = new Reserva();
            $reserva->idCliente = $_POST['idCliente'];
            $reserva->idHabitacion = $_POST['idHabitacion'];
            $reserva->fechaIngreso = $_POST['fechaIngreso'];
            $reserva->fechaSalida = $_POST['fechaSalida'];
            $reserva->cantidadPersonas = $_POST['cantidadPersonas'];
            $reserva->costoTotal = $_POST['costoTotal'];
            $reserva->create();
            header('Location: index.php?controller=reservas&action=index');
        }
    }

    public function update()
    {
        if (!isset($_POST['submit'])) {
            $reserva = Reserva::getById($_GET['idReserva']);
            require_once('views/reservas/update.php');
        } else {
            $reserva = new Reserva();
            $reserva->idReserva = $_POST['idReserva'];
            $reserva->idCliente = $_POST['idCliente'];
            $reserva->idHabitacion = $_POST['idHabitacion'];
            $reserva->fechaIngreso = $_POST['fechaIngreso'];
            $reserva->fechaSalida = $_POST['fechaSalida'];
            $reserva->cantidadPersonas = $_POST['cantidadPersonas'];
            $reserva->costoTotal = $_POST['costoTotal'];
            $reserva->update();
            header('Location: index.php?controller=reservas&action=index');
        }
    }

    public function delete()
    {
        Reserva::delete($_GET['idReserva']);
        header('Location: index.php?controller=reservas&action=index');
    }
}

?>