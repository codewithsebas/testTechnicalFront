@extends('layouts.services') @section('title','Servicio 3') @section('content')
<div class="w-full">
    <section class="w-full h-screen">
        <img
            src="{{ asset('assets/img/services.png') }}"
            alt="Banner"
            class="w-full h-full object-cover"
        />

        <div class="w-full relative">
            <div class="w-full flex justify-center">
                <div class="w-full max-w-[1440px] text-white pb-10">
                    <div class="relative z-20">
                        <div
                            class="absolute w-full flex flex-col gap-20 bottom-20 2xl:bottom-60 px-10 2xl:px-0"
                        >
                            <div class="flex flex-col gap-4">
                                <h2 class="text-5xl font-bold">
                                    Nuestros Servicios
                                </h2>
                                <p class="text-xl font-light w-96">
                                    En PDT, fusionamos la creatividad con la
                                    tecnología para llevar tus proyectos al
                                    siguiente nivel. Desde el desarrollo de
                                    software a medida hasta la creación de
                                    identidades visuales impactantes, diseño de
                                    aplicaciones intuitivas, y producciones
                                    audiovisuales de calidad cinematográfica,
                                    somos una agencia de medios completa que
                                    trabaja incansablemente para dar vida a tus
                                    visiones.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-[150rem] bg-gradient-to-t from-black absolute bottom-10"
            ></div>
        </div>
    </section>

    <section class="w-full bg-black flex justify-center items-center">
        <div class="w-full max-w-[1440px] flex flex-col gap-20 px-10 2xl:px-0">
            @component('_components.image-service')
                    @slot('image', 'assets/img/service-3.png')
                    @slot('title', 'Desarrollo de aplicaciones')
                @endcomponent

            <div class="flex flex-wrap  gap-8 items-start justify-start text-white mt-10">
                @component('_components.card-service')
                    @slot('title', 'Aplicaciones a Medida:')
                    @slot('description', 'En PDT, no solo creamos aplicaciones, 
                    construimos soluciones personalizadas para 
                    tus necesidades específicas. Desde concepto 
                    hasta desarrollo, cada línea de código está 
                    diseñada para potenciar tu visión.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Experiencias Interactivas:')
                    @slot('description', 'Más allá de la funcionalidad, nos enfocamos 
                    en la interactividad. Desarrollamos aplicaciones 
                    que no solo resuelven problemas, sino que 
                    también crean experiencias inmersivas y 
                    memorables para tus usuarios.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Chatbots Inteligentes:')
                    @slot('description', 'La comunicación 24/7 está a solo un clic de 
                    distancia. Nuestros chatbots inteligentes 
                    están diseñados para brindar respuestas 
                    rápidas y precisas, mejorando la experiencia 
                    del usuario y optimizando la eficiencia.') 
                @endcomponent

                
            </div>


            <div class="flex flex-wrap  gap-8 items-start justify-start text-white mt-10">
                @component('_components.card-service')
                    @slot('title', 'Automatización Empresarial:')
                    @slot('description', 'Optimizamos tus procesos con soluciones 
                    CRM y aplicaciones empresariales. Desde 
                    la gestión de clientes hasta la automatización 
                    de tareas, nuestro enfoque es mejorar la 
                    eficiencia y hacer crecer tu negocio.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Integración Perfecta:')
                    @slot('description', 'Tu ecosistema digital merece coherencia. 
                    Desarrollamos aplicaciones y chatbots que se 
                    integran sin esfuerzo con tus sistemas 
                    existentes, asegurando una experiencia de
                    usuario fluida y eficiente.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Análisis y Mejora Continua:')
                    @slot('description', 'El desarrollo no se detiene en el lanzamiento. 
                    Implementamos análisis detallados para 
                    comprender el rendimiento de tus aplicaciones 
                    y chatbots, asegurando mejoras continuas 
                    para mantener tu negocio en la cima.') 
                @endcomponent
            </div>
        </div>
    </section>

    @component('_components.need-service')@endcomponent
</div>
@endsection
