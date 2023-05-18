<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Mensajería</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/perfil.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-expand navbar-dark bg-dark p-3">
    <a href="index.php" class="navbar-brand">
      <img class="d-inline-block align-top" id="logo-header" src="https://w7.pngwing.com/pngs/673/236/png-transparent-telegram-app-logo-icon-application-symbol-message-messaging-app-technology-social-media.png"
      width="60" height="60" alt="Logo de la aplicación">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a href="index.php" class="nav-link active text-white" id="nombre-pag-header">
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
    <div class="profile">
      <img src="
      <?php
          include_once "conexion_bd.php";
          $sql = "SELECT img FROM USUARIOS WHERE USERNAME= :usuario";
          $query=$base->prepare($sql);
          $query->bindValue(":usuario", $_SESSION["usuario"]);
          $query->execute();
          $resultado = $query->fetch();
          echo $resultado[0];
        ?>"
      alt="Imagen de perfil" id="img-perfil">
    </div>
  </div>

  <div class="col-sm-6">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Cambiar nombre de usuario</h5>
            <form action="update_username.php" method="post">
              <input type="text" name="new_username" class="form-control mt-3 mb-3" placeholder="Nuevo nombre de usuario" required autofocus>
              <button type="submit" class="btn btn-primary"> Actualizar perfil </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Cambiar contraseña</h5>
            <form action="update_password.php" method="post">
              <input type="text" name="new_password" class="form-control mt-3 mb-3" placeholder="Nueva contraseña" required autofocus>
              <button type="submit" class="btn btn-primary"> Actualizar perfil </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Cambiar correo electrónico</h5>
            <form action="update_email.php" method="post">
              <input type="text" name="new_email" class="form-control mt-3 mb-3" placeholder="Nuevo correo electrónico" required autofocus>
              <button type="submit" class="btn btn-primary"> Actualizar perfil </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Cambiar número de teléfono</h5>
            <form action="update_tel.php" method="post">
              <input type="text" name="new_tel" class="form-control mt-3 mb-3" placeholder="Nuevo número de teléfono" required autofocus>
              <button type="submit" class="btn btn-primary"> Actualizar perfil </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Cambiar foto de perfil</h5>
            <form action="update_img.php" method="post">
              <input type="text" name="new_img" class="form-control mt-3 mb-3" placeholder="Nueva foto de perfil" required autofocus>
              <button type="submit" class="btn btn-primary"> Actualizar perfil </button>
            </form>
          </div>
        </div>
      </div>
    </div>

<footer>
  Sitio Web Protegido JPA CHAT, Copyright © 2022
</footer>

</body>
</html>
