<?php

try {
    $base = new PDO("mysql:host=localhost; dbname=proyecto_ingesoft", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtenemos los valores del formulario
    $username = $_POST['username'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmar_password = $_POST['confirmar_password'];

    session_start();
    $_SESSION["usuario"] = $username;

    // Comprobamos que las contraseñas coincidan
    if ($password != $confirmar_password) {
        echo "Las contraseñas no coinciden";
        exit;
    }

    // Insertamos los datos en la base de datos
    $query = "INSERT INTO usuarios (username, password, telefono, correo) VALUES (?, ?, ?, ?)";
    $stmt = $base->prepare($query);
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);
    $stmt->bindParam(3, $telefono);
    $stmt->bindParam(4, $email);
    $stmt->execute();

    header("location: index.php");

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}