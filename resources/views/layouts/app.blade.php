<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans overflow-x-hidden">

        <x-header />
        {{-- make component header!!!!!!^ --}}

        <div class="min-h-screen">

            <!-- Page Content -->
            <main class="w-full h-full">
                <section class="bg-slate-50 w-full h-[70vh] bg-cover bg-center">
                    <div class="bg-black bg-opacity-30 w-full h-full">
                        @yield('content')
                    </div>
                </section>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>