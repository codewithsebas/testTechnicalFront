<header
    class="w-full fixed top-0 z-50 transition duration-200  text-white max-w-[1440px] flex justify-between sm:flex-col sm:justify-center sm:items-center md:flex-row md:justify-between gap-3 px-10 py-10"
>
    <div>
        <a href="{{ route('index') }}">
            <img
                src="{{ asset('assets/img/logo.png') }}"
                alt="Logo"
                width="80"
                height="80"
            />
        </a>
    </div>

    <button id="showMenu" class="sm:hidden">
        <svg
            width="40px"
            height="40px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4 5C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H4ZM3 12C3 11.4477 3.44772 11 4 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H4C3.44772 13 3 12.5523 3 12ZM3 18C3 17.4477 3.44772 17 4 17H20C20.5523 17 21 17.4477 21 18C21 18.5523 20.5523 19 20 19H4C3.44772 19 3 18.5523 3 18Z"
                    fill="#ffffff"
                ></path>
            </g>
        </svg>
    </button>

    <nav class="hidden sm:flex z-50">
        <ul class="flex sm:flex-row gap-8 font-light text-lg">
            <li>
                <a href="{{ route('service-1') }}">Nuestros Servicios</a>
            </li>
            <li>
                <a href="#">Portafolio</a>
            </li>
            <li>
                <a href="#">Acerca de</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a
                    class="bg-red-500 py-1 px-4 font-medium rounded-full hover:bg-red-600 duration-200"
                    href="#"
                    >Contáctanos</a
                >
            </li>
            <li>
                <a href="#">Idioma</a>
            </li>
        </ul>
    </nav>

    <div
        id="mainMenu"
        class="absolute right-0 top-0 sm:hidden translate-x-60 transition duration-200"
    >
        <nav
            class="bg-black sm:bg-transparent flex flex-col items-center gap-5 rounded-md py-8 px-10 z-50"
        >
            <button id="hiddenMenu">
                <svg
                    width="40px"
                    height="40px"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z"
                            fill="#ffffff"
                        ></path>
                    </g>
                </svg>
            </button>
            <ul class="flex flex-col gap-8 font-light text-lg">
                <li>
                    <a href="{{ route('service-1') }}">Nuestros Servicios</a>
                </li>
                <li>
                    <a href="#">Portafolio</a>
                </li>
                <li>
                    <a href="#">Acerca de</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a
                        class="bg-red-500 py-1 px-4 font-medium rounded-full hover:bg-red-600 duration-200"
                        href="#"
                        >Contáctanos</a
                    >
                </li>
                <li>
                    <a href="#">Idioma</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
