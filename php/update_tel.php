<?php
include_once "conexion_bd.php";
session_start();
if(!isset($_SESSION["usuario"])){
  header("location: login.php");
}

try{
    $new_tel = $_POST["new_tel"];
    $sql = "UPDATE usuarios SET telefono = :new_tel WHERE username = :username";
    $query = $base->prepare($sql);
    $query->bindValue(":new_tel", $new_tel);
    $query->bindValue(":username", $_SESSION["usuario"]);
    $query->execute();
    header("location: perfil.php");
}
catch(Exception $e){
    die("Error: " . $e->getMessage());
}