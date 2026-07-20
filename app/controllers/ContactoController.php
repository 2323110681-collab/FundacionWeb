<?php

class ContactoController
{
    public function index()
    {
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/contacto/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
