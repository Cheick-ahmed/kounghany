@extends('layouts.app')
@section('content')
    <header class="mt-20">
        <div class="">
            <img class="bg-cover object-cover w-full" src="{{ asset('images/larm.jpg') }}" alt="" style="height: 50vh">
        </div>
        <div class="px-4 md:px-0 md:max-w-5xl md:mx-auto bg-white w-full rounded-tl rounded-rl -mt-20 transform -translate-y-6 mx-2 md:mx-0 overflow-x-hidden">
            <div class="p-10">
                <h4 class="text-2xl tracking-wide font-medium uppercase md:text-3xl italic mb-2">Journée culturelle pour le village de Kounghany</h4>
                <span class="inline-flex items-center px-4 py-2 rounded text-sm font-normal leading-4 bg-blue-300 text-blue-900 mr-2">Éducation</span>
            </div>
        </div>
    </header>
    <div class="grid md:grid-cols-3 gap-6 px-4 md:px-0 md:max-w-5xl md:mx-auto mb-10">
        <div class="col-span-1 md:col-span-2 bg-white w-full">
            <div class="p-10">
                <h4 class="text-2xl tracking-wide font-normal mb-3">Description</h4>
                <p class="text-gray-700 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur culpa dolores, doloribus eos et facilis, impedit itaque minus quasi quibusdam recusandae repudiandae sint soluta veritatis voluptatem voluptatibus? Exercitationem, voluptas?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolores earum eius id magnam nobis recusandae rerum sunt. Consectetur deleniti dolorem doloremque officiis recusandae similique sit, tempore tenetur! Architecto, laborum.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur dignissimos facere nesciunt, pariatur veniam. Ducimus error eveniet harum labore rem repellendus sed! Ipsum magnam minus necessitatibus quas reiciendis velit?
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nulla obcaecati quia tenetur? Accusamus distinctio in recusandae vitae. Culpa, dolorem doloremque error iusto pariatur porro quibusdam saepe soluta temporibus totam.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nulla obcaecati quia tenetur? Accusamus distinctio in recusandae vitae. Culpa, dolorem doloremque error iusto pariatur porro quibusdam saepe soluta temporibus totam.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A itaque libero natus nisi officiis porro quibusdam! Itaque nesciunt sit vero. Accusamus blanditiis eligendi est excepturi obcaecati reprehenderit sapiente tenetur veniam.
                </p>
            </div>
        </div>
        <div class="col-span-1 bg-white">
            <div class="px-8 py-10">
                <div class="flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap">
                    <div class="mt-3 flex items-center text-sm font-medium leading-5 text-gray-600 sm:mr-6 mb-2">
                        <svg class="flex-shrink-0 mr-1 h-5 w-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        25 mars 2020 - 09:00
                    </div>
                    <div class="flex items-center text-sm font-medium leading-5 text-gray-600">
                        <svg class="flex-shrink-0 mr-1 h-5 w-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        9-11 rue Genin 93200 St Denis
                    </div>
                </div>
                <div class="mb-4">
                    <h4 class="text-lg tracking-wide md:text-xl mt-6 mb-2">Catégories</h4>
                    <span class="inline-flex items-center px-3 py-2 rounded text-sm font-normal leading-4 bg-gray-300 text-gray-900 mr-2">Séminaire</span>
                    <span class="inline-flex items-center px-3 py-2 rounded text-sm font-normal leading-4 bg-gray-300 text-gray-900 mr-2">Culture</span>
                </div>
            </div>
        </div>
    </div>
@endsection
