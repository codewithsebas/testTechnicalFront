@extends('layouts.services') @section('title','Servicio 2') @section('content')
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
                    @slot('image', 'assets/img/service-2.png')
                    @slot('title', 'Diseño gráfico')
                @endcomponent

            <div class="flex flex-wrap  gap-8 items-start justify-start text-white mt-10">
                @component('_components.card-service')
                    @slot('title', 'Identidad Visual Impactante:')
                    @slot('description', 'En PDT, creamos más que simples diseños;
                    construimos identidades visuales 
                    impactantes. Desde logotipos hasta 
                    materiales de marketing, nuestro equipo 
                    de diseñadores gráficos da vida a tu marca 
                    de una manera que resuena y perdura.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Creatividad sin Límites:')
                    @slot('description', 'Imágenes que cuentan historias y capturan 
                    la esencia de tu mensaje. Nuestros diseñadores 
                    exploran límites creativos para darle a tu 
                    proyecto una apariencia única y memorable.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Diseño Responsivo:')
                    @slot('description', 'La estética no se trata solo de lo visual, sino 
                    también de la adaptabilidad. Creamos 
                    diseños que se adaptan a diferentes 
                    plataformas y dispositivos, asegurando 
                    una experiencia coherente y atractiva en 
                    cualquier pantalla.') 
                @endcomponent

                
            </div>


            <div class="flex flex-wrap  gap-8 items-start justify-start text-white mt-10">
                @component('_components.card-service')
                    @slot('title', 'Comunicación Visual Efectiva:')
                    @slot('description', 'Cada diseño tiene un propósito. Nuestro 
                    enfoque se centra en comunicar tu mensaje 
                    de manera efectiva, utilizando elementos 
                    visuales que conectan y resuenan 
                    con tu audiencia.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Colaboración Creativa:')
                    @slot('description', 'Tu visión se une a nuestra creatividad. 
                    Colaboramos estrechamente contigo 
                    para entender tus metas y valores, 
                    creando diseños que no solo se ven bien, 
                    sino que también comunican la esencia 
                    de tu proyecto.') 
                @endcomponent

                @component('_components.card-service')
                    @slot('title', 'Evolución Estética Continua:')
                    @slot('description', 'El diseño no es estático, y tampoco lo es 
                    nuestro enfoque. Estamos comprometidos 
                    con la evolución constante de tus elementos 
                    visuales para mantener tu presencia fresca 
                    y relevante en un mundo en constante cambio.') 
                @endcomponent
            </div>
        </div>
    </section>

    @component('_components.need-service')@endcomponent
</div>
@endsection
