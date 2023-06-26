<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Mensajería</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/ver_contactos.css">
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
    <h2 class="text-center my-4"> Lista de chats de 
    <?php
    session_start();
    if(!isset($_SESSION["usuario"])){
      header("location: login.php");
    }
    echo ($_SESSION["usuario"]);
    ?>
    </h2>
    <div class="row">
      <div class="col-sm">
        <div class="card mb">
          <div class="card-body">
            <p class="card-text">En orden alfabético:</p>
            <?php
            include_once "conexion_bd.php";
            $sql = "SELECT id FROM usuarios WHERE username = :username";
            $query = $base->prepare($sql);
            $query->bindValue(":username", $_SESSION["usuario"]);
            $query->execute();
            $id_user = $query->fetch()[0];

            //$sql = "SELECT id_contacto2 FROM chats WHERE id_contacto1 = :id_user";
            $sql = "SELECT id_contacto1, id_contacto2 FROM chats WHERE id_contacto1 = :id_user OR id_contacto2 = :id_user";
            $query = $base->prepare($sql);
            $query->bindValue(":id_user", $id_user);
            $query->execute();
            $resultados = $query->fetchAll();

            if (!empty($resultados)) {
              foreach ($resultados as $resultado) {
                $id_contacto1 = $resultado['id_contacto1'];
                $id_contacto2 = $resultado['id_contacto2'];

                // Obtener el ID del contacto
                $id_contacto = ($id_contacto1 == $id_user) ? $id_contacto2 : $id_contacto1;

                // Obtener el nombre del contacto utilizando su ID
                $sql = "SELECT username FROM usuarios WHERE id = :id_contacto";
                $query = $base->prepare($sql);
                $query->bindValue(":id_contacto", $id_contacto);
                $query->execute();
                $nombre_contacto = $query->fetch()[0];

                echo '<div class="contacto">';
                echo $nombre_contacto;
                echo '<form action="mostrar_chat.php" method="GET">';
                echo '<input type="hidden" name="id_contacto" value="'.$id_contacto.'">';
                echo '<input type="hidden" name="id_user" value="'.$id_user.'">';
                echo '<button type="submit">Mostrar chat</button>';
                echo '</form>';
                echo '</div>';
              }
            } else {
              echo "No tienes chats:(";
            }
            ?>
          </div>
        </div>
        <div class="text-center">
            <form action="agregar_contacto.php" method="POST">
                <input type="text" name="contacto" class="form-control mt-5" placeholder="Nombre del contacto" required autofocus>
                <button type="submit" class="btn btn-primary mt-3">Crear nuevo chat con</button>
                <a href="index.php" class="text-decoration-none link-light">
                <button type="button" class="btn btn-primary mt-3">Atrás</button>
            </a>
            </form>
        </div>
      </div>
    </div>
  </div>
  <footer>
        Sitio Web Protegido JPA CHAT, © 2022
  </footer>

</body>
</html>
