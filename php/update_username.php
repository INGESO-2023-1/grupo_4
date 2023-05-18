<?php
include_once "conexion_bd.php";
session_start();
if(!isset($_SESSION["usuario"])){
  header("location: login.php");
}

try{
    $usuario = $_POST["new_username"];
    $sql = "UPDATE usuarios SET username = :new_username WHERE username = :username";
    $query = $base->prepare($sql);
    $query->bindValue(":new_username", $usuario);
    $query->bindValue(":username", $_SESSION["usuario"]);
    $query->execute();
    $_SESSION["usuario"] = $usuario;
    header("location: perfil.php");
}
catch(Exception $e){
    echo("Error. Lo más probable es que el nombre de usuario ingresado ya está ocupado, intenta otro");
}
