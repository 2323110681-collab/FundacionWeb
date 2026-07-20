<!-- ========================================== -->
<!-- PÁGINA: CONTACTO CON MAPA -->
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

                <!-- Información de contacto + Mapa -->
                <div>
                    <div class="bg-[#0F2C59] rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-6">Información de contacto</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <i class="fas fa-map-marker-alt text-[#63A4E2] text-xl mt-1"></i>
                                <div>
                                    <p class="font-semibold">Dirección</p>
                                    <p class="text-gray-300 text-sm">Universidad Nacional Tecnológica de Lima Sur</p>
                                    <p class="text-gray-300 text-sm">Villa El Salvador, Lima</p>
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

                        <!-- Mapa mini -->
                        <div class="mt-6 rounded-xl overflow-hidden">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.506266870106!2d-76.93517112493618!3d-12.213961888036076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b9588abb2853%3A0x4bae8a2bca307eb6!2sUniversidad%20Nacional%20Tecnol%C3%B3gica%20de%20Lima%20Sur!5e0!3m2!1ses!2spe!4v1784548525396!5m2!1ses!2spe" 
                                width="100%" 
                                height="150" 
                                style="border:0; display:block;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="strict-origin-when-cross-origin">
                            </iframe>
                        </div>

                        <!-- Redes sociales -->
                        <div class="mt-6 pt-6 border-t border-gray-700">
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