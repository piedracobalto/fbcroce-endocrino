<div>
    <!-- HEADER -->
    <header class="bg-color_principal font-texto text-color_tipografia shadow-md sticky top-0 z-50">
        <div class="flex items-center justify-between max-w-screen-xl mx-auto p-4">
            
            <!-- Logo / Nombre -->
            <h1 class="font-titulo text-2xl md:text-3xl font-bold text-white tracking-wide">
                FBC-Endocrino
            </h1>

            <!-- Botón de hamburguesa (móvil) -->
            <button id="toggleMenu" class="md:hidden text-white focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>

            <!-- NAV Desktop -->
            <nav class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <a href="{{ route('home') }}"
                   class="transition {{ Route::currentRouteName() == 'home' ? 'text-yellow-300 font-semibold' : 'text-white hover:text-yellow-200' }}">
                   Inicio
                </a>
                <a href="{{ route('acerca') }}"
                   class="transition {{ Route::currentRouteName() == 'acerca' ? 'text-yellow-300 font-semibold' : 'text-white hover:text-yellow-200' }}">
                   Acerca de
                </a>
                <a href="{{ route('servicios') }}"
                   class="transition {{ Route::currentRouteName() == 'servicios' ? 'text-yellow-300 font-semibold' : 'text-white hover:text-yellow-200' }}">
                   Servicios
                </a>
                <a href="{{ route('contacto') }}"
                   class="transition {{ Route::currentRouteName() == 'contacto' ? 'text-yellow-300 font-semibold' : 'text-white hover:text-yellow-200' }}">
                   Contacto
                </a>
            </nav>
        </div>
    </header>

    <!-- NAV Móvil -->
    <nav id="mobileMenu"
         class="md:hidden fixed top-0 right-0 h-full w-2/3 max-w-xs bg-color_principal text-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
        
        <!-- Cerrar -->
        <div class="flex justify-end p-4">
            <button id="closeMenu" class="text-white focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Links -->
        <div class="flex flex-col items-center mt-6 space-y-6 text-lg font-medium">
            <a href="{{ route('home') }}"
               class="transition {{ Route::currentRouteName() == 'home' ? 'text-yellow-300 font-semibold' : 'text-white hover:text-yellow-200' }}">
               Inicio
            </a>
            <a href="{{ route('acerca') }}"
               class="transition {{ Route::currentRouteName() == 'acerca' ? 'text-yellow-300 font-semibold' : 'text-white hover:text-yellow-200' }}">
               Acerca de
            </a>
            <a href="{{ route('servicios') }}"
               class="transition {{ Route::currentRouteName() == 'servicios' ? 'text-yellow-300 font-semibold' : 'text-white hover:text-yellow-200' }}">
               Servicios
            </a>
            <a href="{{ route('contacto') }}"
               class="transition {{ Route::currentRouteName() == 'contacto' ? 'text-yellow-300 font-semibold' : 'text-white hover:text-yellow-200' }}">
               Contacto
            </a>
        </div>
    </nav>

    <!-- Script -->
    <script>
        const toggleMenuBtn = document.getElementById('toggleMenu');
        const closeMenuBtn = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');

        toggleMenuBtn.addEventListener('click', () => {
            mobileMenu.style.transform = 'translateX(0)';
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.style.transform = 'translateX(100%)';
        });

        // Cerrar menú al hacer clic en un enlace
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.style.transform = 'translateX(100%)';
            });
        });
    </script>
</div>
