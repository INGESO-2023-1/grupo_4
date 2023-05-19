<?php
include_once "conexion_bd.php";
session_start();
if(!isset($_SESSION["usuario"])){
  header("location: login.php");
}

try{
    $email = $_POST["new_email"];
    $sql = "UPDATE usuarios SET correo = :new_email WHERE username = :username";
    $query = $base->prepare($sql);
    $query->bindValue(":new_email", $email);
    $query->bindValue(":username", $_SESSION["usuario"]);
    $query->execute();
    header("location: perfil.php");
}
catch(Exception $e){
    die("Error: " . $e->getMessage());
}