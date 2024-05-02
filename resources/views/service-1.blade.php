@extends('layouts.services') @section('title','Servicio 1') @section('content')
<div class="w-full ">
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

    <section class="bg-black flex items-center justify-center py-10">
        @component('_components.menu-section')
        @endcomponent
    </section>

    <section class="w-full bg-black flex justify-center items-center">
        <div class="w-full max-w-[1440px] flex flex-col gap-20 px-10 2xl:px-0">
                @component('_components.image-service')
                    @slot('image', 'assets/img/service-1.png')
                    @slot('title', 'Desarrollo de software')
                @endcomponent

            

            <div class="flex flex-wrap  gap-8 items-start justify-start text-white mt-10">
                @component('_components.card-service')
                    @slot('title', 'Desarrollo a tu medida:')
                    @slot('description', 'Transformamos ideas en soluciones digitales. 
                    Desde aplicaciones móviles hasta plataformas 
                    web, nuestro equipo de desarrolladores 
                    personaliza cada línea de código para cumplir 
                    con tus requerimientos específicos.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Innovación Tecnológica:')
                    @slot('description', 'En PDT, no solo seguimos las tendencias, 
                    las creamos. Nuestros desarrolladores están 
                    a la vanguardia de las últimas tecnologías 
                    para asegurar que tu proyecto no solo sea 
                    funcional, sino también revolucionario.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Experiencia Fluida de Usuario:')
                    @slot('description', 'Construimos software que no solo resuelve 
                    problemas, sino que también cautiva. 
                    Nuestros desarrolladores se enfocan 
                    en crear experiencias de usuario intuitivas 
                    y atractivas para dejar una impresión duradera.') 
                @endcomponent

                
            </div>


            <div class="flex flex-wrap  gap-8 items-start justify-start text-white mt-10">
                @component('_components.card-service')
                    @slot('title', 'Eficiencia en el Desarrollo:')
                    @slot('description', 'El tiempo es valioso. Nuestro equipo de 
                    desarrolladores está comprometido con la 
                    entrega oportuna de proyectos sin sacrificar 
                    la calidad. Eficiencia y excelencia van de la 
                    mano en cada línea de código que escribimos.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Seguridad en cada Aspecto:')
                    @slot('description', 'La seguridad no es una opción, es una 
                    prioridad. Nuestros desarrolladores 
                    implementan protocolos de seguridad 
                    avanzados en cada fase del desarrollo para 
                    garantizar la protección de tus datos y la 
                    confidencialidad de tu proyecto.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Soporte Continuo:')
                    @slot('description', 'No terminamos cuando el desarrollo lo hace. 
                    Nuestro equipo de soporte técnico está 
                    disponible para garantizar que tu software 
                    funcione sin problemas. Actualizaciones, 
                    mejoras y asistencia constante para asegurar 
                    el éxito a largo plazo.') 
                @endcomponent
            </div>
        </div>
    </section>

    @component('_components.need-service')@endcomponent
</div>
@endsection
