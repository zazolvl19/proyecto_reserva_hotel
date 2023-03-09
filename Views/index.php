<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Hotel - Página Principal</title>
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
                    <li class="nav-item active">
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
        <!-- Descripción del hotel -->
        <section class="descripcion">
            <div class="container">
                <h2 class="text-center mb-4">Bienvenido a nuestro Hotel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Suspendisse potenti. Nam porttitor gravida lectus, ac blandit elit tincidunt id. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus.</p>
            </div>
        </section>
        <!-- Imágenes de las habitaciones -->
        <section class="habitaciones">
        <div class="container">
            <h2 class="text-center mb-4">Nuestras Habitaciones</h2>
            <div class="row">
                <div class="col-md-4">
                    <!-- Habitación 1 -->
                    <div class="card mb-4">
                        <img src="#" class="card-img-top" alt="Habitación 1">
                        <div class="card-body">
                            <h5 class="card-title">Habitación 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Habitación 2 -->
                    <div class="card mb-4">
                        <img src="#" class="card-img-top" alt="Habitación 2">
                        <div class="card-body">
                            <h5 class="card-title">Habitación 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Habitación 3 -->
                    <div class="card mb-4">
                        <img src="#" class="card-img-top" alt="Habitación 3">
                        <div class="card-body">
                            <h5 class="card-title">Habitación 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <p class="text-center">Todos los derechos reservados &copy; Hotel 2023</p>
    </div>
</footer>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>