<header class="bg-dark text-white shadow-lg">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center font-bold text-lg">🐕</div>
            <a href="{{route('home')}}" class="font-bold text-xl">Army Dog Center</a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex gap-6">
            <a href="{{route('home')}}" class="hover:text-primary transition">Home</a>

            <!-- Services -->
            <div class="relative group">
                <a href="{{ route('services') }}" class="hover:text-primary transition inline-flex items-center gap-1">
                    Services

                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div class="absolute right-0 top-full pt-3 hidden group-hover:block z-50 w-[900px]">
                    <x-services-menu />
                </div>
            </div>

            <a href="{{route('about')}}" class="hover:text-primary transition">About</a>
            <a href="{{route('blog')}}" class="hover:text-primary transition">Blog</a>
            <a href="{{route('contact')}}" class="hover:text-primary transition">Contact</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-dark border-t border-gray-700">
        <div class="px-4 py-2 space-y-2">
            <a href="{{route('home')}}" class="block py-2 hover:text-primary">Home</a>
            <a href="{{route('services')}}" class="block py-2 hover:text-primary">Services</a>
            <a href="{{route('about')}}" class="block py-2 hover:text-primary">About</a>
            <a href="{{route('blog')}}" class=" block py-2 hover:text-primary">Blog</a>
            <a href="{{route('contact')}}" class="block py-2 hover:text-primary">Contact</a>
        </div>
    </div>
</header>