<?php
$host = getenv('PGHOST');   // Host de Neon
$db   = getenv('PGDATABASE');     // Nombre de la DB
$user = getenv('PGUSER');   // Usuario
$pass = getenv('PGPASSWORD');   // Contraseña

#$port = getenv('NEON_PORT') ?: 5432;


$dsn = "pgsql:host=$host;port=$port;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit;
}
