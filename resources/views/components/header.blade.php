<header class="bg-dark text-white shadow-lg">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center font-bold text-lg">🐕</div>
            <a href="/" class="font-bold text-xl">Army Dog Center</a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex gap-6">
            <a href="/" class="hover:text-primary transition">Home</a>
            <a href="/services" class="hover:text-primary transition">Services</a>
            <a href="/about" class="hover:text-primary transition">About</a>
            <a href="/blog" class="hover:text-primary transition">Blog</a>
            <a href="/contact" class="hover:text-primary transition">Contact</a>
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
            <a href="/" class="block py-2 hover:text-primary">Home</a>
            <a href="/services" class="block py-2 hover:text-primary">Services</a>
            <a href="/about" class="block py-2 hover:text-primary">About</a>
            <a href="/team" class="block py-2 hover:text-primary">Team</a>
            <a href="/contact" class="block py-2 hover:text-primary">Contact</a>
            @auth
            <a href="/dashboard" class="block py-2 hover:text-primary">Dashboard</a>
            <a href="/logout" class="block py-2 hover:text-primary">Logout</a>
            @endauth
            @guest
            <a href="/login" class="block py-2 text-primary font-semibold">Login</a>
            @endguest
        </div>
    </div>
</header>