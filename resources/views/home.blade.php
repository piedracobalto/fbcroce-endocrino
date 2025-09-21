<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Neuton:ital,wght@0,200;0,300;0,400;0,700;0,800;1,400&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    


        <title>FC endocrino</title>
        
    </head>
    <body class="flex font-texto text-color_tipografia bg-color_fondo min-h-screen">
        <div id="app" class="flex flex-col mx-auto w-full max-w-screen-xl">
            
            <!-- NAVBAR -->
            <x-home.navbar />

            <!-- CONTENIDO PRINCIPAL -->
            <main class="flex-1">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-10">
                    <section class="bg-white rounded-2xl shadow-lg p-6 md:p-10">
                        @yield('content')
                    </section>
                </div>
            </main>

            <!-- FOOTER -->
            <x-home.footer />
        </div>
    </body>
</html>
