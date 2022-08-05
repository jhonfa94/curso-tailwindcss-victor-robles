<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- COMPILACION DE BLADE --}}
    @vite('resources/css/app.css')

    <title>Curso Tailwindcss</title>


</head>

{{-- border-red-700
    xs:border-gray-300
    sm:border-yellow-400
    md:border-green-700
    lg:border-blue-700
    xl:border-yellow-800
    2xl:border-purple-700
    border-8 --}}

<body class="bg-scroll" style="background-image: url('/img/pattern.png')">

    {{-- INICIO CABECERA --}}
    <header id="header" class=" h-20 bg-black  text-white bebas
        xs:h-36
    ">
        <div class="container w-11/12 mx-auto flex flex-row
            xs:flex-col
        ">
            <div id="logo" class="flex-1
                xs:mx-auto
            ">
                <div
                    class="
                    group
                    w-64
                    pt-0.5
                    pb-0.5
                    mt-4
                    ml-6
                    xs:ml-0
                    bg-azul-claro
                    text-center
                    tracking-wider
                    cursor-pointer
                    overflow-hidden
                    transition
                    duration-300
                    rounded-sm
                    hover:text-black
                    hover:bg-gray-200
                ">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="
                        animate-spin-low
                        h-10
                        w-10
                        block
                        float-left
                        text-3xl
                        mt-0.5
                        ml-11
                        group-hover:animate-none
                        group-hover:animate-from-bellow
                        "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    {{-- <span class="block float-left text-3xl mt-1 ml-11">
                        S
                    </span> --}}
                    <h3
                        class="
                        block
                        float-right
                        text-4xl
                        mt-1.5
                        mr-1
                        transition
                        duraction-100
                        group-hover:animate-bounce
                        group-hover:animate-from-right

                    ">
                        TAILWIND
                    </h3>
                </div>
            </div>
            <nav class="flex-1
                xs:mx-auto
            ">
                <ul
                    class="
                    flex
                    flex-row
                    h-20
                    items-center
                    text-2xl
                    text-center
                    mr-6
                    xs:mr-0
                    xs:text-center
                    md:justify-end
                ">
                    <li class="menu-item">
                        <a href="#" class="menu-item-a">INICIO</a>
                    </li>
                    <li class="menu-item ">
                        <a href="#" class="menu-item-a">BLOG</a>
                    </li>
                    <li class="menu-item ">
                        <a href="#" class="menu-item-a">FORMACIÓN</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-a">CONTACTO</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
    {{-- FIN CABECERA --}}

    {{-- INICIO SECCION INFORMACION --}}
    <section class="container w-11/12 mx-auto">
        {{-- INICIO BANNER --}}
        <div id="banner"
            class="
                w-full
                h-28
                mx-auto
                border-8
                border-white
                overflow-hidden
                shadow
                m-5
                bg-banner
                banner-position
                animate-bg-banner
            "
            style="background-image: url('/img/bakbaner.png')">
            <h1
                class="
                text-banner
                block
                text-white
                text-4xl
                font-normal
                tracking-wider
                m-7
                mx-auto
                text-center
                animate-text-banner
                xs:text-2xl
                xs:mt-8

            ">
                CURSOS DE DESARROLLO WEB CON VICTOR ROBLES WEB
            </h1>
        </div>
        {{-- FIN BANNER --}}

        {{-- INICIO TARJETAS --}}
        <div id="cards" class="flex flex-nowrap justify-between">

            <div class="card group">
                <div
                    class="card-icon
                    transform
                    group-hover:scale-150
                    group-hover:text-azul-claro
                    group-hover:animate-show-card-icon
                ">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="
                        h-14
                        w-14
                        mx-auto
                    "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>

                </div>
                <h2
                    class="card-category
                    group-hover:text-white
                    group-hover:animate-show-card-category
                ">
                    Desarrollo Web
                </h2>
                <p
                    class="card-description group-hover:text-white group-hover:animate-show-card-description
                ">
                    Aprende los principales lenguajes de desarrollo web
                </p>
            </div>

            <div class="card group">
                <div
                    class="card-icon
                    transform
                    group-hover:scale-150
                    group-hover:text-azul-claro
                    group-hover:animate-show-card-icon
                ">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="
                        h-14
                        w-14
                        mx-auto
                    "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>

                </div>
                <h2
                    class="card-category
                    group-hover:text-white
                    group-hover:animate-show-card-category
                ">
                    Sistemas operativos
                </h2>
                <p class="card-description group-hover:text-white group-hover:animate-show-card-description">
                    Aprende a administrar sistemas operativos
                </p>
            </div>

            <div class="card group">
                <div
                    class="card-icon
                    transform
                    group-hover:scale-150
                    group-hover:text-azul-claro
                    group-hover:animate-show-card-icon
                ">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="
                        h-14
                        w-14
                        mx-auto
                    "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>

                </div>
                <h2
                    class="card-category
                    group-hover:text-white
                    group-hover:animate-show-card-category
                ">
                    Hardware
                </h2>
                <p class="card-description group-hover:text-white group-hover:animate-show-card-description">
                    Conoce todo acerca del hardware
                </p>
            </div>

            <div class="card group">
                <div
                    class="card-icon
                    transform
                    group-hover:scale-150
                    group-hover:text-azul-claro
                    group-hover:animate-show-card-icon
                ">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="
                            h-14
                            w-14
                            mx-auto
                    "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                    </svg>
                </div>
                <h2
                    class="card-category
                    group-hover:text-white
                    group-hover:animate-show-card-category
                ">
                    Redes e Intenet
                </h2>
                <p class="card-description group-hover:text-white group-hover:animate-show-card-description">
                    Configura y administra redes y servidores
                </p>
            </div>

            <div class="card group">
                <div
                    class="card-icon
                    transform
                    group-hover:scale-150
                    group-hover:text-azul-claro
                    group-hover:animate-show-card-icon
                ">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="
                            h-14
                            w-14
                            mx-auto
                    "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                </div>
                <h2
                    class="card-category
                    group-hover:text-white
                    group-hover:animate-show-card-category
                ">
                    Base de datos
                </h2>
                <p class="card-description group-hover:text-white group-hover:animate-show-card-description">
                    Aprende a trabajar con bases de datos
                </p>
            </div>

        </div>


        {{-- FIN TARJETAS --}}

    </section>

    {{-- FIN SECCION INFORMACION --}}







</body>

</html>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

</body>

</html>
