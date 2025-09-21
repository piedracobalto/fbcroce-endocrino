@extends('home')

@section('content')
    <h2 class="text-center text-3xl font-bold text-gray-800 mb-2">Servicios</h2>

    <h3 class="text-center text-2xl font-bold text-gray-800 mb-8">Consultas presenciales y virtuales de endocrinología</h3>

    <div class="flex justify-center items-center mb-4">
        <div class="w-80 h-80  rounded-lg overflow-hidden">
            <img 
                src="{{ asset('img/oficina.webp') }}" 
                alt="oficina" 
                class="object-contain w-full h-full"
            >
        </div>
    </div>

    <!-- ¿Qué es la endocrinología? -->
    <div class="mb-8">
        <h3 class="text-xl font-semibold text-gray-700 mb-2">🔎 ¿Qué es la endocrinología?</h3>
        <p class="text-gray-700 text-justify">
            La endocrinología es la especialidad médica que estudia las glándulas del sistema endocrino y el metabolismo. Estas glándulas regulan funciones esenciales del cuerpo, y sus alteraciones pueden impactar en la salud de manera significativa.
        </p>
    </div>

    <!-- Áreas de atención -->
    <div>
        <h3 class="text-xl font-semibold text-gray-700 mb-4">🩺 Áreas de atención</h3>
        <p class="text-gray-700 mb-4">
            Me dedico al diagnóstico, tratamiento y seguimiento de distintas enfermedades endocrinas y metabólicas:
        </p>

        <!-- Lista de servicios -->
        <ul class="list-disc list-inside space-y-3 text-gray-700">
            <li>
                <strong>Salud ósea y metabolismo mineral:</strong> osteoporosis, osteopenia, déficit de vitamina D, alteraciones de paratiroides.
            </li>
            <li>
                <strong>Tiroides:</strong> hipotiroidismo, hipertiroidismo, nódulos tiroideos.
            </li>
            <li>
                <strong>Metabolismo y nutrición:</strong> diabetes, insulino resistencia, alteraciones del colesterol.
            </li>
            <li>
                <strong>Gónadas y salud reproductiva:</strong> síndrome de ovario poliquístico, alteraciones del ciclo menstrual, climaterio, alteraciones de la libido, disfunción eréctil, ginecomastia.
            </li>
            <li>
                <strong>Hipófisis y suprarrenales:</strong> acromegalia, prolactinoma, enfermedad de Cushing, insuficiencia suprarrenal.
            </li>
            <li>
                <strong>Dermatología endocrina:</strong> acné, exceso de vello (hirsutismo).
            </li>
        </ul>
    </div>
@endsection