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
    session_destroy();
    header("location: login.php");
}
catch(Exception $e){
    die("Error: " . $e->getMessage());
}
