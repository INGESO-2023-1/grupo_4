<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-expand navbar-dark bg-dark p-3">
    <a
      href="index.php"
      class="navbar-brand mb-0 h1">
      <img class="d-inline-block align-top" id="logo-header" src="https://w7.pngwing.com/pngs/673/236/png-transparent-telegram-app-logo-icon-application-symbol-message-messaging-app-technology-social-media.png"
      width="100" height="100"/>
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a href="index.php" class="nav-link active text-white" id="nombre-pag-header">
            <h1> Proyecto IngeSoft </h1>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="container-registro">
    <div class="text-center" id="registro-form">
      <form style="max-width: 400px; margin: auto;" action="procesar_registro.php" method="post">
        <input type="text" name="username" class="form-control mt-5" placeholder="Username" required autofocus>
        <input type="tel" name="telefono" class="form-control mt-2" placeholder="Telefono" required autofocus>
        <input type="email" name="email" class="form-control mt-2" placeholder="Correo electrónico" required autofocus>
        <input type="password" name="password" class="form-control mt-2" placeholder="Contraseña" required autofocus>
        <input type="password" name="confirmar_password" class="form-control mt-2" placeholder="Confirmar contraseña" required autofocus>
        <input type="password" name="img" class="form-control mt-2" placeholder="Link foto de perfil" required autofocus>
        <a href="login.php" class="text-decoration-none link-light">
              <button type="button" class="btn btn-primary mt-3"> Volver </button>
            </a>
        <button type="submit" class="btn btn-primary mt-3"> Registrarse </button>
      </form>
    </div>
  </div>

</body>
</html>