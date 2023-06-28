<?php
include_once "conexion_bd.php";
session_start();
if(!isset($_SESSION["usuario"])){
  header("location: login.php");
}

try{
    $sql = "DELETE FROM usuarios WHERE username = :username";
    $query = $base->prepare($sql);
    $query->bindValue(":username", $_SESSION["usuario"]);
    $query->execute();

    $sql = "SELECT id FROM usuarios WHERE username = :username";
    $query = $base->prepare($sql);
    $query->bindValue(":username", $_SESSION["usuario"]);
    $query->execute();
    $id_user = $query->fetch()[0];

    $sql = "DELETE FROM nombre_tabla WHERE id_contacto1 = :id OR id_contacto2 = :id";
    $query = $base->prepare($sql);
    $query->bindValue(":id", $id_user);
    $query->execute();
    session_destroy();
    header("location: login.php");
}
catch(Exception $e){
    die("Error: " . $e->getMessage());
}
