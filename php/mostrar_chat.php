<?php
include_once "conexion_bd.php";
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
}

$id_user = $_GET["id_user"];
$id_contacto = $_GET["id_contacto"];

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
        echo '<div class="mensaje">';
        echo '<span class="nombre">' . $nombre_sender . '</span>';
        echo '</div>';
    }

    echo '<div class="mensaje">';
    echo '<span class="contenido">' . $contenido . '</span>';
    echo '</div>';

    $last_sender = $sender; // Actualizar el último remitente
}
?>
