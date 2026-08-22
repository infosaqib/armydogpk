<header class="bg-dark text-white shadow-lg"
    x-data="{ mobileMenuOpen: false, mobileServicesOpen: false, activeProvince: null }">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center"
        aria-label="Main navigation">
        <div class="flex items-center gap-2">
            <!-- Logo Container -->
            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center overflow-hidden font-bold text-lg">
                <img src="{{ asset('images/site_images/logo.png') }}" alt="Army Dog Center Pakistan Logo"
                    class="w-full h-full object-cover">
            </div>
            <a href="{{route('home')}}" class="font-bold text-xl" rel="home">Army Dog Center Pakistan</a>
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
                            <a href="{{ url('services/' . $city->slug ) }}"
                                class="text-sm text-gray-300 hover:text-primary py-1.5 block">
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

<!-- Fixed content -->

<div class="fixed bottom-6 right-6 z-50 flex flex-col gap-3 items-end">
  <a href="tel:+923005794720"
        class="flex items-center justify-center w-14 h-14 bg-primary text-white rounded-full shadow-2xl hover:scale-110 active:scale-95 transition-all duration-300 group relative"
        style="background-color: var(--tw-primary, #1c985d);" {{-- Fallback to a dark blue if your theme's 'primary'
        isn't loaded --}} aria-label="Call Us">

        <span
            class="absolute right-16 bg-gray-900 text-white text-xs font-semibold px-2.5 py-1.5 rounded-md shadow-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none hidden md:block">
            Call Us
        </span>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
        </svg>
    </a>
    <a href="https://wa.me/923457125252?text=Hello,%20I%20am%20interested%20in%20your%20services." target="_blank"
        rel="noopener noreferrer"
        class="flex items-center justify-center w-14 h-14 bg-[#25D366] text-white rounded-full shadow-2xl hover:scale-110 active:scale-95 transition-all duration-300 group relative"
        aria-label="Chat on WhatsApp">

        <span
            class="absolute right-16 bg-gray-900 text-white text-xs font-semibold px-2.5 py-1.5 rounded-md shadow-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none hidden md:block">
            WhatsApp Us
        </span>

        <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.746.953 3.71 1.454 5.709 1.455h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
        </svg>
    </a>

  

</div>