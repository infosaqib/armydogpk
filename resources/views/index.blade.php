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
                <p class="text-xl text-gray-300 mb-8">Expert military and civilian dog training services in Pakistan.
                    Available 24/7 for emergency response.</p>
                <div class="flex gap-4">
                    <a href="/contact" class="btn-primary">Call us - 03000000000</a>
                </div>
            </div>
            <div class="text-center">
                <img src="https://dummyimage.com/600x360" alt="">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <img src="https://dummyimage.com/600x360" alt="Elite Tactical Dog"
                    class="w-full max-w-md rounded-lg shadow-lg">
            </div>
            <div>
                <h2 class="text-4xl text-primary font-bold mb-4 mt-2">
                    About Us
                </h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Our elite tactical dogs undergo rigorous training programs designed specifically for high-pressure
                    security and emergency response situations. Each canine is carefully selected, bred, and trained to
                    meet the strictest international standards.
                </p>
                <p class="text-gray-700 mb-8 leading-relaxed">
                    With specialized handlers accompanying each dog, we ensure seamless integration with existing
                    security protocols and guaranteed success in real-world operations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-4">
            Our <span class="text-primary">Services</span>
        </h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Comprehensive canine security and emergency response solutions
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="bg-gradient-to-br from-primary to-amber-700 h-48 flex items-center justify-center">
                    <span class="text-6xl">🔍</span>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">Detection Dogs</h3>
                    <p class="text-gray-600 mb-4">Specialized training for explosive, narcotics, and hazard detection
                        for security checkpoints and operations.</p>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="bg-gradient-to-br from-primary to-amber-700 h-48 flex items-center justify-center">
                    <span class="text-6xl">🛡️</span>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">Protection Dogs</h3>
                    <p class="text-gray-600 mb-4">Elite canines trained for personal protection, VIP security, and
                        facility defense with precision control.</p>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="bg-gradient-to-br from-primary to-amber-700 h-48 flex items-center justify-center">
                    <span class="text-6xl">🚨</span>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">Search & Rescue</h3>
                    <p class="text-gray-600 mb-4">Specialized dogs for disaster response, missing persons search, and
                        emergency rescue operations nationwide.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
@include('components.gallery')

<!-- Cities we serve -->
<x-where-we-serve />

<!-- Stats Section -->
<section class="py-20 bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold mb-2" data-counter="500">0+</div>
                <p class="text-lg opacity-90">Dogs Trained</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-2" data-counter="1000">0+</div>
                <p class="text-lg opacity-90">Operations Completed</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-2" data-counter="25">0+</div>
                <p class="text-lg opacity-90">Years Experience</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-2">24/7</div>
                <p class="text-lg opacity-90">Emergency Response</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Our Dogs Section -->
@include('components.why-choose-us')
@endsection