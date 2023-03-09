<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Hotel - Cancelar Reservación</title>
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
        <!-- Formulario de cancelación -->
        <section class="cancelar">
            <div class="container">
                <h2 class="text-center mb-4">Cancelar Reservación</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="numeroReservacion">Número de Reservación</label>
                        <input type="text" class="form-control" id="numeroReservacion" name="numeroReservacion" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cancelar Reservación</button>
                </form>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="footer">
        <p class="text-center">Todos los derechos reservados &copy; Hotel</p>
    </footer>
</body>
</html>