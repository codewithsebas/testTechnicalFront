@extends('layouts.landing') @section('title','Bienvenido') @section('content')
<div class="w-full bg-black">
    <div class="w-full h-screen">
        <img
            src="{{ asset('assets/img/landing.jpg') }}"
            alt="Banner"
            class="w-full h-full object-cover"
        />

        <div class="w-full relative">
            <div class="w-full flex justify-center">
                <div class="w-full max-w-[1440px] text-white pb-10">
                    <div class="relative">
                        <div
                            class="absolute w-full flex flex-col gap-20 bottom-20 p-3 xl:py-5"
                        >
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-4">
                                    <div
                                        class="w-1 rounded-full bg-red-400 h-full"
                                    ></div>
                                    <div class="flex flex-col gap-2">
                                        <h2 class="text-4xl font-extralight">
                                            Creamos
                                            <span class="font-medium"
                                                >experiencias</span
                                            >
                                        </h2>
                                        <h2 class="text-4xl font-extralight">
                                            Consolidamos
                                            <span class="font-medium"
                                                >sueños</span
                                            >
                                        </h2>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-5 w-fit items-center justify-center pe-5"
                                >
                                    <svg
                                        width="40px"
                                        height="40px"
                                        viewBox="-0.5 0 7 7"
                                        version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        fill="#000000"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        ></g>
                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>play [#1003]</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g
                                                id="Page-1"
                                                stroke="none"
                                                stroke-width="1"
                                                fill="none"
                                                fill-rule="evenodd"
                                            >
                                                <g
                                                    id="Dribbble-Light-Preview"
                                                    transform="translate(-347.000000, -3766.000000)"
                                                    fill="#ffffff"
                                                >
                                                    <g
                                                        id="icons"
                                                        transform="translate(56.000000, 160.000000)"
                                                    >
                                                        <path
                                                            d="M296.494737,3608.57322 L292.500752,3606.14219 C291.83208,3605.73542 291,3606.25002 291,3607.06891 L291,3611.93095 C291,3612.7509 291.83208,3613.26444 292.500752,3612.85767 L296.494737,3610.42771 C297.168421,3610.01774 297.168421,3608.98319 296.494737,3608.57322"
                                                            id="play-[#1003]"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>

                                    <svg
                                        width="60px"
                                        height="60px"
                                        viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                        id="sound-max"
                                        class="icon glyph"
                                        fill="#000000"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        ></g>
                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M18.36,19.36a1,1,0,0,1-.7-.29,1,1,0,0,1,0-1.41,8,8,0,0,0,0-11.32,1,1,0,0,1,1.41-1.41,10,10,0,0,1,0,14.14A1,1,0,0,1,18.36,19.36Z"
                                                style="fill: #ffffff"
                                            ></path>
                                            <path
                                                d="M15.54,16.54a1,1,0,0,1-.71-.3,1,1,0,0,1,0-1.41,4,4,0,0,0,0-5.66,1,1,0,0,1,1.41-1.41,6,6,0,0,1,0,8.48A1,1,0,0,1,15.54,16.54Z"
                                                style="fill: #ffffff"
                                            ></path>
                                            <path
                                                d="M11.38,4.08a1,1,0,0,0-1.09.21L6.59,8H4a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H6.59l3.7,3.71A1,1,0,0,0,11,20a.84.84,0,0,0,.38-.08A1,1,0,0,0,12,19V5A1,1,0,0,0,11.38,4.08Z"
                                                style="fill: #ffffff"
                                            ></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex gap-3 px-14">
                                <div
                                    class="w-full bg-red-100 h-1 rounded-full"
                                ></div>
                                <div
                                    class="w-full bg-red-100 h-1 rounded-full"
                                ></div>
                                <div
                                    class="w-full bg-red-100 h-1 rounded-full"
                                ></div>
                                <div
                                    class="w-full bg-red-100 h-1 rounded-full"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-80 bg-gradient-to-t from-black absolute bottom-10"
            ></div>
        </div>
    </div>

    <div class="w-full flex justify-center items-center">
        <div class="max-w-[1440px] flex gap-5 justify-between py-5">
            @component('_components.card')
                @slot('image', 'assets/img/card-1.png')
                @slot('title', 'Desarrollo')
                @slot('description', 'Software') 
            @endcomponent

            @component('_components.card')
                @slot('image', 'assets/img/card-2.png')
                @slot('title', 'Diseño')
                @slot('description', 'Gráfico') 
            @endcomponent

            @component('_components.card')
                @slot('image', 'assets/img/card-3.png')
                @slot('title', 'Diseño')
                @slot('description', 'Aplicaciones') 
            @endcomponent

            @component('_components.card')
                @slot('image', 'assets/img/card-4.png')
                @slot('title', 'Producción')
                @slot('description', 'Audiovisual') 
            @endcomponent
        </div>
    </div>
</div>

@endsection
