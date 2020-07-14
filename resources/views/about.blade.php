@extends('layouts.app')
@section('content')
    <div>
        <div class="relative bg-white overflow-hidden mt-20">
            <div class="max-w-screen-xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h2 class="text-3xl text-indigo-900 tracking-tight leading-10 font-bold text-gray-900 sm:text-4xl sm:leading-none md:text-4xl">Qui sommes-nous ?</h2>
                            <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                KOUNGHANY NAFA est une association à but non lucratif, régie par la loi française de 1901. Créée en 2007 par les ressortissants du village de KOUNGHANY(SENEGAL) résidants en France.
                            </p>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
            </div>
        </div>
        <div class="px-4 md:px-0 md:max-w-5xl md:mx-auto my-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-16">
                <grid class="col-span-1"></grid>
                <grid class="col-span-3">
                    <h2 class="text-xl text-indigo-900 tracking-tight leading-10 font-medium text-gray-900 sm:text-xl sm:leading-none md:text-2xl">Tisser des liens de solidarité</h2>
                    <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-lg md:mt-5 md:text-lg lg:mx-0">
                        Nous avons décidé collégialement que cette association soit le socle idéal afin que les jeunes nés au village et ceux nés en France, puissent se connaitre et créer des liens de fraternités, d’amour, dans le but de travailler ensemble main dans la main pour améliorer le quotidien de nos familles au village.
                    </p>
                </grid>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-8">
                <grid class="col-span-3">
                    <h2 class="text-xl text-indigo-900 tracking-tight leading-10 font-medium text-gray-900 sm:text-xl sm:leading-none md:text-2xl">Réprendre le flambeau</h2>
                    <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-lg md:mt-5 md:text-lg lg:mx-0 mb-4">
                        Nous sommes très reconnaissants envers nos anciens qui ont énormément travaillés avec leurs moyens pour le développement du village, notamment au niveau de la santé. Mais en tant que jeunes il nous est important de les soulager car comme le dit un dicton soninké,
                    </p>
                    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                        <p>
                            Lorsque tu as longtemps œuvré sans regarder derrière toi, et que tu as pris de l’âge, il est si jouissif de se retourner et de voir que la suite a été prise par ton enfant.
                        </p>
                    </div>
                </grid>
                <grid class="col-span-1">
                </grid>
            </div>
        </div>
    </div>


@endsection
