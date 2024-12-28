<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-sans">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Todo List</title>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        @vite('resources/js/main.js')
    </head>
    <body class="dark:bg-neutral-950 dark:text-slate-100">
        @include('components.pack.header')

        <main class="mx-auto pt-16 sm:pt-20">
            {{ $slot }}
        </main>
    </body>
</html>
