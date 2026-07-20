    </main>

    <!-- ========================================== -->
    <!-- FOOTER -->
    <!-- ========================================== -->
    <footer class="bg-[#0F2C59] text-white pt-12 pb-6 mt-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <!-- Izquierda: Copyright y enlaces legales -->
                <div class="text-center md:text-left">
                    <p class="text-sm text-gray-300 mb-2">
                        &copy; <?php echo date('Y'); ?> Fundación DU. Todos los derechos reservados.
                    </p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4 text-sm">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Aviso Legal</a>
                        <span class="text-gray-600">|</span>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacidad y Cookies</a>
                    </div>
                </div>

                <!-- Derecha: Redes Sociales -->
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-400 hidden md:block">Síguenos:</span>
                    <a href="#" class="social-link text-gray-400 hover:text-white hover:bg-[#FF7A00] transition-all w-10 h-10 rounded-full flex items-center justify-center">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link text-gray-400 hover:text-white hover:bg-[#FF7A00] transition-all w-10 h-10 rounded-full flex items-center justify-center">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="#" class="social-link text-gray-400 hover:text-white hover:bg-[#FF7A00] transition-all w-10 h-10 rounded-full flex items-center justify-center">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Línea divisoria inferior -->
            <div class="border-t border-gray-700 mt-6 pt-6 text-center text-xs text-gray-500">
                <p>Fundación para el Desarrollo Universitario de Lima Sur</p>
            </div>
        </div>
    </footer>

    <!-- Scripts (solo los que no están en el header) -->
    <!-- El script del menú ya está en header.php -->
</body>
</html>
