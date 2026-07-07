@extends('layout')

@section('title', 'About Us | Army Dog Center Pakistan')
@section('description', 'Army Dog Center has trained dogs for the military, police, and private clients across Pakistan for over 20 years. Call 03005794720 to learn more.')

@section('content')
<!-- Hero -->
<section class="relative w-full bg-white overflow-hidden">

    <div class="relative w-full" style="min-height: 200px;">
        <!-- Curved background using SVG -->
        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1600 600" preserveAspectRatio="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill="#f85606"
                d="M0,0 L1600,0 L1600,470 C1400,540 1250,560 1100,540 C950,520 850,470 720,490 C560,515 420,580 280,560 C170,545 80,500 0,440 Z" />
        </svg>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center"
            style="min-height: 600px;">
            <!-- Right -->
            <div class="pt-16 lg:pt-1 text-center lg:text-left text-white lg:pl-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-5">
                    ABOUT ARMY DOG CENTER
                </h1>

                <p class="text-base md:text-lg leading-relaxed text-white/95 max-w-xl mx-auto lg:mx-0">
                    For over 20 years, Army Dog Center has trained dogs and handlers for security,
                    tracking, and rescue work, earning the trust of clients across Pakistan.
                </p>
            </div>
            <!-- Left-->
            <div class="flex justify-center lg:justify-start">
                <img src="https://dummyimage.com/600x360"
                    onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1558981806-ec527fa84c39?w=800&q=80';"
                    alt="Army Dog Center trained security dog" class="w-full max-w-[560px] h-auto object-contain drop-shadow-2xl" />
            </div>

        </div>
    </div>
</section>

    <!-- Company Story -->
    <section class="py-6 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="section-title">Our Story</h2>
                    <p class="text-gray-600 mb-4">
                        Army Dog Center opened its doors in 2004. We began as a small military dog training
                        unit and have since grown into one of the most trusted names in dog training in the
                        region.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Over the past 20+ years, we have trained hundreds of dogs that now serve the army,
                        the police, and private homes and businesses. We care about doing this well and
                        treating our dogs right, and that is what sets us apart.
                    </p>
                    <p class="text-gray-600">
                        We believe that every dog has the potential to excel when trained with patience, expertise, and
                        respect.
                    </p>
                </div>
                <div class="bg-gradient-to-br from-primary to-primary-700 rounded-lg p-12 text-white text-center">
                    <div class="text-6xl mb-4">🏆</div>
                    <h3 class="text-3xl font-bold">20+ Years</h3>
                    <p class="mt-2">Of Excellence in Training</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Values -->
    <section class="bg-gray-50 py-6 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow">
                    <h3 class="text-2xl font-bold text-primary mb-4">Mission</h3>
                    <p class="text-gray-600">
                        To train dogs that keep our clients secure and give them peace of mind, while
                        always treating our dogs with care and respect.
                    </p>
                </div>

            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-primary mb-4">Vision</h3>
                <p class="text-gray-600">
                    To be recognized as the leading dog training center in South Asia, setting international standards
                    for canine excellence and innovation.
                </p>
            </div>

            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-primary mb-4">Values</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ Excellence & Quality</li>
                    <li>✓ Animal Welfare</li>
                    <li>✓ Integrity & Trust</li>
                    <li>✓ Innovation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <!-- Why Choose Us -->
    <section class="py-6 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-center mb-12">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-4">
                    <div class="text-3xl">✓</div>
                    <div>
                        <h3 class="font-bold mb-2">Expert Team</h3>
                        <p class="text-gray-600">Certified trainers with military and law enforcement background</p>
                    </div>
                </div>

            <div class="flex gap-4">
                <div class="text-3xl">✓</div>
                <div>
                    <h3 class="font-bold mb-2">Proven Results</h3>
                    <p class="text-gray-600">Over 500 successfully trained dogs serving across the region</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="text-3xl">✓</div>
                <div>
                    <h3 class="font-bold mb-2">Animal Welfare</h3>
                    <p class="text-gray-600">Humane training methods that respect animal wellbeing</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="text-3xl">✓</div>
                <div>
                    <h3 class="font-bold mb-2">24/7 Support</h3>
                    <p class="text-gray-600">Emergency services and ongoing handler support</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection