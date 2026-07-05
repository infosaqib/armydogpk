<header class="bg-dark text-white shadow-lg"
    x-data="{ mobileMenuOpen: false, mobileServicesOpen: false, activeProvince: null }">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center font-bold text-lg">🐕</div>
            <a href="{{route('home')}}" class="font-bold text-xl">Army Dog Center</a>
        </div>

        <div class="hidden md:flex gap-6">
            <a href="{{route('home')}}" class="py-2 hover:text-primary transition">Home</a>
        
            <div class="relative group">
                <a href="{{ route('services') }}" class="hover:text-primary transition inline-flex items-center gap-1 py-2">
                    Services
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
        
                <div
                    class="absolute left-[50%] translate-x-[-70%] top-full pt-3 hidden group-hover:block z-50 w-[90vw] md:w-[70vw] lg:w-[900px]">
                    <x-services-menu />
                </div>
            </div>
        
            <a href="{{route('about')}}" class="py-2 hover:text-primary transition">About</a>
            <a href="{{route('blog')}}" class="py-2 hover:text-primary transition">Blog</a>
            <a href="{{route('contact')}}" class="py-2 hover:text-primary transition">Contact</a>
        </div>

        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path :class="mobileMenuOpen ? 'hidden' : 'block'" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="mobileMenuOpen ? 'block' : 'hidden'" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <div x-show="mobileMenuOpen" x-cloak class="md:hidden bg-dark border-t border-gray-700">
        <div class="px-5 py-4 space-y-3">
            <a href="{{route('home')}}" class="block py-2 text-lg font-medium text-white hover:text-primary">Home</a>

            <div>
                <button @click="mobileServicesOpen = !mobileServicesOpen"
                    class="w-full flex justify-between items-center py-2 text-lg font-medium text-white hover:text-primary text-left">
                    <span>Services</span>
                    <svg class="w-5 h-5 transition-transform text-gray-400"
                        :class="mobileServicesOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="mobileServicesOpen" x-cloak class="pl-4 border-l border-gray-700 space-y-2 my-2">
                    @foreach ($provinces as $province)
                    @php $hasCities = !empty($province['cities']) && count($province['cities']) > 0; @endphp
                    <div>
                        @if($hasCities)
                        <button
                            @click="activeProvince = (activeProvince === '{{ $province['key'] }}' ? null : '{{ $province['key'] }}')"
                            class="w-full flex justify-between items-center py-2 text-base font-medium text-gray-200 hover:text-white text-left">
                            <span>{{ $province['name'] }}</span>
                            <svg class="w-4 h-4 transition-transform text-gray-500"
                                :class="activeProvince === '{{ $province['key'] }}' ? 'rotate-90' : ''" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <div x-show="activeProvince === '{{ $province['key'] }}'" x-cloak
                            class="pl-3 pr-2 py-2 grid grid-cols-2 gap-3 bg-black/30 rounded-lg my-1">
                            @foreach ($province['cities'] as $city)
                            <a href="{{ url('services/' . $city->slug . '.html') }}"
                                class="text-sm text-gray-300 hover:text-amber-500 py-1.5 block">
                                {{ $city->city }}
                            </a>
                            @endforeach
                        </div>
                        @else
                        <div class="py-2 text-base text-gray-500 cursor-not-allowed">
                            {{ $province['name'] }} <span class="text-xs opacity-60">(No services)</span>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            <a href="{{route('about')}}" class="block py-2 text-lg font-medium text-white hover:text-primary">About</a>
            <a href="{{route('blog')}}" class="block py-2 text-lg font-medium text-white hover:text-primary">Blog</a>
            <a href="{{route('contact')}}"
                class="block py-2 text-lg font-medium text-white hover:text-primary">Contact</a>
        </div>
    </div>
</header>