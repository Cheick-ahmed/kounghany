<div class="w-full sm:max-w-5xl mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
    <a href="{{ route('realisations.show', 1) }}" class="">
        <div class="rounded shadow text-black mb-4 bg-white grid lg:grid-cols-3 gap-4 shadow">
            <div class="flex flex-col items-center justify-center text-4xl font-semibold">
                <img class="bg-cover object-cover rounded-tl rounded-bl" src="{{ asset('images/ato.jpg') }}" alt="">
            </div>
            <div class="col-span-2 text-gray-900 font-semibold px-6 py-8">
                <a href="{{ route('realisations.show', 1) }}" class="text-3xl tracking-wide font-bold">Case des tout petits</a>
                <p class="mt-2 leading-7 tracking-wide mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum non dignissimos iure officia explicabo laudantium totam sed consectetur quae, architecto? Quam aut sis non tempore quas nisi sunt enim.
                </p>
                <div class="flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap">
                    <span class="inline-flex items-center px-4 py-2 rounded text-sm font-normal leading-4 bg-blue-300 text-blue-900 mr-2">Éducation</span>
                    <span class="inline-flex items-center px-4 py-2 rounded text-sm font-normal leading-4 bg-red-300 text-red-900">Terminée</span>
                </div>
            </div>
        </div>
    </a>
</div>
