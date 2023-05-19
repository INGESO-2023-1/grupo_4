<?php
include_once "conexion_bd.php";
session_start();
if(!isset($_SESSION["usuario"])){
  header("location: login.php");
}

try{
    $img = $_POST["new_img"];
    $sql = "UPDATE usuarios SET img = :new_img WHERE username = :username";
    $query = $base->prepare($sql);
    $query->bindValue(":new_img", $img);
    $query->bindValue(":username", $_SESSION["usuario"]);
    $query->execute();
    header("location: perfil.php");
}
catch(Exception $e){
    die("Error: " . $e->getMessage());
}