<?php
// ESTILO POR PROCEDIMIENTOS

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_reread";

// Crear la conexion
$conn = mysqli_connect($host, $user, $pass, $db);

// Checkear la conexion
if (!$conn){
    echo "Error: No se pudo conectar a MySQL.".PHP_EQL;
    echo "Error de depuracion: " mysqli_connect_errno() . PHP_EQL;
    exit;
} else{
    mysqli_set_charset($conn, "utf8");
    }
?>