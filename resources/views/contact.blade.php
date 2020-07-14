@extends('layouts.app')
@section('content')
    <div class="grid grid-cols-2">
        <div class="min-h-screen px-20">
            <div class="py-40">
                <h3 class="text-3xl text-gray-900 font-bold tracking-wide mb-6">Contactez-nous !</h3>
                <p class="text-gray-500 text-md leading-relaxed tracking-wide">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid amet autem modi placeat quidem repellendus voluptates voluptatibus.
                </p>
                <div class="my-10">
                    <div class="flex items-center my-3">
                        <svg class="stroke-current text-gray-500 w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span class="text-gray-500 text-md">kounghany.nafa93@gmail.com</span>
                    </div>
                    <div class="flex my-6">
                        <svg class="stroke-current text-gray-500 w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <div>
                            <div class="mb-3">
                                <span class="text-gray-500 text-md">06 69 74 75 98</span> <br>
                                <span class="text-gray-500 text-md">Khalifa Traoré (Secrétaire Général)</span>
                            </div>
                            <div>
                                <span class="text-gray-500 text-md">06 34 15 68 83</span> <br>
                                <span class="text-gray-500 text-md">Mamadou Kanouté (Responsable de la communication)</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center my-6">
                        <svg class="stroke-current text-gray-500 w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span class="text-gray-500 text-md">19 Rue de Boulangerie, 93200 Saint-Denis</span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img class="w-full object-cover" src="{{ asset('images/kirill.jpg') }}" alt="">
        </div>
    </div>
@endsection
