<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Portfolio CMS Editor' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
    </head>
    <body class="bg-gray-100 text-gray-900 font-sans antialiased m-0 p-0 overflow-hidden h-screen w-screen">
        {{ $slot }}
        @livewireScripts
    </body>
</html>
