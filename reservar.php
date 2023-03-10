<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Hotel - Reservar</title>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Habitaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <main class="main">
<!-- Formulario de reserva -->
<form action="#" method="post">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="tel" class="form-control" id="telefono" name="telefono" required>
    </div>
    <div class="form-group">
        <label for="fechaIngreso">Fecha de ingreso:</label>
        <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" required>
    </div>
    <div class="form-group">
        <label for="fechaSalida">Fecha de salida:</label>
        <input type="date" class="form-control" id="fechaSalida" name="fechaSalida" required>
    </div>
    <div class="form-group">
        <label for="cantidadPersonas">Cantidad de personas:</label>
        <input type="number" class="form-control" id="cantidadPersonas" name="cantidadPersonas" required>
    </div>
    <div class="form-group">
        <label for="habitacion">Habitación:</label>
        <select class="form-control" id="habitacion" name="habitacion" required>
            <option>Seleccione una habitación</option>
            <option>Habitación 1</option>
            <option>Habitación 2</option>
            <option>Habitación 3</option>
            <option>Habitación 4</option>
        </select>
    </div>
    <div class="form-group">
        <label for="total">Total:</label>
        <input type="number" class="form-control" id="total" name="total" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Reservar</button>
</form>
</div>
</section>
<!-- Footer -->
<footer class="footer bg-light">
    <p class="text-center">&copy; Todos los derechos reservados</p>
</footer>
</body>
</html>