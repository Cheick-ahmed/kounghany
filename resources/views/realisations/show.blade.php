@extends('layouts.app')
@section('content')
    <header class="mt-20 overflow-x-hidden">
        <div class="">
            <img class="bg-cover object-cover w-full" src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" style="height: 50vh">
        </div>
        <div class="px-4 md:px-0 md:max-w-5xl md:mx-auto bg-white w-full rounded-tl rounded-tr -mt-20 transform -translate-y-6 mx-2 md:mx-0 overflow-x-hidden">
            <div class="p-10">
                <h4 class="text-2xl tracking-wide font-medium uppercase md:text-3xl italic mb-2">Case des tout petits</h4>
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
            <div class="p-10">
                hello
            </div>
        </div>
    </div>
@endsection
