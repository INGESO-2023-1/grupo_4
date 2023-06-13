<?php
include_once "conexion_bd.php";
session_start();
if(!isset($_SESSION["usuario"])){
    header("location: login.php");
}

$sql = "SELECT id FROM usuarios WHERE username = :username";
$query = $base->prepare($sql);
$query->bindValue(":username", $_SESSION["usuario"]);
$query->execute();
$id_user = $query->fetch()[0];

$id_contacto = $_GET["id"];
$sql = "DELETE FROM contactos WHERE id_user = :id_user AND id_contacto = :id_contacto";
$query = $base->prepare($sql);
$query->bindValue(":id_user", $id_user);
$query->bindValue(":id_contacto", $id_contacto);
$query->execute();
header("location: ver_contactos.php");
exit;