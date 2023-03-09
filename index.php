<?php

require_once 'models/Usuario.php';

session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: views/login.php');
    exit;
}

$usuario = $_SESSION['usuario'];

require_once 'views/index.php';
?>
