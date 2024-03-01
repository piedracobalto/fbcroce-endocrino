<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>FB endocrino</title>


        
    </head>
    <body class="bg-gray-100">

        <div id="app" class="mx-auto w-full max-w-screen-lg">
            <x-home.navbar />
           
    
            <!-- Contenido principal (mantén el resto del contenido igual) -->
            <div class="container mx-auto mt-4">
                <main class="bg-white p-4 shadow-md rounded-md">
                    <!-- Contenido principal -->
                    @yield('content')
                </main>
            </div>
    
            <x-home.footer />
            
        </div>

        
    
    
    
    </body>
</html>
