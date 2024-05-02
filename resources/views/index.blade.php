@extends('layouts.landing') @section('title','Bienvenido') @section('content')
<div class="w-full bg-black">
    <section class="w-full h-screen">
        {{--
        <img
            src="{{ asset('assets/img/landing.jpg') }}"
            alt="Banner"
            class="w-full h-full object-cover"
        />
        --}}

        <div id="video-player" class="w-full h-full">
            <video id="video" class="w-full h-full object-cover">
                <source
                    src="{{ asset('assets/videos/video-1.mp4') }}"
                    type="video/mp4"
                />
            </video>
        </div>

        <div class="w-full relative">
            <div class="w-full flex justify-center">
                <div class="w-full max-w-[1440px] text-white pb-10">
                    <div class="relative">
                        <div
                            class="absolute w-full flex flex-col gap-20 bottom-20 px-10 2xl:px-0"
                        >
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-4 z-30">
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
                                    id="video-controls"
                                    class="flex gap-5 w-fit items-center justify-center pe-5 z-30"
                                >
                                    <button id="play-button">
                                        <svg
                                            id="play-icon"
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
                                                <desc>
                                                    Created with Sketch.
                                                </desc>
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
                                                            ></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>

                                        <svg
                                            class="hidden"
                                            id="pause-icon"
                                            width="45px"
                                            height="45px"
                                            viewBox="-1 0 8 8"
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
                                                <title>pause [#1006]</title>
                                                <desc>
                                                    Created with Sketch.
                                                </desc>
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
                                                        transform="translate(-227.000000, -3765.000000)"
                                                        fill="#ffffff"
                                                    >
                                                        <g
                                                            id="icons"
                                                            transform="translate(56.000000, 160.000000)"
                                                        >
                                                            <path
                                                                d="M172,3605 C171.448,3605 171,3605.448 171,3606 L171,3612 C171,3612.552 171.448,3613 172,3613 C172.552,3613 173,3612.552 173,3612 L173,3606 C173,3605.448 172.552,3605 172,3605 M177,3606 L177,3612 C177,3612.552 176.552,3613 176,3613 C175.448,3613 175,3612.552 175,3612 L175,3606 C175,3605.448 175.448,3605 176,3605 C176.552,3605 177,3605.448 177,3606"
                                                            ></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>

                                    <button id="mute-button">
                                        <svg
                                            id="sound-icon"
                                            width="60px"
                                            height="60px"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
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

                                        <svg
                                            class="hidden"
                                            id="mute-icon"
                                            width="60px"
                                            height="60px"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                            id="sound-mute-alt"
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
                                                    d="M11.38,4.08a1,1,0,0,0-1.09.21L6.59,8H4a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H6.59l3.7,3.71A1,1,0,0,0,11,20a.84.84,0,0,0,.38-.08A1,1,0,0,0,12,19V5A1,1,0,0,0,11.38,4.08Z"
                                                    style="fill: #ffffff"
                                                ></path>
                                                <path
                                                    d="M16,15.5a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l5-5a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,16,15.5Z"
                                                    style="fill: #ffffff"
                                                ></path>
                                                <path
                                                    d="M21,15.5a1,1,0,0,1-.71-.29l-5-5a1,1,0,0,1,1.42-1.42l5,5a1,1,0,0,1,0,1.42A1,1,0,0,1,21,15.5Z"
                                                    style="fill: #ffffff"
                                                ></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex gap-3 px-14 py-2 z-30">
                                <div
                                    data-src="{{
                                        asset('assets/videos/video-1.mp4')
                                    }}"
                                    class="w-full h-1.5 cursor-pointer rounded-full video-button bg-red-600"
                                ></div>
                                <div
                                    data-src="{{
                                        asset('assets/videos/video-2.mp4')
                                    }}"
                                    class="w-full h-1.5 cursor-pointer rounded-full video-button bg-red-100"
                                ></div>
                                <div
                                    data-src="{{
                                        asset('assets/videos/video-3.mp4')
                                    }}"
                                    class="w-full h-1.5 cursor-pointer rounded-full video-button bg-red-100"
                                ></div>
                                <div
                                    data-src="{{
                                        asset('assets/videos/video-4.mp4')
                                    }}"
                                    class="w-full h-1.5 cursor-pointer rounded-full video-button bg-red-100"
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
    </section>

    <section class="w-full flex justify-center items-center">
        <div class="max-w-[1440px] flex flex-wrap gap-5 justify-center py-5">
            @component('_components.card') @slot('link', '/service-1')
            @slot('image', 'assets/img/card-1.png') @slot('title', 'Desarrollo')
            @slot('description', 'Software') @endcomponent
            @component('_components.card') @slot('link', '/service-2')
            @slot('image', 'assets/img/card-2.png') @slot('title', 'Diseño')
            @slot('description', 'Gráfico') @endcomponent
            @component('_components.card') @slot('link', '/service-3')
            @slot('image', 'assets/img/card-3.png') @slot('title', 'Diseño')
            @slot('description', 'Aplicaciones') @endcomponent
            @component('_components.card') @slot('link', '/service-4')
            @slot('image', 'assets/img/card-4.png') @slot('title', 'Producción')
            @slot('description', 'Audiovisual') @endcomponent
        </div>
    </section>

    <section class="w-full flex justify-center items-center z-0 pb-48 pt-36">
        <div
            class="max-w-[1440px] flex flex-col xl:flex-row justify-between items-center w-full px-10 2xl:px-0"
        >
            <div class="flex flex-col gap-20">
                <div
                    class="flex items-center gap-3 text-white/60 text-xl font-light ps-8"
                >
                    <div
                        class="border w-6 h-6 border-white rounded-full flex items-center justify-center"
                    >
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                    </div>
                    <span>Más de 300 sitios web</span>
                </div>

                <div
                    class="flex items-center gap-3 text-white/60 text-xl font-light"
                >
                    <div
                        class="border w-6 h-6 border-white rounded-full flex items-center justify-center"
                    >
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                    </div>
                    <span>Más de 30 aplicaciones</span>
                </div>

                <div
                    class="flex items-center gap-3 text-white/60 text-xl font-light ps-8"
                >
                    <div
                        class="border w-6 h-6 border-white rounded-full flex items-center justify-center"
                    >
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                    </div>
                    <span
                        >Creación de contenido <br />
                        y manejo de redes</span
                    >
                </div>
            </div>
            <img
                class="w-[600px] 2xl:w-[800px]"
                src="{{ asset('assets/img/luz-bombilla.png') }}"
                alt="Bombilla"
            />

            <div class="flex flex-col gap-20">
                <div
                    class="flex items-center gap-3 text-white/60 text-xl font-light"
                >
                    <div
                        class="border w-6 h-6 border-white rounded-full flex items-center justify-center"
                    >
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                    </div>
                    <span>Realización de contenido <br />Audiovisual</span>
                </div>

                <div
                    class="flex items-center gap-3 text-white/60 text-xl font-light ps-8"
                >
                    <div
                        class="border w-6 h-6 border-white rounded-full flex items-center justify-center"
                    >
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                    </div>
                    <span>Más de 300 piezas creadas</span>
                </div>

                <div
                    class="flex items-center gap-3 text-white/60 text-xl font-light"
                >
                    <div
                        class="border w-6 h-6 border-white rounded-full flex items-center justify-center"
                    >
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                    </div>
                    <span>Más de 8 años de experiencia</span>
                </div>
            </div>
        </div>
    </section>

    <section
        class="w-full bg-white flex items-center justify-center py-20 pt-52 relative px-10 2xl:px-0"
    >
        <div class="max-w-[1440px] flex flex-col items-center gap-10">
            <div
                class="w-60 h-60 rounded-full shadow-xl flex items-center justify-center p-10 absolute bg-white -top-28"
            >
                <img
                    src="{{ asset('assets/img/logo-dark.png') }}"
                    alt="Logo"
                    class="w-full"
                />
            </div>

            <div
                class="flex flex-col items-center gap-8 xl:border p-10 rounded-lg w-full"
            >
                <h2 class="text-4xl uppercase font-extrabold">
                    Nuestros clientes
                </h2>
                <img src="{{ asset('assets/img/logos.png') }}" alt="" />
            </div>

            <div class="flex flex-col xl:flex-row items-center gap-10 py-10">
                <div class="flex flex-col gap-5">
                    <h2 class="text-5xl uppercase font-extrabold">
                        Hacemos realidad <br />
                        tus ideas
                    </h2>

                    <div>
                        <h6 class="text-2xl uppercase font-semibold">aiop</h6>
                        <p class="font-light text-lg">
                            Somos desarrolladores del primer GDS para agencias
                            de viajes con el enfoque de turismo en salud.
                            <br /><br />

                            Dando soluciones tecnologicas para agilizar procesos
                            y en un solo lugar poder encontrar, todos los
                            servicios de salud y bienestar para que las agencias
                            de viaje puedan entrar en una nueva era del turismo,
                            con más alcance, muchos más servicios y claro,
                            aumentando sus ganancias
                        </p>
                    </div>
                </div>

                <div id="video-player" class="w-full h-80 relative">
                    <video
                        id="video2"
                        class="w-full h-full object-cover rounded-xl"
                    >
                        <source
                            src="{{ asset('assets/videos/video-5.mp4') }}"
                            type="video/mp4"
                        />
                    </video>

                    <div
                        class="flex justify-between gap-3 w-full absolute bottom-3 left-0 px-5"
                    >
                        <div>
                            <button
                            style="background-color: #ffffff !important"
                                class="bg-white p-2 rounded-full video-button2"
                                data-src="{{
                                    asset('assets/videos/video-5.mp4')
                                }}"
                            >
                                <svg
                                    width="20px"
                                    height="20px"
                                    viewBox="0 0 1024 1024"
                                    xmlns="http://www.w3.org/2000/svg"
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
                                            fill="#000000"
                                            d="M685.248 104.704a64 64 0 0 1 0 90.496L368.448 512l316.8 316.8a64 64 0 0 1-90.496 90.496L232.704 557.248a64 64 0 0 1 0-90.496l362.048-362.048a64 64 0 0 1 90.496 0z"
                                        ></path>
                                    </g>
                                </svg>
                            </button>
                            <button
                            style="background-color: #ffffff !important"
                                class="bg-white p-2 rounded-full video-button2"
                                data-src="{{
                                    asset('assets/videos/video-1.mp4')
                                }}"
                            >
                                <svg
                                    width="20px"
                                    height="20px"
                                    viewBox="0 0 1024 1024"
                                    xmlns="http://www.w3.org/2000/svg"
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
                                            fill="#000000"
                                            d="M338.752 104.704a64 64 0 0 0 0 90.496l316.8 316.8-316.8 316.8a64 64 0 0 0 90.496 90.496l362.048-362.048a64 64 0 0 0 0-90.496L429.248 104.704a64 64 0 0 0-90.496 0z"
                                        ></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div
                            id="video-controls"
                            class="flex gap-2 w-fit items-center justify-center z-30"
                        >
                            <button id="play-button2">
                                <svg
                                    id="play-icon2"
                                    width="20px"
                                    height="20px"
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
                                                    ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                <svg
                                    class="hidden"
                                    id="pause-icon2"
                                    width="20px"
                                    height="20px"
                                    viewBox="-1 0 8 8"
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
                                        <title>pause [#1006]</title>
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
                                                transform="translate(-227.000000, -3765.000000)"
                                                fill="#ffffff"
                                            >
                                                <g
                                                    id="icons"
                                                    transform="translate(56.000000, 160.000000)"
                                                >
                                                    <path
                                                        d="M172,3605 C171.448,3605 171,3605.448 171,3606 L171,3612 C171,3612.552 171.448,3613 172,3613 C172.552,3613 173,3612.552 173,3612 L173,3606 C173,3605.448 172.552,3605 172,3605 M177,3606 L177,3612 C177,3612.552 176.552,3613 176,3613 C175.448,3613 175,3612.552 175,3612 L175,3606 C175,3605.448 175.448,3605 176,3605 C176.552,3605 177,3605.448 177,3606"
                                                    ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>

                            <button id="mute-button2">
                                <svg
                                    id="sound-icon2"
                                    width="30px"
                                    height="30px"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
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

                                <svg
                                    class="hidden"
                                    id="mute-icon2"
                                    width="30px"
                                    height="30px"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                    id="sound-mute-alt"
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
                                            d="M11.38,4.08a1,1,0,0,0-1.09.21L6.59,8H4a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H6.59l3.7,3.71A1,1,0,0,0,11,20a.84.84,0,0,0,.38-.08A1,1,0,0,0,12,19V5A1,1,0,0,0,11.38,4.08Z"
                                            style="fill: #ffffff"
                                        ></path>
                                        <path
                                            d="M16,15.5a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l5-5a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,16,15.5Z"
                                            style="fill: #ffffff"
                                        ></path>
                                        <path
                                            d="M21,15.5a1,1,0,0,1-.71-.29l-5-5a1,1,0,0,1,1.42-1.42l5,5a1,1,0,0,1,0,1.42A1,1,0,0,1,21,15.5Z"
                                            style="fill: #ffffff"
                                        ></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="w-full bg-white flex items-center justify-center pb-20 px-10 2xl:px-0"
    >
        <div
            class="max-w-[1440px] w-full flex flex-col xl:flex-row justify-between gap-10"
        >
            <div class="w-full xl:border-e pe-10 flex flex-col gap-10">
                <div class="flex gap-8">
                    <img
                        src="{{ asset('assets/img/perrito-script.png') }}"
                        alt="Perrito"
                    />
                    <div class="flex flex-col gap-5">
                        <h2 class="text-4xl uppercase font-extrabold">
                            ¿Tienes una gran idea?
                        </h2>
                        <p class="text-lg">Cuentanos sobre ella</p>
                    </div>
                </div>

                <div class="flex flex-col gap-5">
                    <h3 class="font-bold text-3xl">
                        Los clientes confian en nosotros
                    </h3>
                    <div class="flex gap-8 items-center">
                        <img
                            src="{{ asset('assets/img/person.png') }}"
                            alt="Person"
                            width="80"
                            height="120"
                            class="w-28 h-28 object-cover rounded-full"
                        />
                        <div class="flex flex-col gap-3">
                            <div class="flex gap-2">
                                <svg
                                    width="28"
                                    height="26"
                                    viewBox="0 0 28 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M14 0L17.1432 9.67376H27.3148L19.0858 15.6525L22.229 25.3262L14 19.3475L5.77101 25.3262L8.9142 15.6525L0.685208 9.67376H10.8568L14 0Z"
                                        fill="#FFD900"
                                    />
                                </svg>
                                <svg
                                    width="28"
                                    height="26"
                                    viewBox="0 0 28 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M14 0L17.1432 9.67376H27.3148L19.0858 15.6525L22.229 25.3262L14 19.3475L5.77101 25.3262L8.9142 15.6525L0.685208 9.67376H10.8568L14 0Z"
                                        fill="#FFD900"
                                    />
                                </svg>
                                <svg
                                    width="28"
                                    height="26"
                                    viewBox="0 0 28 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M14 0L17.1432 9.67376H27.3148L19.0858 15.6525L22.229 25.3262L14 19.3475L5.77101 25.3262L8.9142 15.6525L0.685208 9.67376H10.8568L14 0Z"
                                        fill="#FFD900"
                                    />
                                </svg>
                                <svg
                                    width="28"
                                    height="26"
                                    viewBox="0 0 28 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M14 0L17.1432 9.67376H27.3148L19.0858 15.6525L22.229 25.3262L14 19.3475L5.77101 25.3262L8.9142 15.6525L0.685208 9.67376H10.8568L14 0Z"
                                        fill="#FFD900"
                                    />
                                </svg>
                                <svg
                                    width="28"
                                    height="26"
                                    viewBox="0 0 28 26"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M14 0L17.1432 9.67376H27.3148L19.0858 15.6525L22.229 25.3262L14 19.3475L5.77101 25.3262L8.9142 15.6525L0.685208 9.67376H10.8568L14 0Z"
                                        fill="#FFD900"
                                    />
                                </svg>
                            </div>
                            <p>Clasificación 5,24 en opinión</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="font-bold text-3xl">
                        Los clientes confian en nosotros
                    </h3>
                    <div class="flex gap-3">
                        <svg
                            width="50"
                            height="50"
                            viewBox="0 0 28 28"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#clip0_2668_111)">
                                <path
                                    d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z"
                                    fill="#DE383F"
                                />
                                <g clip-path="url(#clip1_2668_111)">
                                    <path
                                        d="M21.5447 10.8756C21.5091 10.0697 21.3788 9.51567 21.1921 9.0356C20.9994 8.52601 20.7031 8.06978 20.3149 7.69052C19.9355 7.30535 19.4762 7.00606 18.9724 6.81649C18.4895 6.6298 17.9382 6.49949 17.1322 6.46395C16.3202 6.42542 16.0624 6.4165 14.0028 6.4165C11.9432 6.4165 11.6854 6.42542 10.8764 6.46095C10.0704 6.49648 9.51626 6.62691 9.03622 6.81348C8.52642 7.00606 8.0701 7.30234 7.69077 7.69052C7.30553 8.06978 7.00629 8.52902 6.81656 9.0327C6.62984 9.51567 6.4995 10.0667 6.46396 10.8726C6.42542 11.6844 6.4165 11.9422 6.4165 14.0013C6.4165 16.0605 6.42542 16.3182 6.46095 17.1271C6.49649 17.933 6.62695 18.487 6.81367 18.9671C7.00629 19.4767 7.30553 19.9329 7.69077 20.3122C8.0701 20.6973 8.52943 20.9966 9.03321 21.1862C9.51626 21.3729 10.0674 21.5032 10.8735 21.5387C11.6824 21.5744 11.9403 21.5832 13.9999 21.5832C16.0595 21.5832 16.3173 21.5744 17.1263 21.5387C17.9323 21.5032 18.4865 21.3729 18.9665 21.1862C19.986 20.7921 20.792 19.9863 21.1862 18.9671C21.3728 18.4841 21.5032 17.933 21.5388 17.1271C21.5743 16.3182 21.5832 16.0605 21.5832 14.0013C21.5832 11.9422 21.5802 11.6844 21.5447 10.8756ZM20.1786 17.0679C20.146 17.8086 20.0215 18.2086 19.9178 18.4752C19.6629 19.1359 19.1384 19.6603 18.4776 19.9152C18.2109 20.0189 17.8079 20.1433 17.0699 20.1758C16.2698 20.2115 16.0299 20.2203 14.0058 20.2203C11.9818 20.2203 11.7388 20.2115 10.9416 20.1758C10.2007 20.1433 9.80068 20.0189 9.53397 19.9152C9.20511 19.7937 8.90576 19.6011 8.66278 19.3492C8.41089 19.1033 8.21827 18.807 8.09673 18.4782C7.99301 18.2116 7.86857 17.8086 7.83604 17.0709C7.80039 16.2709 7.79159 16.0309 7.79159 14.0072C7.79159 11.9836 7.80039 11.7407 7.83604 10.9437C7.86857 10.203 7.99301 9.80304 8.09673 9.53638C8.21827 9.20746 8.41089 8.90829 8.66579 8.66524C8.91166 8.4134 9.208 8.22082 9.53698 8.09941C9.80369 7.99571 10.2068 7.8713 10.9446 7.83866C11.7447 7.80313 11.9848 7.79422 14.0087 7.79422C16.0358 7.79422 16.2757 7.80313 17.073 7.83866C17.8138 7.8713 18.2139 7.99571 18.4806 8.09941C18.8094 8.22082 19.1088 8.4134 19.3518 8.66524C19.6036 8.91118 19.7963 9.20746 19.9178 9.53638C20.0215 9.80304 20.146 10.2059 20.1786 10.9437C20.2142 11.7437 20.2231 11.9836 20.2231 14.0072C20.2231 16.0309 20.2142 16.2679 20.1786 17.0679Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M14 10.0774C11.8346 10.0774 10.0776 11.8342 10.0776 13.9998C10.0776 16.1654 11.8346 17.9222 14 17.9222C16.1657 17.9222 17.9225 16.1654 17.9225 13.9998C17.9225 11.8342 16.1657 10.0774 14 10.0774ZM14 16.5442C12.5952 16.5442 11.4557 15.4048 11.4557 13.9998C11.4557 12.5949 12.5952 11.4554 14 11.4554C15.405 11.4554 16.5445 12.5949 16.5445 13.9998C16.5445 15.4048 15.405 16.5442 14 16.5442Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M18.9684 9.9654C18.9684 10.4811 18.5669 10.8993 18.0717 10.8993C17.5767 10.8993 17.1753 10.4811 17.1753 9.9654C17.1753 9.44955 17.5767 9.03149 18.0717 9.03149C18.5669 9.03149 18.9684 9.44955 18.9684 9.9654Z"
                                        fill="white"
                                    />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_2668_111">
                                    <rect width="28" height="28" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_2668_111">
                                    <rect
                                        width="16"
                                        height="16"
                                        fill="white"
                                        transform="translate(6 6)"
                                    />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg
                            width="50"
                            height="50"
                            viewBox="0 0 28 28"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#clip0_2668_111)">
                                <path
                                    d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z"
                                    fill="#DE383F"
                                />
                                <g clip-path="url(#clip1_2668_111)">
                                    <path
                                        d="M15.0289 21.5832V14.6655H17.3499L17.6981 11.9687H15.0289V10.2472C15.0289 9.46667 15.2447 8.93475 16.3653 8.93475L17.7921 8.93416V6.52209C17.5453 6.49002 16.6983 6.4165 15.7125 6.4165C13.6539 6.4165 12.2446 7.67304 12.2446 9.98012V11.9687H9.9165V14.6655H12.2446V21.5832H15.0289Z"
                                        fill="white"
                                    />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_2668_111">
                                    <rect width="28" height="28" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_2668_111">
                                    <rect
                                        width="9"
                                        height="16"
                                        fill="white"
                                        transform="translate(9 6)"
                                    />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg
                            width="50"
                            height="50"
                            viewBox="0 0 28 28"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#clip0_2668_111)">
                                <path
                                    d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z"
                                    fill="#DE383F"
                                />
                                <g clip-path="url(#clip1_2668_111)">
                                    <path
                                        d="M21.5832 21.5832V16.0284C21.5832 13.2984 20.9955 11.213 17.8105 11.213C16.2749 11.213 15.2511 12.0472 14.834 12.8434H14.7961V11.4595H11.7817V21.5832H14.9288V16.5593C14.9288 15.2322 15.1753 13.962 16.8057 13.962C18.4172 13.962 18.4361 15.4597 18.4361 16.6351V21.5643H21.5832V21.5832Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M6.66309 11.4595H9.81017V21.5832H6.66309V11.4595Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M8.23651 6.4165C7.23172 6.4165 6.4165 7.23171 6.4165 8.2365C6.4165 9.2413 7.23172 10.0755 8.23651 10.0755C9.2413 10.0755 10.0565 9.2413 10.0565 8.2365C10.0565 7.23171 9.2413 6.4165 8.23651 6.4165Z"
                                        fill="white"
                                    />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_2668_111">
                                    <rect width="28" height="28" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_2668_111">
                                    <rect
                                        width="16"
                                        height="16"
                                        fill="white"
                                        transform="translate(6 6)"
                                    />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg
                            width="50"
                            height="50"
                            viewBox="0 0 28 28"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#clip0_2668_111)">
                                <path
                                    d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z"
                                    fill="#DE383F"
                                />
                                <g clip-path="url(#clip1_2668_111)">
                                    <path
                                        d="M20.9014 10.214C20.0345 10.214 19.2347 9.92684 18.5923 9.44236C17.8557 8.88697 17.3264 8.07228 17.1395 7.13329C17.0932 6.90128 17.0683 6.66186 17.0659 6.4165H14.5896V13.1832L14.5866 16.8897C14.5866 17.8806 13.9413 18.7208 13.0468 19.0163C12.7872 19.102 12.5069 19.1427 12.2149 19.1266C11.8423 19.1062 11.4931 18.9937 11.1896 18.8122C10.5437 18.4259 10.1058 17.7251 10.0939 16.9235C10.0752 15.6706 11.0881 14.6491 12.3401 14.6491C12.5873 14.6491 12.8246 14.6895 13.0468 14.7627V12.9132V12.2484C12.8124 12.2137 12.5739 12.1956 12.3327 12.1956C10.9623 12.1956 9.68065 12.7652 8.7645 13.7914C8.07205 14.5669 7.6567 15.5564 7.59261 16.5939C7.50865 17.9568 8.00737 19.2524 8.97455 20.2083C9.11666 20.3487 9.26589 20.4789 9.42195 20.5991C10.2512 21.2372 11.2649 21.5832 12.3327 21.5832C12.5739 21.5832 12.8124 21.5654 13.0468 21.5307C14.0443 21.3829 14.9646 20.9263 15.6908 20.2083C16.5833 19.3263 17.0763 18.1553 17.0816 16.9089L17.0689 11.3741C17.4946 11.7025 17.9601 11.9742 18.4597 12.1852C19.2367 12.513 20.0606 12.6792 20.9085 12.6789V10.8807V10.2134L20.9014 10.214Z"
                                        fill="white"
                                    />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_2668_111">
                                    <rect width="28" height="28" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_2668_111">
                                    <rect
                                        width="14"
                                        height="16"
                                        fill="white"
                                        transform="translate(7 6)"
                                    />
                                </clipPath>
                            </defs>
                        </svg>

                        <svg
                            width="50"
                            height="50"
                            viewBox="0 0 28 28"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#clip0_2668_111)">
                                <path
                                    d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z"
                                    fill="#DE383F"
                                />
                                <g clip-path="url(#clip1_2668_111)">
                                    <path
                                        d="M20.7676 13.4634C20.6034 12.7498 20.0197 12.2235 19.3172 12.1451C17.654 11.9593 15.9697 11.9584 14.2936 11.9593C12.6169 11.9584 10.933 11.9593 9.2692 12.1451C8.56703 12.2236 7.9837 12.75 7.81964 13.4634C7.58581 14.4795 7.58301 15.5887 7.58301 16.6349C7.58301 17.6812 7.58301 18.7902 7.81683 19.8063C7.98089 20.5197 8.56423 21.046 9.26675 21.1246C10.9302 21.3105 12.6141 21.3112 14.2906 21.3105C15.9674 21.3114 17.651 21.3105 19.3149 21.1246C20.0171 21.046 20.6008 20.5197 20.7648 19.8063C20.9985 18.7902 20.9997 17.6812 20.9997 16.6349C20.9995 15.5885 21.0013 14.4795 20.7676 13.4634ZM11.4099 14.2509H10.4389V19.4108H9.53686V14.2509H8.58351V13.4057H11.4099V14.2509ZM13.8598 19.411H13.0484V18.9229C12.7261 19.2924 12.4201 19.4725 12.1219 19.4725C11.8606 19.4725 11.6807 19.3667 11.5996 19.14C11.5554 19.0047 11.528 18.7905 11.528 18.4747V14.9365H12.3387V18.2309C12.3387 18.4209 12.3387 18.5195 12.3461 18.5462C12.3655 18.672 12.4271 18.7358 12.5357 18.7358C12.6984 18.7358 12.8684 18.6105 13.0483 18.3562V14.9365H13.8596L13.8598 19.411ZM16.94 18.068C16.94 18.4819 16.9121 18.78 16.858 18.9697C16.7497 19.3025 16.5328 19.4725 16.2103 19.4725C15.9218 19.4725 15.6435 19.3123 15.3723 18.9776V19.4112H14.5616V13.4057H15.3723V15.367C15.6342 15.0446 15.9122 14.8816 16.2103 14.8816C16.5328 14.8816 16.7498 15.0515 16.858 15.3864C16.9125 15.5664 16.94 15.8623 16.94 16.286V18.068ZM19.9999 17.3215H18.3784V18.1147C18.3784 18.5288 18.5139 18.7357 18.7926 18.7357C18.9922 18.7357 19.1084 18.6272 19.1547 18.4105C19.1622 18.3665 19.1729 18.1863 19.1729 17.8612H20.0001V17.9795C20.0001 18.2409 19.9901 18.4209 19.9827 18.5018C19.9556 18.6813 19.8918 18.8442 19.7934 18.9875C19.5689 19.3125 19.2362 19.4727 18.8127 19.4727C18.3886 19.4727 18.0657 19.3201 17.8313 19.0145C17.6594 18.7905 17.571 18.4379 17.571 17.9623V16.3952C17.571 15.9168 17.6494 15.567 17.8217 15.3408C18.0559 15.0346 18.3786 14.8821 18.7927 14.8821C19.1996 14.8821 19.5221 15.0346 19.7493 15.3408C19.9191 15.567 20.0003 15.9168 20.0003 16.3952L19.9999 17.3215Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M18.7857 15.6116C18.5147 15.6116 18.3789 15.8186 18.3789 16.2322V16.6463H19.1895V16.2322C19.1894 15.8186 19.0539 15.6116 18.7857 15.6116Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M15.7769 15.6116C15.6434 15.6116 15.5081 15.6747 15.3726 15.8088V18.536C15.5079 18.6716 15.6434 18.7358 15.7769 18.7358C16.0108 18.7358 16.1296 18.536 16.1296 18.1319V16.2221C16.1296 15.8186 16.0108 15.6116 15.7769 15.6116Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M16.2294 11.5469C16.5283 11.5469 16.8392 11.3653 17.1655 10.9916V11.4848H17.9849V6.96277H17.1655V10.4189C16.9838 10.6756 16.8117 10.8025 16.6478 10.8025C16.5381 10.8025 16.4736 10.7376 16.4557 10.6105C16.4457 10.5837 16.4457 10.484 16.4457 10.292V6.96277H15.6289V10.5385C15.6289 10.8578 15.6563 11.074 15.7015 11.2109C15.7839 11.44 15.9656 11.5469 16.2294 11.5469Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M10.525 9.02705V11.4847H11.4336V9.02705L12.5267 5.41663H11.6079L10.9879 7.79956L10.3429 5.41663H9.38672C9.5783 5.9791 9.7776 6.54438 9.96918 7.10738C10.2607 7.95364 10.4426 8.59166 10.525 9.02705Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M13.7447 11.5469C14.1552 11.5469 14.4742 11.3925 14.7005 11.084C14.8724 10.8577 14.9548 10.5012 14.9548 10.0205V8.43705C14.9548 7.95363 14.8726 7.60026 14.7005 7.37187C14.4742 7.0625 14.1553 6.90808 13.7447 6.90808C13.3363 6.90808 13.0174 7.0625 12.7906 7.37187C12.6166 7.60026 12.5342 7.95363 12.5342 8.43705V10.0205C12.5342 10.5012 12.6166 10.8577 12.7906 11.084C13.0172 11.3925 13.3363 11.5469 13.7447 11.5469ZM13.3536 8.27281C13.3536 7.85442 13.4805 7.64584 13.7447 7.64584C14.0088 7.64584 14.1354 7.85424 14.1354 8.27281V10.175C14.1354 10.5934 14.0088 10.8026 13.7447 10.8026C13.4805 10.8026 13.3536 10.5934 13.3536 10.175V8.27281Z"
                                        fill="white"
                                    />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_2668_111">
                                    <rect width="28" height="28" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_2668_111">
                                    <rect
                                        width="14"
                                        height="17"
                                        fill="white"
                                        transform="translate(7 5)"
                                    />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="font-bold text-3xl">Contáctanos</h3>
                    <p>pdtcomunicaciones@gmail.com</p>
                </div>
            </div>

            <div class="w-full h-full">
                <form class="w-full flex flex-col gap-10">
                    <div class="w-full flex gap-5">
                        <div class="w-full flex flex-col gap-2">
                            <label for="name" class="font-bold text-xl"
                                >Nombre y Compañia</label
                            >
                            <input
                                type="text"
                                id="name"
                                class="w-full h-10 border rounded-md p-3"
                            />
                        </div>

                        <div class="w-full flex flex-col gap-2">
                            <label for="email" class="font-bold text-xl"
                                >Tu Email</label
                            >
                            <input
                                type="email"
                                id="email"
                                class="w-full h-10 border rounded-md p-3"
                            />
                        </div>
                    </div>

                    <div class="w-full flex flex-col gap-5">
                        <h3 class="font-bold text-xl">
                            Estoy interesado en...
                        </h3>
                        <div class="flex flex-wrap gap-4">
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Desarrollo Web</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Creación de App</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Diseño UI/UX</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Diseño de marca</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Creación de Web</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Desarrollo de App</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Mantenimiento</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Diseño gráfico</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 py-0 text-center self-center"
                                >Producción Audiovisual</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Manejo de redes</span
                            >
                            <span
                                class="border rounded-full w-40 p-3 text-center self-center"
                                >Otros</span
                            >
                        </div>
                    </div>

                    <div class="w-full flex flex-col gap-5">
                        <h3 class="font-bold text-xl">
                            Estoy interesado en...
                        </h3>
                        <textarea
                            name="name"
                            cols="10"
                            rows="5"
                            class="border rounded-md"
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="bg-[#171D2A] font-bold p-3 text-lg text-white rounded-2xl hover:bg-[#20293b] duration-200"
                    >
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection
