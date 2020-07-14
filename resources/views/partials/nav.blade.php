<nav x-data="{ open: false }" class="bg-white shadow mb-20 fixed top-0 py-3 w-full z-50 top-0 transition-all duration-700">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center h-16">
            <div class="flex items-center justify-between">
                <div class="flex-shrink-0">
                    <img class="h-8 w-auto" src="{{ asset('images/logo.svg') }}" alt="Logo">
                </div>
                <div class="hidden sm:block">
                    <div class="flex">
                        <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-700 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Réalisations</a>
                        <a href="{{ route('events.index') }}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-700 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Événements</a>
                        <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-700 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">A propos</a>
                        <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-700 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Contact</a>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out" x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" aria-label="Main menu" x-bind:aria-expanded="open">
                    <svg x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }" class="sm:hidden hidden">
        <div class="px-2 pt-2 pb-3">
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Réalisations</a>
            <a href="{{ route('events.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Événements</a>
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">A propos</a>
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Contact</a>
        </div>
    </div>
</nav>
