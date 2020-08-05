@extends('layouts.app')
@section('content')
    <div class="px-4 md:px-0 md:max-w-5xl md:mx-auto my-12">
        <header class="flex items-center justify-between md:min-h-screen mt-20 md:mt-0 mb-12 md:mb-0">
            <div class="w-full md:w-8/12 text-white">
                <h3 class="text-4xl md:text-5xl italic">Kounghany Nafa</h3>
                <h3 class="text-3xl text-nafa-line md:text-4xl italic">Charity association</h3>
                <p class="text-md font-normal tracking-wider leading-relaxed my-8">
                    KOUNGHANY NAFA est une association à but non lucratif régie par la loi française de 1901 créée en 2007 par les ressortissants du village KOUNGHANY (SENEGAL) résidants en France.
                </p>
                <a href="#" class="inline-block font-normal tracking-widest text-sm py-2 lg:py-3 mb-2 lg:mb-0 px-2 lg:px-12 hover:bg-gray-700 lg:hover:bg-orange-700 bg-orange-600 rounded tansition-all duration-500">Dons</a>
                <a href="#" class="inline-block font-normal tracking-widest text-sm py-2 lg:py-3 mb-2 lg:mb-0 px-2 lg:px-10 hover:bg-gray-700 lg:hover:bg-nafa-line bg-transparent border border-nafa-line rounded tansition-all duration-500 mr-2">A propos</a>
            </div>
            <div class="hidden md:w-4/12 md:border md:border-red-700 md:h-2"></div>
        </header>
        @include('partials.events.cause')
        <section class="mt-12 md:my-20 text-white">
            <h4 class="text-4xl md:text-5xl italic mt-10">Événements</h4>
            <div class="border-b border-gray-400 text-nafa-line flex items-center justify-between mt-0 mb-4 pb-1">
                <h5 class="text-md md:text-xl italic">Très prochainement</h5>
                <a href="{{ route('events.index') }}" class="text-sm md:text-md italic">Tous les événements &rarr;</a>
            </div>
            @for($i = 0; $i < 3; $i++)
                @include('partials.events.event')
            @endfor
        </section>
        <aside class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12 md:my-32">
            <div class="text-white">
                <h4 class="text-4xl md:text-5xl italic">Nous réjoindre</h4>
                <p class="text-md font-normal tracking-wider leading-relaxed my-2 md:my-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut expedita ipsa quasi, quos sapiente sunt vitae. Consequuntur, dolore eaque eius error illo.
                </p>
            </div>
            <div class="md:col-span-2 mt-0 md:mt-2">
                <video controls="controls" class="shadow-2xl object-contain rounded-sm"><source src="https://koughanynafa.website/join-us.mp4"><source></video>
            </div>
        </aside>
    </div>
@endsection
