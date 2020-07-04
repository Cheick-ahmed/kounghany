@extends('layouts.app')

@section('content')
    @include('partials.events.cause')
    <section class="my-32">
        <h4 class="text-white text-5xl italic mt-10">Événements</h4>
        <div class="border-b border-gray-400 flex items-center justify-between mt-0 mb-4 pb-1">
            <h5 class="text-white text-xl italic">Très prochainement</h5>
            <a href="#" class="text-white text-md italic">Tous les événements &rarr;</a>
        </div>
        @for($i = 0; $i < 3; $i++)
            @include('partials.events.event')
        @endfor
    </section>
    <aside class="grid grid-cols-3 gap-12 my-32">
        <div class="text-white">
            <h4 class="text-5xl italic">Nous réjoindre</h4>
            <p class="text-md font-normal tracking-wider leading-relaxed my-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut expedita ipsa quasi, quos sapiente sunt vitae. Consequuntur, dolore eaque eius error illo.
            </p>
            <a href="#" class="inline-block font-normal tracking-widest text-sm py-2 lg:py-3 my-4 px-2 lg:px-12 hover:bg-gray-700 lg:hover:bg-orange-800 lg:bg-orange-700 rounded-full tansition-all duration-500">Faites un don</a>
        </div>
        <div class="col-span-2 mt-2">
            <video controls="controls" class="shadow-2xl object-contain rounded-sm"><source src="https://koughanynafa.website/join-us.mp4"><source></video>
        </div>
    </aside>
@endsection
