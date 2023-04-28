<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../assets/css/login.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-expand navbar-dark bg-dark p-3">
    <a href="#" class="navbar-brand">
    <img class="d-inline-block align-top" id="logo-header" src="https://w7.pngwing.com/pngs/673/236/png-transparent-telegram-app-logo-icon-application-symbol-message-messaging-app-technology-social-media.png"
      width="100" height="100"/>
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a href="#" class="nav-link active text-white" id="nombre-pag-header">
            <h1> Proyecto IngeSoft </h1>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="container-login" class="d-flex justify-content-center align-items-center flex-column">
    <div class="text-center" id="login-form">
        <form id="login-partes" style="max-width: 400px; margin: auto;" action="comprobar_login.php" method="post">
            <input type="text" name="login" class="form-control mt-5" placeholder="Username" required autofocus>
            <input type="password" name="password" class="form-control mt-2" placeholder="Contraseña" required autofocus>
            <button type="submit" class="btn btn-primary mt-3"> Iniciar Sesión </button>
            <a href="registro.php" class="text-decoration-none link-light">
              <button type="button" class="btn btn-primary mt-3"> ¿No tienes cuenta? </button>
            </a>
        </form>
    </div>
  </div>

</body>
</html>
