<?php

//configurar datos de acceso a la bbdd

$host = "localhost";  //en caso que no sea localhost deberan cambiar solo eso
$dbname = "udemy_delivery";   
$user = "root";
$password = "";

try {
    // Crear la conexión usando PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    // Configurar el modo de error de PDO para que arroje excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>