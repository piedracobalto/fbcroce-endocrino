@extends('home')

@section('content')
    
    <h2 class="text-center text-3xl font-bold text-gray-800 mb-8">Acerca de mí</h2>
    <div class="flex justify-center items-center mb-5">
        <div class="w-64 h-64 rounded-lg overflow-hidden">
            <img src="{{ asset('storage/img/foto_acerca_de_mi.jpeg') }}" alt="acerca_de" class=" object-cover w-full h-full">
        </div>
    </div>

    <p class="text-justify text-gray-600 mt-3 mb-1">
        Soy Florencia. Médica Endocrinóloga. Nací en Barracas, Buenos Aires. Desde muy joven tuve claro mi sueño de ser médica. Luego de años de esfuerzo y dedicación, me gradué en la Facultad de Medicina de la Universidad de Buenos Aires (UBA).
    </p>
    <p class="text-justify text-gray-600 mt-3 mb-1">
        Luego de graduarme, realicé la residencia en Endocrinóloga en el Hospital César Milstein, junto con el curso superior de la UBA.
    </p>    
    <p class="text-justify text-gray-600 mt-3 mb-1">
        Ahora, ejerzo como médica de planta en el Hospital Español de Buenos Aires, donde continúo aprendiendo y creciendo profesionalmente.
    </p>    
    <p class="text-justify text-gray-600 mt-3 mb-1">
        Me animé a dar un paso más y sumergirme en el mundo de las redes para que otrxs como vos, conozcan a qué me dedico, aprendan y puedan acceder a una consulta de manera rápida y sin demoras.
    </p>    
    <p class="text-justify text-gray-600 mt-3 mb-1">
        ¿Necesitas una consulta? ¡Estoy acá para ayudarte! Ofrezco consultas virtuales donde puedo brindarte la atención personalizada que necesitas.
    </p>    
    <p class="text-justify text-gray-600 mt-3 mb-8">
        No dudes en contactarme para agendar una cita.
    </p>    
@endsection