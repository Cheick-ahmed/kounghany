@extends('layouts.app')
@section('content')
    <header class="mt-20">
        <div class="">
            <img class="bg-cover object-cover w-full" src="{{ asset('images/ato.jpg') }}" alt="" style="height: 80vh">
        </div>
    </header>
    <div class="px-4 md:px-0 md:max-w-5xl md:mx-auto my-10">
        <h4 class="text-4xl md:text-5xl italic mb-6">Nos réalisations</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{ asset('images/nicholas.jpg') }})" title="Woman holding a mug">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="text-gray-900 font-medium tracking-wide text-xl mb-2">Distribution de matériel</div>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-4 py-2 rounded text-sm font-normal leading-4 bg-red-300 text-red-900 mr-2">Terminée</span>
                        <span class="inline-flex items-center px-3 py-2 rounded text-sm font-normal leading-4 bg-gray-300 text-gray-900">Culture</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{ asset('images/nicholas.jpg') }})" title="Woman holding a mug">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <a href="#" class="block mb-8">
                        <div class="text-gray-900 font-medium tracking-wide text-xl mb-2">Distribution de matériel</div>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </a>
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-4 py-2 rounded text-sm font-normal leading-4 bg-green-300 text-green-900 mr-2">En cours</span>
                        <span class="inline-flex items-center px-3 py-2 rounded text-sm font-normal leading-4 bg-gray-300 text-gray-900">Culture</span>
                    </div>
                </div>
            </div>
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{ asset('images/nicholas.jpg') }})" title="Woman holding a mug">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="text-gray-900 font-medium tracking-wide text-xl mb-2">Distribution de matériel</div>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-4 py-2 rounded text-sm font-normal leading-4 bg-blue-300 text-blue-900 mr-2">À venir</span>
                        <span class="inline-flex items-center px-3 py-2 rounded text-sm font-normal leading-4 bg-gray-300 text-gray-900">Culture</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
