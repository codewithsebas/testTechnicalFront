@extends('layouts.services') @section('title','Servicio 4') @section('content')
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
                    @slot('image', 'assets/img/service-4.png')
                    @slot('title', 'Producción audiovisual')
                @endcomponent

            <div class="flex flex-wrap  gap-8 items-start justify-start text-white mt-10">
                @component('_components.card-service')
                    @slot('title', 'Narrativas Visuales Inolvidables:')
                    @slot('description', 'En PDT, transformamos ideas en experiencias 
                    visuales cautivadoras. Desde videos 
                    promocionales hasta contenido multimedia, 
                    nuestro equipo de producción audiovisual da 
                    vida a tus historias de una manera que deja 
                    una impresión duradera.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Calidad Cinematográfica:')
                    @slot('description', 'Utilizamos equipos de última generación y 
                    técnicas cinematográficas para asegurar que 
                    cada producción alcance estándares visuales 
                    y auditivos excepcionales.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Creatividad en Movimiento:')
                    @slot('description', 'La creatividad no tiene límites. Nuestros 
                    productores audiovisuales trabajan en estrecha
                    colaboración contigo para dar vida a tus ideas, 
                    creando contenido que va más allá de lo
                    estándar y deja una marca única.') 
                @endcomponent

                
            </div>


            <div class="flex flex-wrap  gap-8 items-start justify-start text-white mt-10">
                @component('_components.card-service')
                    @slot('title', 'Efectividad Emocional:')
                    @slot('description', 'Cada producción tiene el poder de evocar 
                    emociones. Nos esforzamos por crear 
                    contenido que no solo se ve y suena bien, 
                    sino que también conecta emocionalmente 
                    con tu audiencia, dejando una impresión 
                    duradera.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Producción Eficiente:')
                    @slot('description', 'El tiempo es esencial. Nuestro equipo de 
                    producción se compromete a entregar 
                    resultados de manera eficiente sin 
                    comprometer la excelencia, garantizando 
                    que tu mensaje llegue en el momento 
                    adecuado.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Historias que Resonan:')
                    @slot('description', 'Más allá de la imagen y el sonido, contamos 
                    historias. Nuestra producción audiovisual se 
                    centra en crear narrativas visuales que resuenan
                    con tu audiencia, generando un impacto 
                    significativo en tu marca.') 
                @endcomponent
            </div>
        </div>
    </section>

    @component('_components.need-service')@endcomponent
</div>
@endsection
