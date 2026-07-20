<!-- ========================================== -->
<!-- SECCIÓN HERO CON IMAGEN DE FONDO -->
<!-- ========================================== -->
<section class="hero-section" style="min-height: 90vh; margin-top: 0; padding-top: 0;">
    <!-- Imagen de fondo -->
    <img src="/public/img/fondo_fundacion.jpg" alt="Fondo Fundación DU" class="hero-bg">
    
    <!-- Botones -->
    <a href="/nosotros" class="...">Conócenos</a>
    <a href="/contacto" class="...">Contáctanos</a>
    <!-- Overlay -->
    <div class="hero-overlay"></div>
    
    <!-- Contenido -->
    <div class="hero-content container mx-auto px-4">
        <div class="max-w-3xl">
            <span class="inline-block bg-[#FF7A00]/20 text-[#FF7A00] px-4 py-1 rounded-full text-sm font-semibold mb-4 border border-[#FF7A00]/30">
                <i class="fas fa-graduation-cap mr-2"></i> Excelencia Educativa
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Mensaje de la<br>
                <span class="text-[#63A4E2]">Fundación DU</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8 leading-relaxed">
                Submensaje de la Fundación DU
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="/FundacionWeb/nosotros" class="bg-[#FF7A00] hover:bg-[#E06D00] text-white px-8 py-3 rounded-lg font-bold transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <i class="fas fa-info-circle mr-2"></i> Conócenos
                </a>
                <a href="/FundacionWeb/contacto" class="border-2 border-white hover:bg-white hover:text-[#0F2C59] text-white px-8 py-3 rounded-lg font-bold transition-all">
                    <i class="fas fa-envelope mr-2"></i> Contáctanos
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========================================== -->
<!-- SECCIÓN NOTICIAS -->
<!-- ========================================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-[#0F2C59]">
                <i class="fas fa-newspaper text-[#2B72C4] mr-3"></i> Noticias
            </h2>
            <a href="/FundacionWeb/publicaciones" class="text-[#2B72C4] hover:text-[#FF7A00] transition-colors font-semibold">
                Ver todas <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Noticia 1 -->
            <article class="bg-[#C9DDF5]/30 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="h-48 bg-[#2B72C4]/10 flex items-center justify-center">
                    <i class="fas fa-image text-5xl text-[#2B72C4]/30"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-[#0F2C59] mb-2">Noticia 1</h3>
                    <p class="text-gray-600 text-sm">Descripción 1</p>
                </div>
            </article>

            <!-- Noticia 2 -->
            <article class="bg-[#C9DDF5]/30 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="h-48 bg-[#2B72C4]/10 flex items-center justify-center">
                    <i class="fas fa-image text-5xl text-[#2B72C4]/30"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-[#0F2C59] mb-2">Noticia 2</h3>
                    <p class="text-gray-600 text-sm">Descripción 2</p>
                </div>
            </article>

            <!-- Noticia 3 -->
            <article class="bg-[#C9DDF5]/30 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="h-48 bg-[#2B72C4]/10 flex items-center justify-center">
                    <i class="fas fa-image text-5xl text-[#2B72C4]/30"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-[#0F2C59] mb-2">Noticia 3</h3>
                    <p class="text-gray-600 text-sm">Descripción 3</p>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- ========================================== -->
<!-- SECCIÓN PUBLICACIONES -->
<!-- ========================================== -->
<section class="py-16 bg-[#C9DDF5]/30">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#0F2C59] mb-8">
            <i class="fas fa-book text-[#2B72C4] mr-3"></i> Publicaciones
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-lg p-4 shadow-md hover:shadow-lg transition-all">
                <i class="fas fa-file-pdf text-[#FF7A00] mr-2"></i>
                <span class="text-[#0F2C59] font-medium">Publicación 1</span>
            </div>
            <div class="bg-white rounded-lg p-4 shadow-md hover:shadow-lg transition-all">
                <i class="fas fa-file-pdf text-[#FF7A00] mr-2"></i>
                <span class="text-[#0F2C59] font-medium">Publicación 2</span>
            </div>
            <div class="bg-white rounded-lg p-4 shadow-md hover:shadow-lg transition-all">
                <i class="fas fa-file-pdf text-[#FF7A00] mr-2"></i>
                <span class="text-[#0F2C59] font-medium">Publicación 3</span>
            </div>
        </div>
    </div>
</section>

<!-- ========================================== -->
<!-- SECCIÓN AGENDA -->
<!-- ========================================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#0F2C59] mb-8">
            <i class="fas fa-calendar-alt text-[#2B72C4] mr-3"></i> Agenda
        </h2>

        <div class="bg-[#C9DDF5]/20 rounded-xl p-8 text-center">
            <i class="fas fa-calendar-times text-4xl text-[#2B72C4]/50 mb-4"></i>
            <p class="text-gray-600 text-lg">Actualmente no hay ningún evento programado</p>
            
        </div>
    </div>
</section>
