<!-- ========================================== -->
<!-- PÁGINA: CONTACTO -->
<!-- ========================================== -->

<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-[#0F2C59] mb-4">Contacto</h1>
            <div class="w-24 h-1 bg-[#FF7A00] mx-auto"></div>
            <p class="text-gray-600 mt-4">¿Tienes alguna consulta? Contáctanos</p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Formulario -->
                <div class="bg-[#C9DDF5]/20 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-[#0F2C59] mb-6">Envíanos un mensaje</h3>
                    
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-[#0F2C59] mb-1">Nombre completo</label>
                            <input type="text" name="nombre" required 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#2B72C4] focus:ring-2 focus:ring-[#2B72C4]/20 transition-all outline-none">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-[#0F2C59] mb-1">Correo electrónico</label>
                            <input type="email" name="email" required 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#2B72C4] focus:ring-2 focus:ring-[#2B72C4]/20 transition-all outline-none">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-[#0F2C59] mb-1">Asunto</label>
                            <input type="text" name="asunto" required 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#2B72C4] focus:ring-2 focus:ring-[#2B72C4]/20 transition-all outline-none">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-[#0F2C59] mb-1">Mensaje</label>
                            <textarea name="mensaje" rows="4" required 
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#2B72C4] focus:ring-2 focus:ring-[#2B72C4]/20 transition-all outline-none"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-[#FF7A00] hover:bg-[#E06D00] text-white font-bold py-3 rounded-lg transition-all shadow-lg hover:shadow-xl">
                            <i class="fas fa-paper-plane mr-2"></i> Enviar mensaje
                        </button>
                    </form>
                </div>

                <!-- Información de contacto -->
                <div>
                    <div class="bg-[#0F2C59] rounded-2xl p-8 text-white h-full">
                        <h3 class="text-2xl font-bold mb-6">Información de contacto</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <i class="fas fa-map-marker-alt text-[#63A4E2] text-xl mt-1"></i>
                                <div>
                                    <p class="font-semibold">Dirección</p>
                                    <p class="text-gray-300 text-sm">Av. Ejemplo 123, Villa El Salvador, Lima</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <i class="fas fa-phone text-[#63A4E2] text-xl mt-1"></i>
                                <div>
                                    <p class="font-semibold">Teléfono</p>
                                    <p class="text-gray-300 text-sm">+51 1 555-1234</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <i class="fas fa-envelope text-[#63A4E2] text-xl mt-1"></i>
                                <div>
                                    <p class="font-semibold">Correo</p>
                                    <p class="text-gray-300 text-sm">contacto@fundaciondu.edu.pe</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <i class="fas fa-clock text-[#63A4E2] text-xl mt-1"></i>
                                <div>
                                    <p class="font-semibold">Horario</p>
                                    <p class="text-gray-300 text-sm">Lun - Vie: 8:00 am - 6:00 pm</p>
                                </div>
                            </div>
                        </div>

                        <!-- Redes sociales en contacto -->
                        <div class="mt-8 pt-6 border-t border-gray-700">
                            <p class="font-semibold mb-3">Síguenos en redes</p>
                            <div class="flex gap-3">
                                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#FF7A00] transition-all">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#FF7A00] transition-all">
                                    <i class="fab fa-x-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#FF7A00] transition-all">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>