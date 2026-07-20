<?php

class FundacionController
{
    public function nosotros()
    {
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/fundacion/nosotros.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }

    public function mensajePresidente()
    {
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/fundacion/mensaje-presidente.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
