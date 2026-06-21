@extends('layout')

@section('title', 'Home - Army Dog Center')
@section('description', 'Professional dog training, protection, and search & rescue services.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-dark to-gray-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl font-bold mb-6">Professional Dog Training & Protection</h1>
                <p class="text-xl text-gray-300 mb-8">Expert military and civilian dog training services in Pakistan. Available 24/7 for emergency response.</p>
                <div class="flex gap-4">
                    <a href="/contact" class="btn-primary">Get in Touch</a>
                    <a href="/services" class="btn-secondary">View Services</a>
                </div>
            </div>
            <div class="text-center">
                <div class="text-6xl">🐕‍🦺</div>
                <p class="text-gray-400 mt-4">Certified & Experienced</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-primary" data-counter="500">0+</div>
                <p class="text-gray-600 mt-2">Dogs Trained</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-primary" data-counter="1000">0+</div>
                <p class="text-gray-600 mt-2">Clients Served</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-primary" data-counter="20">0+</div>
                <p class="text-gray-600 mt-2">Years Experience</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-primary">24/7</div>
                <p class="text-gray-600 mt-2">Emergency Available</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="section-title text-center mb-12">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition">
                <div class="text-4xl mb-4">🔍</div>
                <h3 class="text-2xl font-bold mb-3">Detection Dogs</h3>
                <p class="text-gray-600 mb-4">Trained to detect explosives, drugs, and other hazardous materials for security operations.</p>
                <a href="/services" class="text-primary font-semibold hover:underline">Learn More →</a>
            </div>
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition">
                <div class="text-4xl mb-4">🛡️</div>
                <h3 class="text-2xl font-bold mb-3">Protection Dogs</h3>
                <p class="text-gray-600 mb-4">Elite protection dogs trained for personal security, property protection, and military use.</p>
                <a href="/services" class="text-primary font-semibold hover:underline">Learn More →</a>
            </div>
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition">
                <div class="text-4xl mb-4">🚨</div>
                <h3 class="text-2xl font-bold mb-3">Search & Rescue</h3>
                <p class="text-gray-600 mb-4">Specialized dogs trained for disaster response, missing person search, and emergency operations.</p>
                <a href="/services" class="text-primary font-semibold hover:underline">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-primary text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-4">Ready to Get Started?</h2>
        <p class="text-xl mb-8 opacity-90">Contact us today for a consultation about our services.</p>
        <a href="/contact" class="bg-dark hover:bg-gray-900 text-white px-8 py-3 rounded-lg font-semibold transition">Contact Us Now</a>
    </div>
</section>
@endsection
