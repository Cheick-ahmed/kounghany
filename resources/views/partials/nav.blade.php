<div class="mb-20 fixed top-0 py-3 w-full z-50 top-0 transition-all duration-700 bg-gray-900" :class=" pinned  ?  'shadow bg-gray-700' : 'bg-gray-900'">
    <nav class="container">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <nuxt-link :to=" { name : 'index' } " class="tracking-wider  uppercase font-header text-lg font-bold italic">
                    <svg class="stroke-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                </nuxt-link>
                <button class="focus:outline-none block lg:hidden relative flex flex-col items-center justify-center h-8 w-8">
                    <span class="h-1 w-6 rounded bg-orange-500 mb-1 transition-all duration-300"></span>
                    <span class="h-1 w-6 rounded bg-orange-400 mb-1 transition-all duration-300"></span>
                    <span class="h-1 w-6 rounded bg-orange-400"></span>
                </button>
            </div>
            <div class="text-gray-200 lg:flex py-4" :class=" mobileNavOpen == true ? 'flex-col' : 'hidden' ">
                <a href="" class="lg:mx-2 font-medium tracking-wider block text-md py-2 lg:py-3 mb-2 lg:mb-0 px-2 lg:px-4 hover:bg-gray-700 rounded">Événements</a>
                <a href="" class="lg:mx-2 font-medium tracking-wider block text-md py-2 lg:py-3 mb-2 lg:mb-0 px-2 lg:px-4 hover:bg-gray-700 rounded">Réalisations</a>
                <a href="" class="lg:mx-2 font-medium tracking-wider block text-md py-2 lg:py-3 mb-2 lg:mb-0 px-2 lg:px-4 hover:bg-gray-700 rounded">A propos</a>
                <a href="" class="lg:mx-2 font-medium tracking-wider block text-md py-2 lg:py-3 mb-2 lg:mb-0 px-2 lg:px-4 hover:bg-gray-700 rounded">Contact</a>
            </div>
        </div>
    </nav>
</div>
