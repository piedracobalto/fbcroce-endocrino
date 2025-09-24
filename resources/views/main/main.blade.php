@extends('home')

@section('content')
<div class="flex justify-center mt-4">
    <img 
    src="{{ asset('img/logo.webp') }}" 
    alt="logo_portada" 
    class="w-[24rem] object-contain"
/>
</div>

<p class="text-center text-gray-600 mb-4 max-w-3xl mx-auto">
    "Ofrecemos atención médica personalizada para el diagnóstico y tratamiento de enfermedades endocrinas."
</p>
@endsection
