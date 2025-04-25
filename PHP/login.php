<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fuentes de titulo/texto -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>
  <!-- formualrio del ingreso a sistema-->
  <div class="container login-container">
    <h2>Ingreso al sistema</h2><!-- titulo-->
    <form><!-- etiqueta formulario-->
      <div class="form-group">
        <label for="username"><i class="fas fa-user"></i> Usuario:</label><!-- texto-->
        <input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario" required><!-- boton tipo texto-->
      </div>
      <div class="form-group">
        <label for="password"><i class="fas fa-lock"></i> Contraseña:</label><!-- texto-->
        <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required><!-- boton tipo password-->
      </div>
      <div class="button-container">
        <a href="index.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Volver</a><!-- boton con link -->
        <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar</button><!-- boton enviar (tipo submit)-->
      </div>
      <div class="text-muted">
        <p>¿Olvidaste tu contraseña? <a href="#">Recupérala aquí</a></p> <!-- texto con link-->
      </div>
    </form>
  </div>
  <!-- Script del Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>

