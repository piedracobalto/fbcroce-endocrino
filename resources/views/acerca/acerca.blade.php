@extends('home')

@section('content')
    
<h2 class="text-center text-3xl font-bold text-gray-800 mb-4">SOBRE MI 🌿</h2>

<div class="flex justify-center items-center mb-4">
    <div class="w-80 h-80 md:w-[350px] md:h-[350px] lg:w-[400px] lg:h-[400px] rounded-lg overflow-hidden">
        <img 
            src="{{ asset('img/sobre-mi.webp') }}" 
            alt="acerca_de" 
            class="object-contain w-full h-full"
        >
    </div>
</div>

<div class="space-y-3 text-gray-600 text-justify">

    <!-- Primer párrafo -->
    <p class="text-gray-700 mb-4 text-justify">
        Soy médica egresada de la Universidad de Buenos Aires (UBA) y especialista en endocrinología. Actualmente curso la Maestría en Osteología y Metabolismo Mineral en la Universidad del Salvador (USAL), lo que me permite profundizar en el área que más me apasiona: la salud ósea y el metabolismo mineral.
    </p>

    <!-- Segundo párrafo -->
    <p class="text-gray-700 mb-4 text-justify">
        Soy miembro de la Sociedad Argentina de Endocrinología y Metabolismo (SAEM) y de la Asociación Argentina para el Estudio del Hueso y Metabolismo Mineral (AAOMM).
    </p>

    <!-- Tercer párrafo -->
    <p class="text-gray-700 mb-4 text-justify">
        Además, a través de mi cuenta de Instagram 
        <a href="https://www.instagram.com/fbcroce.endocrino" target="_blank" class="text-green-600 underline">@fbcroce.endocrino</a>, 
        comparto información sobre endocrinología y osteología, con el objetivo de acercar el conocimiento médico a los pacientes y promover la salud de manera accesible.
    </p>

    <!-- Cuarto párrafo -->
    <p class="text-gray-700 text-justify">
        Brindo atención presencial en mi consultorio en Barracas (CABA) y virtual para todo el país, buscando siempre un enfoque cercano, claro y personalizado en cada consulta.
    </p>  
</div>

@endsection
