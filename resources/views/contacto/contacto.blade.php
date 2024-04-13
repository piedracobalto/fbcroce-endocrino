@extends('home')

@section('content')
<section class="flex justify-center bg-gray-100 py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-bold text-gray-800 mb-8">Contáctame</h2>
        <p class="text-justify text-gray-600 mb-8">
            Si tenés alguna pregunta, duda o simplemente querés ponerte en contacto, no dudes en comunicarte conmigo a través de los siguientes medios.
        </p>
        {{-- GALERIA CARDS --}}
        <div class="flex justify-around">
            <div class="items-center justify-center bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center justify-center">
                    <svg class="flex  h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">Teléfono</h3>
                        <a href="https://wa.link/iifmse">+54-11-3381-5956</a> 
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="items-center space-x-4">
                    <svg class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">Correo electrónico</h3>
                        <a href="mailto:fbcroce.endocrino@gmail.com">fbcroce.endocrino@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- END GALERIA CARDS --}}
    </div>
</section>

@endsection