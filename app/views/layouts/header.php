<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación DU - <?php echo ucfirst($currentPage); ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        /* ==========================================
           ESTILOS PRINCIPALES - FUNDACIÓN DU
           ========================================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #f8fafc;
            color: #1a202c;
            padding-top: 0;
            margin-top: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        html, body {
            overscroll-behavior: auto;
        }
        /* HEADER - FONDO BLANCO */
        .header-white {
            background: #FFFFFF;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            border-bottom: 1px solid rgba(15, 44, 89, 0.06);
        }

        /* Logo y texto */
        .logo-text {
            color: #0F2C59;
            font-weight: 800;
            font-size: 1.25rem;
            letter-spacing: -0.5px;
        }

        .logo-text:hover {
            color: #2B72C4;
        }

        /* NAVBAR - Enlaces en color oscuro */
        .nav-link {
            position: relative;
            font-weight: 500;
            color: #1a202c;
            transition: all 0.2s ease;
        }

        .nav-link:hover {
            color: #0F2C59;
            background: #C9DDF5;
        }

        .nav-link.active {
            color: #0F2C59;
            font-weight: 600;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: #FF7A00;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        /* Dropdown - Fondo blanco con texto oscuro */
        .dropdown-menu {
            transform-origin: top center;
            border: 1px solid rgba(15, 44, 89, 0.08);
            box-shadow: 0 20px 60px -12px rgba(0, 0, 0, 0.15);
            background: #FFFFFF;
        }

        .dropdown-menu a {
            color: #0F2C59;
        }

        .dropdown-menu a:hover {
            background: #C9DDF5;
        }

        .dropdown-btn {
            color: #1a202c;
        }

        .dropdown-btn:hover {
            color: #0F2C59;
            background: #C9DDF5;
        }

        @media (min-width: 1024px) {
            .group:hover .dropdown-menu {
                opacity: 1 !important;
                visibility: visible !important;
                transform: translateY(0) scale(1);
            }
        }

        /* Social Links */
        .social-link {
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: translateY(-3px);
        }

        /* Animaciones */
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .pulse-animation {
            animation: pulse 2s ease-in-out infinite;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 80vh;
            display: flex;
            align-items: center;
            overflow: visible;
            margin-top: 0;
            padding-top: 0;
        }

        .hero-section .hero-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .hero-section .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(15, 44, 89, 0.88) 0%, rgba(15, 44, 89, 0.70) 100%);
            z-index: 1;
        }

        .hero-section .hero-content {
            position: relative;
            z-index: 2;
            padding-top: 20px;
        }

        /* Buscador - Estilo claro */
        .search-input {
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            color: #1a202c;
            transition: all 0.3s ease;
        }

        .search-input::placeholder {
            color: #94a3b8;
        }

        .search-input:focus {
            background: #ffffff;
            border-color: #2B72C4;
            outline: none;
            box-shadow: 0 0 0 3px rgba(43, 114, 196, 0.2);
        }

        .search-btn {
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            color: #0F2C59;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            background: #FF7A00;
            border-color: #FF7A00;
            color: #FFFFFF;
        }

        /* Scrollbar personalizada */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #C9DDF5;
        }

        ::-webkit-scrollbar-thumb {
            background: #2B72C4;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0F2C59;
        }

        /* Logo en header */
        .logo-header {
            max-height: 50px;
            width: auto;
        }

        @media (max-width: 768px) {
            .logo-header {
                max-height: 40px;
            }
        }

        /* Main - ocupar espacio restante para que el footer quede abajo */
        main {
            padding-top: 0;
            margin-top: 0;
            flex: 1 0 auto;
        }

        /* Ajuste para el header fijo */
        .header-spacer {
            height: 72px;
        }

        @media (max-width: 768px) {
            .header-spacer {
                height: 64px;
            }
        }
    </style>
</head>
<body>
    <!-- ========================================== -->
    <!-- HEADER / NAVBAR - FONDO BLANCO -->
    <!-- ========================================== -->
    <header class="header-white fixed w-full top-0 z-50">
        <nav class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo clickeable -->
                <a href="/FundacionWeb/" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                    <img src="/FundacionWeb/public/img/logos/logo_fundacion.jpg" alt="Logo Fundación DU" class="logo-header">
                    <span class="logo-text hidden md:block">Fundación DU</span>
                </a>

                <!-- Enlaces de navegación (Desktop) -->
                <div class="hidden lg:flex items-center space-x-1">
                    <!-- INICIO -->
                    <a href="/FundacionWeb/" class="nav-link px-3 py-2 rounded-lg text-sm font-medium transition-all <?php echo $currentPage === 'home' ? 'active' : ''; ?>">
                        Inicio
                    </a>

                    <!-- LA FUNDACIÓN (Dropdown) -->
                    <div class="relative group">
                        <button class="nav-link dropdown-btn px-3 py-2 rounded-lg text-sm font-medium transition-all flex items-center gap-1 <?php echo in_array($currentPage, ['nosotros', 'mensaje-presidente']) ? 'active' : ''; ?>">
                            La Fundación
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-1 w-56 rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="py-2">
                                <a href="/FundacionWeb/nosotros" class="block px-4 py-2 text-sm transition-colors">
                                    <i class="fas fa-users w-5 text-[#2B72C4]"></i> Nosotros
                                </a>
                                <a href="/FundacionWeb/mensaje-presidente" class="block px-4 py-2 text-sm transition-colors">
                                    <i class="fas fa-user-tie w-5 text-[#2B72C4]"></i> Mensaje del Presidente
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- PUBLICACIONES -->
                    <a href="/FundacionWeb/publicaciones" class="nav-link px-3 py-2 rounded-lg text-sm font-medium transition-all <?php echo $currentPage === 'publicaciones' ? 'active' : ''; ?>">
                        Publicaciones
                    </a>

                    <!-- BLOG -->
                    <a href="/FundacionWeb/blog" class="nav-link px-3 py-2 rounded-lg text-sm font-medium transition-all <?php echo $currentPage === 'blog' ? 'active' : ''; ?>">
                        Blog
                    </a>

                    <!-- AGENDA -->
                    <a href="/FundacionWeb/agenda" class="nav-link px-3 py-2 rounded-lg text-sm font-medium transition-all <?php echo $currentPage === 'agenda' ? 'active' : ''; ?>">
                        Agenda
                    </a>

                    <!-- CONTACTO -->
                    <a href="/FundacionWeb/contacto" class="nav-link px-3 py-2 rounded-lg text-sm font-medium transition-all <?php echo $currentPage === 'contacto' ? 'active' : ''; ?>">
                        Contacto
                    </a>
                </div>

                <!-- Buscador + Menú móvil -->
                <div class="flex items-center gap-3">
                        <!-- Buscador -->
                        <form action="/FundacionWeb/buscar" method="get" class="hidden md:flex items-center" role="search">
                            <input name="q" type="text" placeholder="Buscar..." class="search-input px-3 py-1.5 rounded-l-lg text-sm w-40 focus:w-48 transition-all duration-300">
                            <button type="submit" class="search-btn px-3 py-1.5 rounded-r-lg">
                                <i class="fas fa-search text-sm"></i>
                            </button>
                        </form>
                    
                    <!-- Botón menú móvil -->
                    <button id="menuBtn" class="lg:hidden text-[#0F2C59] text-2xl hover:text-[#FF7A00] transition-colors">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

            <!-- Menú móvil -->
            <div id="mobileMenu" class="lg:hidden hidden mt-4 pb-4 space-y-2">
                <!-- Buscador móvil -->
                <form action="/FundacionWeb/buscar" method="get" class="flex items-center px-2">
                    <input name="q" type="text" placeholder="Buscar..." class="search-input px-3 py-2 rounded-l-lg text-sm w-full">
                    <button type="submit" class="search-btn px-3 py-2 rounded-r-lg">
                        <i class="fas fa-search text-sm"></i>
                    </button>
                </form>

                <a href="/FundacionWeb/" class="block text-[#0F2C59] hover:bg-[#C9DDF5] px-4 py-2 rounded-lg transition-colors">Inicio</a>
                
                <button class="mobile-dropdown-btn w-full text-left text-[#0F2C59] hover:bg-[#C9DDF5] px-4 py-2 rounded-lg transition-colors flex items-center justify-between">
                    <span>La Fundación</span>
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 space-y-1">
                    <a href="/FundacionWeb/nosotros" class="block text-[#0F2C59] hover:text-[#0F2C59] hover:bg-[#C9DDF5] px-4 py-1 text-sm rounded">Nosotros</a>
                    <a href="/FundacionWeb/mensaje-presidente" class="block text-[#0F2C59] hover:text-[#0F2C59] hover:bg-[#C9DDF5] px-4 py-1 text-sm rounded">Mensaje del Presidente</a>
                </div>

                <a href="/FundacionWeb/publicaciones" class="block text-[#0F2C59] hover:bg-[#C9DDF5] px-4 py-2 rounded-lg transition-colors">Publicaciones</a>
                <a href="/FundacionWeb/blog" class="block text-[#0F2C59] hover:bg-[#C9DDF5] px-4 py-2 rounded-lg transition-colors">Blog</a>
                <a href="/FundacionWeb/agenda" class="block text-[#0F2C59] hover:bg-[#C9DDF5] px-4 py-2 rounded-lg transition-colors">Agenda</a>
                <a href="/FundacionWeb/contacto" class="block text-[#0F2C59] hover:bg-[#C9DDF5] px-4 py-2 rounded-lg transition-colors">Contacto</a>
            </div>
        </nav>
    </header>

    <div class="header-spacer" aria-hidden="true"></div>

    <main>