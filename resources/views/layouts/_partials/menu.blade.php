<header class="w-full absolute top-0 z-20 text-white max-w-[1440px] flex flex-col xl:flex-row justify-between items-center gap-3 px-5 py-10">
    <div>
        <a href="{{ route('index') }}">
            <img src="{{asset('assets/img/logo.png')}}" alt="Logo" width="80" height="80">
        </a>
    </div>
    <nav class="hidden md:block">
        <ul class="flex gap-8 font-light text-lg">
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
                <a class="bg-red-500 py-1 px-4 font-medium rounded-full hover:bg-red-600 duration-200" href="#">Contáctanos</a>
            </li>
            <li>
                <a href="#">Idioma</a>
            </li>
        </ul>
    </nav>
</header>