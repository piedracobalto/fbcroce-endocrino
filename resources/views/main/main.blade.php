@extends('home')

@section('content')
<div class="flex justify-center mt-4 mb-4">
    <img 
        src="{{ asset('img/logo.webp') }}" 
        alt="logo_portada" 
        class="w-full max-w-3xl h-48 object-contain"
    >
</div>

<h2 class="text-center text-3xl mt-2 font-bold text-gray-800 mb-2">
    Dra. Florencia Croce
</h2>

<p class="text-center text-gray-600 mb-4 max-w-3xl mx-auto">
    "Ofrecemos atención médica personalizada para el diagnóstico y tratamiento de enfermedades endocrinas."
</p>
@endsection
