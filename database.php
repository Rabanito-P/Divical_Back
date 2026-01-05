<?php
$host = getenv('NEON_HOST');   // Host de Neon
$db   = getenv('NEON_DB');     // Nombre de la DB
$user = getenv('NEON_USER');   // Usuario
$pass = getenv('NEON_PASS');   // Contraseña
$port = getenv('NEON_PORT') ?: 5432;

$dsn = "pgsql:host=$host;port=$port;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit;
}
