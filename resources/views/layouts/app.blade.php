<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kounghany Nafa - @yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="text-black">
    <header class="">
        <div class="">
            @include('partials.nav')
        </div>
        <div class="container mt-32 grid grid-cols-2 gap-10">
            <div class="text-white">
                <h3 class="text-white text-5xl italic">Kounghany Nafa</h3>
                <h3 class="text-green-600 text-4xl italic">Charity association</h3>
                <p class="text-md font-normal tracking-wider leading-relaxed my-8">
                    KOUNGHANY NAFA est une association à but non lucratif régie par la loi française de 1901 créée en 2007 par les ressortissants du village KOUNGHANY (SENEGAL) résidants en France.
                </p>
                <a href="#" class="inline-block font-normal tracking-widest text-sm py-2 lg:py-3 mb-2 lg:mb-0 px-2 lg:px-10 hover:bg-gray-700 lg:hover:bg-green-800 lg:bg-green-700 rounded-full tansition-all duration-500 mr-2">En savoir plus</a>
                <a href="#" class="inline-block font-normal tracking-widest text-sm py-2 lg:py-3 mb-2 lg:mb-0 px-2 lg:px-12 hover:bg-gray-700 lg:hover:bg-orange-800 lg:bg-orange-700 rounded-full tansition-all duration-500">Dons</a>
            </div>
            <div class="h-32 border border-blue-300"></div>
        </div>
    </header>
    <main class="container my-12">
        @yield('content')
    </main>
</body>
</html>
