    </main>

    <!-- ========================================== -->
    <!-- FOOTER -->
    <!-- ========================================== -->
    <footer class="bg-[#0F2C59] text-white pt-10 pb-6 mt-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6">
                <div class="w-full lg:w-2/3">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-start gap-4">
                        <div class="flex items-center gap-3">
                            <img src="/FundacionWeb/public/img/logos/logo_fundacion.jpg" alt="Logo Fundación DU" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm text-gray-300 font-semibold">Fundación DU</p>
                                <p class="text-xs text-gray-400">&copy; <?php echo date('Y'); ?>. Todos los derechos reservados.</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 text-sm text-gray-400">
                            <a href="#" class="hover:text-white transition-colors">Aviso Legal</a>
                            <span class="hidden sm:inline text-gray-600">|</span>
                            <a href="#" class="hover:text-white transition-colors">Privacidad y Cookies</a>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/3 flex justify-start lg:justify-end items-center gap-3">
                    <span class="text-sm text-gray-400 hidden md:inline">Síguenos:</span>
                    <a href="#" aria-label="Facebook" class="social-link text-gray-400 hover:text-white hover:bg-[#FF7A00] transition-all w-10 h-10 rounded-full flex items-center justify-center">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" aria-label="X" class="social-link text-gray-400 hover:text-white hover:bg-[#FF7A00] transition-all w-10 h-10 rounded-full flex items-center justify-center">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="#" aria-label="Instagram" class="social-link text-gray-400 hover:text-white hover:bg-[#FF7A00] transition-all w-10 h-10 rounded-full flex items-center justify-center">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-6 pt-6 text-center text-xs text-gray-400">
                <p>Fundación para el Desarrollo Universitario de Lima Sur</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // ==========================================
        // NAVBAR - MENÚ MÓVIL Y DROPDOWNS
        // ==========================================
        document.addEventListener('DOMContentLoaded', function() {
            // Menú móvil
            const menuBtn = document.getElementById('menuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            
            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    mobileMenu.classList.toggle('hidden');
                    const icon = this.querySelector('i');
                    icon.className = mobileMenu.classList.contains('hidden') 
                        ? 'fas fa-bars' 
                        : 'fas fa-times';
                });
                
                document.addEventListener('click', function(e) {
                    if (!mobileMenu.classList.contains('hidden') && 
                        !mobileMenu.contains(e.target) && 
                        !menuBtn.contains(e.target)) {
                        mobileMenu.classList.add('hidden');
                        const icon = menuBtn.querySelector('i');
                        icon.className = 'fas fa-bars';
                    }
                });
            }
            
            // Dropdowns en móvil
            document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('i');
                    
                    if (content.classList.contains('hidden')) {
                        content.classList.remove('hidden');
                        icon.className = 'fas fa-chevron-up text-xs';
                        
                        document.querySelectorAll('.mobile-dropdown-btn').forEach(other => {
                            if (other !== this) {
                                other.nextElementSibling.classList.add('hidden');
                                other.querySelector('i').className = 'fas fa-chevron-down text-xs';
                            }
                        });
                    } else {
                        content.classList.add('hidden');
                        icon.className = 'fas fa-chevron-down text-xs';
                    }
                });
            });

            // Scroll suave para enlaces ancla
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        e.preventDefault();
                        const headerOffset = 80;
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            console.log('%c🏛️ Fundación DU', 'font-size: 24px; font-weight: bold; color: #0F2C59;');
            console.log('%cDesarrollado para la comunidad universitaria', 'font-size: 14px; color: #2B72C4;');
            // BÚSQUEDA: redirige al escribir (debounce) o al presionar Enter
            (function() {
                const buildSearchUrl = (q) => '/FundacionWeb/buscar?q=' + encodeURIComponent(q || '');
                const desktopInput = document.querySelector('form[role="search"] input[name="q"]');
                const mobileInput = document.querySelector('#mobileMenu form input[name="q"]');
                const inputs = [desktopInput, mobileInput].filter(Boolean);
                let timer = null;

                function redirectToSearch(q) {
                    if (!q || q.trim().length === 0) return;
                    window.location.href = buildSearchUrl(q.trim());
                }

                inputs.forEach(input => {
                    input.addEventListener('keydown', function(e) {
                        if (e.key === 'Enter') {
                            e.preventDefault();
                            redirectToSearch(this.value);
                        }
                    });

                    input.addEventListener('input', function() {
                        clearTimeout(timer);
                        const val = this.value;
                        timer = setTimeout(() => redirectToSearch(val), 700);
                    });
                });
            })();
        });
    </script>
</body>
</html>