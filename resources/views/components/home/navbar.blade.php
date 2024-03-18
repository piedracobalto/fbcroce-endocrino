<div>
    <!-- Header con botón de hamburguesa -->
    <header class="bg-color_principal font-texto text-color_tipografia p-4 text-white">
        <div class="flex items-center justify-between">
            <h1 class="font-titulo text-3xl font-bold">FC-Endocrino</h1>

            <!-- Botón de hamburguesa para dispositivos móviles -->
            <button id="toggleMenu" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Menú de navegación para escritorio -->
            <nav class="hidden md:flex items-center space-x-4">
                <a href="#" class="font-texto hover:text-gray-300 nav-item" data-target="inicio">Inicio</a>
                <a href="#" class="font-texto hover:text-gray-300 nav-item" data-target="acerca">Acerca de</a>
                <a href="#" class="font-texto hover:text-gray-300 nav-item" data-target="servicios">Servicios</a>
                <a href="#" class="font-texto hover:text-gray-300 nav-item" data-target="contacto">Contacto</a>
            </nav>
        </div>
    </header>

    <!-- Menú lateral para dispositivos móviles -->
    <nav id="mobileMenu" class="md:hidden fixed top-0 right-0 h-full w-1/2 bg-color_principal text-white p-4 transform translate-x-full transition-transform ease-in-out duration-300">
        <div class="flex justify-end">
            <button id="closeMenu" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Menú de navegación para dispositivos móviles -->
        <div class="flex flex-col items-center mt-8 space-y-4">
            <a href="#" class="font-texto text-color_tipografia hover:text-gray-300 nav-item" data-target="inicio">Inicio</a>
            <a href="#" class="font-texto text-color_tipografia hover:text-gray-300 nav-item" data-target="acerca">Acerca de</a>
            <a href="#" class="font-texto text-color_tipografia hover:text-gray-300 nav-item" data-target="servicios">Servicios</a>
            <a href="#" class="font-texto text-color_tipografia hover:text-gray-300 nav-item" data-target="contacto">Contacto</a>
        </div>
    </nav>

    <!-- Menú lateral para dispositivos móviles -->
    <!-- ... (código del menú lateral) ... -->

    <!-- Script para manejar la apertura y cierre del menú lateral y el marcado del elemento seleccionado -->
    <script>
        const toggleMenuBtn = document.getElementById('toggleMenu');
        const closeMenuBtn = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');
        const navItems = document.querySelectorAll('.nav-item');

        function handleMenuClick(target) {
            // Remover la clase 'text-color_fondo' de todos los elementos
            navItems.forEach(navItem => navItem.classList.remove('text-color_fondo'));
            // Agregar la clase 'text-color_fondo' al elemento clicado en ambos menús
            const matchingNavItem = document.querySelector(`[data-target="${target}"]`);
            matchingNavItem.classList.add('text-color_fondo');

            // También, aplicar el mismo cambio al menú de hamburguesa
            const matchingMobileNavItem = document.querySelector(`#mobileMenu [data-target="${target}"]`);
            matchingMobileNavItem.classList.add('text-color_fondo');
        }

        toggleMenuBtn.addEventListener('click', function () {
            mobileMenu.style.transform = 'translateX(0)';
        });

        closeMenuBtn.addEventListener('click', function () {
            mobileMenu.style.transform = 'translateX(100%)';
        });

        navItems.forEach(item => {
            item.addEventListener('click', function () {
                const target = this.getAttribute('data-target');
                handleMenuClick(target);

                // Cerrar el menú lateral en dispositivos móviles
                mobileMenu.style.transform = 'translateX(100%)';
            });
        });
    </script>
</div>