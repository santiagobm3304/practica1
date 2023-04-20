<?php

$contraseña = "fXpOmsgxS1MqasfXSCcr";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";

$rutaServidor = "postgresql://postgres:fXpOmsgxS1MqasfXSCcr@containers-us-west-203.railway.app:5883/railway";
$puerto = "5883";

try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATIR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}


?>