<?php

class AgendaController
{
    public function index()
    {
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/agenda/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
