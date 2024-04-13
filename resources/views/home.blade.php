<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Neuton:ital,wght@0,200;0,300;0,400;0,700;0,800;1,400&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

        <title>FC endocrino</title>
        
    </head>
    <body class="flex font-texto text-color_tipografia bg-color_fondo">
        <div id="app" class="flex flex-col mx-auto w-full max-w-screen-lg">
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
