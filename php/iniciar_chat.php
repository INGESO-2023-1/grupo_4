<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location: login.php");
}
include_once "conexion_bd.php";
$username_contacto = $_POST["username_contacto"];
$id_user = $_GET["id_user"];

$sql = "SELECT id FROM usuarios WHERE username = :username_contacto";
$query = $base->prepare($sql);
$query->bindValue(":username_contacto", $username_contacto);
$query->execute();
$id_contacto = $query->fetch()[0];

$sql = "INSERT INTO chats (id_contacto1, id_contacto2) VALUES (:id_contacto1, :id_contacto2)";
$query = $base->prepare($sql);
$query->bindValue(":id_contacto1", $id_user);
$query->bindValue(":id_contacto2", $id_contacto);
$query->execute();
header('location: mostrar_chat.php?id_user=' . $id_user . '&id_contacto=' . $id_contacto);


