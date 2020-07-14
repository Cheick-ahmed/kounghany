@extends('layouts.app')
@section('content')
    <header class="mt-20">
        <div class="">
            <img class="bg-cover object-cover w-full" src="{{ asset('images/larm.jpg') }}" alt="" style="height: 80vh">
        </div>
    </header>
    <div class="px-4 md:px-0 md:max-w-5xl md:mx-auto my-10">
        <div class="grid grid-cols-6 gap-12">
            <div class="col-span-4">
                <div class="mb-6">
                    <h4 class="text-xl uppercase md:text-2xl italic">Journée culturelle pour le village de Kounghany</h4>
                    <p class="text-sm font-medium text-gray-500 tracking-wide mt-2">
                        <span>25 Mars 2020</span> -
                        <span>09:25</span>
                    </p>
                </div>
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
            <div class="col-span-2">
                <div class="mb-6">
                    <h4 class="text-lg tracking-wide md:text-xl mb-2">Adresse</h4>
                    <div class="w-full">
                        <img class="w-full object-cover bg-cover rounded-lg shadow-sm" src="{{ asset('images/map.jpg') }}" alt="">
                    </div>
                    <h4 class="text-sm text-gray-600 tracking-wide font-normal md:text-md my-3">9-11 Rue Genin, 93200 St Dénis</h4>
                </div>
                <div class="mb-4">
                    <h4 class="text-lg tracking-wide md:text-xl mb-2">Catégories</h4>
                    <span class="inline-flex items-center px-3 py-2 rounded text-sm font-normal leading-4 bg-gray-300 text-gray-900 mr-2">Séminaire</span>
                    <span class="inline-flex items-center px-3 py-2 rounded text-sm font-normal leading-4 bg-gray-300 text-gray-900 mr-2">Culture</span>
                </div>
                <div class="">
                    <h4 class="text-lg tracking-wide md:text-xl mb-2">Partager</h4>
                    <div class="flex items-center">
                        <a href="#" class="mr-2">
                            <svg class="fill-current text-blue-700 w-6 h-6" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path>
                            </svg>
                        </a>
                        <a href="#" class="">
                            <img  class="w-6 h-6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-12">
            <h4 class="text-xl md:text-2xl italic mb-5">D'autres événements que vous aimeriez</h4>
            @for($i = 0; $i < 2; $i++)
                @include('partials.events.event')
            @endfor
        </div>
    </div>
@endsection
