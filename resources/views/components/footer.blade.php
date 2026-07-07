<footer class="bg-dark text-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <!-- About -->
            <div>
                <h4 class="text-white font-bold mb-4">About Us</h4>
                <p class="text-sm">Army Dog Center trains and provides skilled dogs and handlers for
                    security, tracking, and rescue work across Pakistan.</p>
            </div>

            <!-- Social Media -->
            <div>
                <h4 class="text-white font-bold mb-4">Social Media</h4>
                <ul class="text-sm space-y-3">
                    <li>
                        <a href="https://www.facebook.com/share/1Fnq6s8gGr/" target="_blank" rel="noopener noreferrer"
                            class="flex items-center gap-2 hover:text-primary">
                            <svg class="h-5 w-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24h-1.918c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0z" />
                            </svg>
                            Facebook
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com/@armydogcenterokar507?si=pBVCxBTiXj1u9O8r" target="_blank"
                            rel="noopener noreferrer" class="flex items-center gap-2 hover:text-primary">
                            <svg class="h-5 w-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                            YouTube
                        </a>
                    </li>
                    <li>
                        <a href="mailto:contact@armydogpk.com" class="flex items-center gap-2 hover:text-primary">
                            <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Email
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-bold mb-4">Quick Links</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="{{ route('services') }}" class="hover:text-primary">Services</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-primary">About</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:text-primary">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-primary">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-white font-bold mb-4">Contact</h4>
                <div class="text-sm space-y-2">
                    <p>📞 <a href="tel:+923457125252" class="hover:text-primary">03457125252</a></p>
                    <p>📞 <a href="tel:+923336937508" class="hover:text-primary">03336937508</a></p>
                    <p>📞 <a href="tel:+923005794720" class="hover:text-primary">03005794720</a></p>
                    </p>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-8 text-center text-sm">
            <p>&copy; {{ date('Y') }} Army Dog Center Pakistan. All rights reserved.</p>
        </div>
    </div>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Army Dog Center",
        "url": "{{ url('/') }}",
        "email": "contact@armydogpk.com",
        "telephone": ["+923457125252", "+923336937508", "+923005794720"],
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "PK"
        },
        "sameAs": [
            "https://www.facebook.com/share/1Fnq6s8gGr/",
            "https://youtube.com/@armydogcenterokar507?si=pBVCxBTiXj1u9O8r"
        ]
    }
    </script>
</footer>