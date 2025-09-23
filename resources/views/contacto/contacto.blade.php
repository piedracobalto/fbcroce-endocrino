@extends('home')

@section('content')
    <h2 class="text-center text-3xl font-bold text-gray-800 mb-8">Contactame</h2>
    <p class="text-center text-gray-600 mb-8">
        Si tenés alguna pregunta, duda o simplemente querés ponerte en contacto, no dudes en comunicarte conmigo a través de los siguientes medios.
    </p>
    <p class="text-center text-gray-600 mb-8">
        Atención particular, Consultar prepagas.
    </p>
    {{-- GALERIA CARDS --}}
    <div class="flex justify-around flex-wrap">
        {{-- MAIL --}}
        <div class="flex justify-center bg-white shadow-md rounded-lg p-6 w-96 mb-4 lg:mb-4">
            <div class="flex flex-col text-center lg:flex-row items-center">
                <svg class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 my-1">Mail</h3>
                    <a class="break-all" href="mailto:fbcroce.endocrino@gmail.com">fbcroce.endocrino@gmail.com</a>
                </div>
            </div>
        </div>
        {{-- FIN MAIL --}}
        {{-- INSTAGRAM --}}
        <div class="flex justify-center bg-white shadow-md rounded-lg p-6 w-96 mb-4 lg:mb-4">
            <div class="flex flex-col text-center lg:flex-row items-center">
                <svg class="flex  h-8 w-8 text-gray-600" fill="#4b5563"  width="8" height="8" viewBox="0 0 551.034 551.034" >
                    <path class="logo" fill:"#4b5563" id="XMLID_17_" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722 c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156 C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156 c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722 c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"/>
                    <path id="XMLID_81_" fill="#4b5563" d="M275.517,133C196.933,133,133,196.933,133,275.516 s63.933,142.517,142.517,142.517S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6 c-48.095,0-87.083-38.988-87.083-87.083s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083 C362.6,323.611,323.611,362.6,275.517,362.6z"/>
                    <circle id="XMLID_83_" fill="#4b5563" cx="418.306" cy="134.072" r="34.149"/>
                </svg>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 my-1">Instagram</h3>
                    <a class="break-all" href="https://www.instagram.com/fbcroce.endocrino/">@fbcroce.endocrino</a>
                </div>
            </div>
        </div>
        {{-- FIN INSTAGRAM --}}
        {{-- LINKEDIN --}}
        <div class="flex justify-center bg-white shadow-md rounded-lg p-6 w-96 mb-4 lg:mb-4">
            <div class="flex flex-col text-center lg:flex-row items-center">
                <svg class="flex  h-8 w-8 text-gray-600"  viewBox="0 0 48 48">
                    <g stroke="none"  fill="none" fill-rule="evenodd">
                        <path fill="#4b5563" d="M20.9716667,33.5527338 L25.001,33.5527338 L25.001,27.1328007 C25.001,25.439485 25.3213333,23.7988354 27.4206667,23.7988354 C29.491,23.7988354 29.517,25.7351486 29.517,27.2404662 L29.517,33.5527338 L33.5506667,33.5527338 L33.5506667,26.4341413 C33.5506667,22.9381777 32.796,20.2505391 28.711,20.2505391 C26.7483333,20.2505391 25.432,21.3265278 24.8943333,22.3471839 L24.839,22.3471839 L24.839,20.5725357 L20.9716667,20.5725357 L20.9716667,33.5527338 Z M16.423,14.1202696 C15.1273333,14.1202696 14.0823333,15.1682587 14.0823333,16.4595785 C14.0823333,17.7508984 15.1273333,18.7992208 16.423,18.7992208 C17.7133333,18.7992208 18.761,17.7508984 18.761,16.4595785 C18.761,15.1682587 17.7133333,14.1202696 16.423,14.1202696 L16.423,14.1202696 Z M14.4026667,33.5527338 L18.4406667,33.5527338 L18.4406667,20.5725357 L14.4026667,20.5725357 L14.4026667,33.5527338 Z M9.76633333,40 C8.79033333,40 8,39.2090082 8,38.2336851 L8,9.76631493 C8,8.79065843 8.79033333,8 9.76633333,8 L38.234,8 C39.2093333,8 40,8.79065843 40,9.76631493 L40,38.2336851 C40,39.2090082 39.2093333,40 38.234,40 L9.76633333,40 Z" ></path>
                    </g>
                </svg>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 my-1">Linkedin</h3>
                    <a class="break-all" href="https://www.linkedin.com/in/florencia-bel%C3%A9n-croce-8315701b8/">Florencia Croce</a>
                </div>
            </div>
        </div>
        {{-- FIN LINKEDIN --}}
    </div>
    {{-- END GALERIA CARDS --}}
@endsection