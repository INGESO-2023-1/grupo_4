<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Mensajería</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/mostrar_chat.css">
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
    <?php
    session_start();
    if(!isset($_SESSION["usuario"])){
      header("location: login.php");
    }
    $id_contacto = $_GET["id_contacto"];
    include_once "conexion_bd.php";
    $sql = "SELECT username FROM usuarios WHERE id = :id_contacto";
    $query = $base->prepare($sql);
    $query->bindValue(":id_contacto", $id_contacto);
    $query->execute();
    $username_contacto = $query->fetch()[0];
    echo '<h2 class="text-center my-4">Chat con: '. $username_contacto;
    ?>
    </h2>
    <div class="row">
      <div class="col-sm">
        <div class="card mb">
          <div class="card-body">
            <?php
            $id_user = $_GET["id_user"];

            $sql = "SELECT m.*, u.username AS nombre_sender
            FROM mensajes AS m
            INNER JOIN usuarios AS u ON m.id_sender = u.id
            WHERE (m.id_sender = :id_user AND m.id_receiver = :id_contacto) OR (m.id_sender = :id_contacto AND m.id_receiver = :id_user)
            ORDER BY m.id ASC";
            $query = $base->prepare($sql);
            $query->bindValue(":id_user", $id_user);
            $query->bindValue(":id_contacto", $id_contacto);
            $query->execute();
            $mensajes = $query->fetchAll();

            $last_sender = null; // Variable para almacenar el último remitente

            foreach ($mensajes as $mensaje) {
                $sender = $mensaje['id_sender'];
                $receiver = $mensaje['id_receiver'];
                $contenido = $mensaje['mensaje'];
                $nombre_sender = $mensaje['nombre_sender'];
            
                // Verificar si el remitente es diferente al último remitente registrado
                if ($sender != $last_sender) {
                    if ($sender == $id_user){
                        $color = 1;
                    }
                    else{
                        $color = 2;
                    }
                    echo '<div class="mensaje-container sender-' . $color . '">';
                    echo '<span class="nombre">' . $nombre_sender . '</span>';
                    echo '</div>';
                }
            
                echo '<div class="mensaje">';
                echo '<span class="contenido">' . $contenido . '</span>';
                echo '</div>';
            
                $last_sender = $sender; // Actualizar el último remitente
            }            
            ?>
          </div>
        </div>
        <div class="text-center">
            <form action= <?php echo 'enviar_mensaje.php?id_user=' . $id_user . '&id_contacto=' . $id_contacto?>  method="POST">
                <input type="text" name="mensaje" class="form-control mt-5" placeholder="Nuevo mensaje" required autofocus>
                <button type="submit" class="btn btn-primary mt-3">Enviar mensaje</button>
                <a href="conversaciones.php" class="text-decoration-none link-light">
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
