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
                            <svg class="fill-current text-orange-600 w-6 h-6" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
