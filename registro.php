<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuario - Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2>Registro de usuario</h2>
				<form method="post" action="registro.php">
					<div class="form-group">
						<label for="nombre">Nombre completo:</label>
						<input type="text" name="nombre" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email">Correo electrónico:</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="contrasena">Contraseña:</label>
						<input type="password" name="contrasena" class="form-control" minlength="8" required>
					</div>
					<div class="form-group">
						<label for="confirmar_contrasena">Confirmar contraseña:</label>
						<input type="password" name="confirmar_contrasena" class="form-control" minlength="8" required>
					</div>
					<div class="form-group">
						<label for="direccion">Dirección:</label>
						<input type="text" name="direccion" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="telefono">Teléfono:</label>
						<input type="tel" name="telefono" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="fecha_nacimiento">Fecha de nacimiento:</label>
						<input type="date" name="fecha_nacimiento" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" name="registrarse" class="btn btn-primary">Registrarse</button>
					</div>
				</form>
				<p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a>.</p>
			</div>
		</div>
	</div>
</body>
</html>
