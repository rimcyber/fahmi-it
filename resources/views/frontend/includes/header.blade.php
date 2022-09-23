<nav class="bg-white drop-shadow-md" x-data="{ showMobileNav: false }">
    <div class="max-w-7xl mx-auto px-2 py-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button @click="showMobileNav = !showMobileNav" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">{{ __('Open main menu') }}</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center content-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <img class="block lg:hidden h-10 w-auto" src="{{ asset('img/fahmi-it.png') }}"
                            alt="{{ app_name() }}">
                    </a>
                    <a href="/">
                        <img class="hidden lg:block h-12 w-auto" src="{{ asset('img/fahmi-it.png') }}"
                            alt="{{ app_name() }}">
                    </a>
                </div>
            </div>
            <div class="hidden sm:block sm:ml-6">
                <div class="flex float-right space-x-4">
                    <a href="{{ route('frontend.posts.index') }}"
                        class="text-gray-600 border-transparent border-b-2 hover:border-orange-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
                        {{ __('Posts') }}
                    </a>
                    <a href="{{ route('frontend.categories.index') }}"
                        class="text-gray-600 border-transparent border-b-2 hover:border-orange-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
                        {{ __('Categories') }}
                    </a>
                    <a href="{{ route('frontend.tags.index') }}"
                        class="text-gray-600 border-transparent border-b-2 hover:border-orange-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
                        {{ __('Tags') }}
                    </a>
                    <a href="{{ route('frontend.comments.index') }}"
                        class="text-gray-600 border-transparent border-b-2 hover:border-orange-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
                        {{ __('Comments') }}
                    </a>
                </div>
            </div>


        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden absolute z-10 w-full p-1" id="mobile-menu" x-show="showMobileNav"
            @click.away="showMobileNav = false" x-transition:enter="transition ease-out duration-100 transform"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
                <a href="{{ route('frontend.posts.index') }}"
                    class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    {{ __('Posts') }}
                </a>
                <a href="{{ route('frontend.categories.index') }}"
                    class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    {{ __('Categories') }}
                </a>
                <a href="{{ route('frontend.tags.index') }}"
                    class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    {{ __('Tags') }}
                </a>
                <a href="{{ route('frontend.comments.index') }}"
                    class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    {{ __('Comments') }}
                </a>
                @can('view_backend')
                    <a href='{{ route('backend.dashboard') }}'
                        class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium border" role="menuitem">
                        <i class="fas fa-tachometer-alt fa-fw"></i>&nbsp;{{ __('Admin Dashboard') }}
                    </a>
                    @endif
                </div>
            </div>
    </nav>
