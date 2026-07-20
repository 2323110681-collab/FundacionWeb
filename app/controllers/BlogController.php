<?php

class BlogController
{
    public function index()
    {
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/blog/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
