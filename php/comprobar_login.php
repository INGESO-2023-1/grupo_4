<?php

include_once 'conexion_bd.php';

try{
    $sql = "SELECT correo FROM USUARIOS WHERE USERNAME= :login AND PASSWORD= :password";
    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $len_query=$resultado->rowCount();
    
    if($len_query!=0){
        session_start();
        $_SESSION["usuario"] = $login;
        $correo=$resultado->fetch()[0];
        header("location: index.php");

    }else{
        header("location: login.php");
    }

} catch(Exception $e){
    die("Error: " . $e->getMessage());
}

