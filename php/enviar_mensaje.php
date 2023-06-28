<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location: login.php");
}
include_once "conexion_bd.php";
$mensaje = $_POST["mensaje"];
$id_user = $_GET["id_user"];
$id_contacto = $_GET["id_contacto"];

$sql = "INSERT INTO mensajes (id_sender, id_receiver, mensaje) VALUES (:id_sender, :id_receiver, :mensaje)";
$query = $base->prepare($sql);
$query->bindValue(":id_sender", $id_user);
$query->bindValue(":id_receiver", $id_contacto);
$query->bindValue(":mensaje", $mensaje);
$query->execute();
header('location: mostrar_chat.php?id_user=' . $id_user . '&id_contacto=' . $id_contacto);