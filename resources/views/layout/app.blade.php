<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ url('img/favicon.png')}}">
        <title>Full-stack Developer | Pranta</title>

        {{-- Fonts --}}

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://apis.google.com/js/platform.js"></script>
    </head>
    <body class="antialiased text-gray-800 dark:text-gray-200">
      <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
         {{-- ====== Navbar Section Start --}}
         <x-layout.navbar></x-layout.navbar>

           {{ $slot }}

         <x-layout.footer></x-layout.footer>
      </div>
    {{-- ====== Navbar Section End --}}
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
