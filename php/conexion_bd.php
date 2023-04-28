<?php

try{
    $base=new PDO("mysql:host=localhost; dbname=proyecto_ingesoft", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(Exception $e){
    die("Error: " . $e->getMessage());
}