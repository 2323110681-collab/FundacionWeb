<?php

class PublicacionesController
{
    public function index()
    {
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/publicaciones/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
