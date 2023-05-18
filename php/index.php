<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Mensajería</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>


  <nav class="navbar navbar-expand navbar-dark bg-dark p-3">
    <a href="#" class="navbar-brand">
      <img class="d-inline-block align-top" id="logo-header" src="https://w7.pngwing.com/pngs/673/236/png-transparent-telegram-app-logo-icon-application-symbol-message-messaging-app-technology-social-media.png"
      width="60" height="60" alt="Logo de la aplicación">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a href="#" class="nav-link active text-white" id="nombre-pag-header">
            <h1> Mensajería </h1>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="container-main" class="d-flex justify-content-center align-items-center flex-column">
    <h2 class="text-center my-4"> Bienvenido a JPA Chat, 
    <?php
    session_start();
    if(!isset($_SESSION["usuario"])){
      header("location: login.php");
    }
    echo ($_SESSION["usuario"]);
    ?>
    </h2>
    <div class="row">
      <div class="col-sm-6">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Conversaciones</h5>
            <p class="card-text">Aquí puedes ver tus conversaciones activas y acceder a ellas.</p>
            <a href="#" class="btn btn-primary">Ver conversaciones</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Contactos</h5>
            <p class="card-text">Aquí puedes buscar y agregar contactos para empezar a hablar con ellos.</p>
            <a href="#" class="btn btn-primary">Ver contactos</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Perfil</h5>
            <p class="card-text">Aquí puedes ver y modificar tu información de usuario.</p>
            <a href="perfil.php" class="btn btn-primary">Ver perfil</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Cerrar Sesión</h5>
            <p class="card-text">Aquí puedes cerrar sesión en este dispositivo.</p>
            <a href="cerrar_sesion.php" class="btn btn-primary">Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
        Sitio Web Protegido JPA CHAT, Copyright © 2022
  </footer>

</body>
</html>
