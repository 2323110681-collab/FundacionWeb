<?php
// Mostrar errores para desarrollo
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtener la ruta solicitada
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Definir rutas permitidas
$routes = [
    'home' => 'home/index',
    'nosotros' => 'fundacion/nosotros',
    'mensaje-presidente' => 'fundacion/mensaje-presidente',
    'publicaciones' => 'publicaciones/index',
    'blog' => 'blog/index',
    'agenda' => 'agenda/index',
    'contacto' => 'contacto/index',
];

// Verificar si la ruta existe
if (!isset($routes[$page])) {
    $page = 'home';
}

// Variables globales para las vistas
$currentPage = $page;

// Incluir header
include __DIR__ . '/app/views/layouts/header.php';

// Incluir la vista correspondiente
$viewPath = __DIR__ . '/app/views/' . $routes[$page] . '.php';
if (file_exists($viewPath)) {
    include $viewPath;
} else {
    echo '<div class="container mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl font-bold text-[#0F2C59]">Página en construcción</h1>
            <p class="text-gray-600 mt-4">Estamos trabajando en esta sección.</p>
          </div>';
}

// Incluir footer
include __DIR__ . '/app/views/layouts/footer.php';
?>