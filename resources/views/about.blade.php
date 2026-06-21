@extends('layout')

@section('title', 'About Us - Army Dog Center')
@section('description', 'Learn about Army Dog Center, our mission, vision, and values.')

@section('content')
<!-- Hero -->
<section class="bg-dark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold">About Army Dog Center</h1>
        <p class="text-gray-300 mt-2">Professional dog training and protection services since 2004</p>
    </div>
</section>

<!-- Company Story -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="section-title">Our Story</h2>
                <p class="text-gray-600 mb-4">
                    Founded in 2004, Army Dog Center has been at the forefront of professional dog training in Pakistan. What started as a small military training facility has grown into one of the region's most respected centers for canine excellence.
                </p>
                <p class="text-gray-600 mb-4">
                    With over 20 years of experience, we have trained hundreds of dogs for military, law enforcement, and civilian security purposes. Our commitment to excellence and animal welfare sets us apart.
                </p>
                <p class="text-gray-600">
                    We believe that every dog has the potential to excel when trained with patience, expertise, and respect.
                </p>
            </div>
            <div class="bg-gradient-to-br from-primary to-amber-700 rounded-lg p-12 text-white text-center">
                <div class="text-6xl mb-4">🏆</div>
                <h3 class="text-3xl font-bold">20+ Years</h3>
                <p class="mt-2">Of Excellence in Training</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-primary mb-4">Mission</h3>
                <p class="text-gray-600">
                    To provide world-class dog training services that enhance security, safety, and quality of life for our clients while maintaining the highest standards of animal care and welfare.
                </p>
            </div>

            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-primary mb-4">Vision</h3>
                <p class="text-gray-600">
                    To be recognized as the leading dog training center in South Asia, setting international standards for canine excellence and innovation.
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
<section class="py-16">
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
