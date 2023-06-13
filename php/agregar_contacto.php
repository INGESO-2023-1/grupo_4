<?php

include_once "conexion_bd.php";
session_start();
if(!isset($_SESSION["usuario"])){
    header("location: login.php");
}

$contacto = $_POST["contacto"];
$sql = "SELECT id FROM usuarios WHERE username = :contacto";
$query = $base->prepare($sql);
$query->bindValue(":contacto", $contacto);
$query->execute();
$id_contacto = $query->fetch()[0];
if(empty($id_contacto)){
    header("location: ver_contactos.php");
    exit;
}
else{
    $sql = "SELECT id FROM usuarios WHERE username = :username";
    $query = $base->prepare($sql);
    $query->bindValue(":username", $_SESSION["usuario"]);
    $query->execute();
    $id_user = $query->fetch()[0];

    $sql = "INSERT INTO contactos VALUES (:id_user, :id_contacto)";
    $query = $base->prepare($sql);
    $query->bindValue(":id_user", $id_user);
    $query->bindValue(":id_contacto", $id_contacto);
    $query->execute();
    header("location: ver_contactos.php");
    exit;
}