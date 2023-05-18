<?php
include_once "conexion_bd.php";
session_start();
if(!isset($_SESSION["usuario"])){
  header("location: login.php");
}

try{
    $password = $_POST["new_password"];
    $sql = "UPDATE usuarios SET password = :new_password WHERE username = :username";
    $query = $base->prepare($sql);
    $query->bindValue(":new_password", $password);
    $query->bindValue(":username", $_SESSION["usuario"]);
    $query->execute();
    header("location: perfil.php");
}
catch(Exception $e){
    die("Error: " . $e->getMessage());
}
