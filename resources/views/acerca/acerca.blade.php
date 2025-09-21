@extends('home')

@section('content')
    
<h2 class="text-center text-3xl font-bold text-gray-800 mb-4">Acerca de mí</h2>

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
    <p>
        Soy Florencia. Médica Endocrinóloga. Nací en Barracas, Buenos Aires. Desde muy joven tuve claro mi sueño de ser médica. Luego de años de esfuerzo y dedicación, me gradué en la Facultad de Medicina de la Universidad de Buenos Aires (UBA).
    </p>
    <p>
        Luego de graduarme, realicé la residencia en Endocrinóloga en el Hospital César Milstein, junto con el curso superior de la UBA.
    </p>    
    <p>
        Ahora, ejerzo como médica de planta en el Hospital Español de Buenos Aires, donde continúo aprendiendo y creciendo profesionalmente.
    </p>    
    <p>
        Me animé a dar un paso más y sumergirme en el mundo de las redes para que otrxs como vos, conozcan a qué me dedico, aprendan y puedan acceder a una consulta de manera rápida y sin demoras.
    </p>    
    <p>
        ¿Necesitas una consulta? ¡Estoy acá para ayudarte! Ofrezco consultas virtuales donde puedo brindarte la atención personalizada que necesitas.
    </p>    
    <p>
        No dudes en contactarme para agendar una cita.
    </p>  
</div>

@endsection
