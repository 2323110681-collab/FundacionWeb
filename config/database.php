<?php
// ==========================================
// CONFIGURACIÓN DE BASE DE DATOS (XAMPP)
// ==========================================

define('DB_HOST', 'localhost');
define('DB_NAME', 'fundacion_du');
define('DB_USER', 'root');
define('DB_PASS', '');

// Configuración del sitio
define('SITE_NAME', 'Fundación DU');
define('SITE_URL', 'http://localhost/FundacionWeb');
define('SITE_EMAIL', 'contacto@fundaciondu.edu.pe');

// Zona horaria
date_default_timezone_set('America/Lima');

// Conexión a la base de datos
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    // No mostrar error en producción, solo en desarrollo
    // die("Error de conexión: " . $e->getMessage());
}
?>