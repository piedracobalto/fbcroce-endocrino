<footer class="bg-white text-[#1D1C29] mt-10 rounded-xl shadow-md">
    <div class="max-w-screen-xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center">
        
        <!-- Navegación -->
        <div class="flex space-x-6 mb-4 md:mb-0 font-Rubrik text-sm">
            <a href="{{ route('home') }}" class="hover:text-[#907EE9] transition">Inicio</a>
            <a href="{{ route('acerca') }}" class="hover:text-[#907EE9] transition">Acerca de</a>
            <a href="{{ route('servicios') }}" class="hover:text-[#907EE9] transition">Servicios</a>
            <a href="{{ route('contacto') }}" class="hover:text-[#907EE9] transition">Contacto</a>
        </div>

        <!-- Contacto -->
        <div class="flex flex-col text-center md:text-right space-y-1 font-Rubrik text-sm text-[#1D1C29]">
            <p>📍 Bolívar 1740. Planta Baja "E" - Barracas (CABA)</p>
            <p>✉️ <a href="mailto:fbcroce.endocrino@gmail.com">fbcroce.endocrino@gmail.com</a></p>
        </div>
    </div>

    <!-- Línea inferior -->
    <div class="border-t border-[#907EE9] mt-4 rounded-b-xl">
        <p class="text-center text-[#1D1C29] text-sm py-2 font-Rubrik">
            &copy; {{ date('Y') }} FC-Endocrino. Todos los derechos reservados. Hecho Por Pedro Cuomo Ghio
        </p>
    </div>
</footer>
