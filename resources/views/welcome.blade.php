<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="space-y-12">

        <!-- Sección 1 -->
        <section
            x-show="show"
            x-transition.opacity.duration.700ms
            class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8"
        >
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-3 text-center">
                Gestion de productos 
            </h2>
            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                Esta es una plataforma que permite gestionar productos,
                puedes agregar, editar y eliminar productos. Solo tienes que
                iniciar sesión con tu cuenta.
            </p>
        </section>

        <!-- Sección 2 -->
        <section
            x-show="show"
            x-transition.opacity.duration.900ms
            class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8"
        >
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-3 text-center">
                Diseño
            </h2>
            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                Construido con Tailwind CSS, usando espaciados generosos,
                tipografía clara y transiciones suaves para una experiencia moderna
                tanto en modo claro como oscuro.
            </p>
        </section>

        <!-- Sección 3 -->
        <section
            x-show="show"
            x-transition.opacity.duration.1100ms
            class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8"
        >
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-3 text-center">
                Animaciones
            </h2>
            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                Se utilizan animaciones ligeras al cargar el contenido y transiciones
                naturales entre estados, manteniendo un rendimiento óptimo y
                una sensación profesional.
            </p>
        </section>

    </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
