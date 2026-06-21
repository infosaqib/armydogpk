@extends('layout')

@section('title', 'Services - Army Dog Center')
@section('description', 'Detection, Protection, and Search & Rescue dog training services.')

@section('content')
<!-- Hero -->
<section class="bg-dark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold">Our Services</h1>
        <p class="text-gray-300 mt-2">Comprehensive dog training for security, protection, and rescue operations</p>
    </div>
</section>

<!-- Services Detail -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <!-- Detection Dogs -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="section-title">Detection Dogs</h2>
                <p class="text-gray-600 mb-4">Our detection dogs are trained to identify and alert on narcotics, explosives, and other hazardous materials. Ideal for:</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>✓ Airports and border security</li>
                    <li>✓ Military operations</li>
                    <li>✓ Law enforcement agencies</li>
                    <li>✓ Industrial safety</li>
                </ul>
                <a href="/contact" class="btn-primary">Get Pricing</a>
            </div>
            <div class="bg-gray-50 p-8 rounded-lg text-center text-5xl">🔍</div>
        </div>

        <!-- Protection Dogs -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="bg-gray-50 p-8 rounded-lg text-center text-5xl">🛡️</div>
            <div>
                <h2 class="section-title">Protection Dogs</h2>
                <p class="text-gray-600 mb-4">Elite protection dogs trained for personal and property security. Our dogs are:</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>✓ Highly obedient and socialized</li>
                    <li>✓ Trained in threat assessment</li>
                    <li>✓ Suitable for private security</li>
                    <li>✓ Military-grade training</li>
                </ul>
                <a href="/contact" class="btn-primary">Inquire Now</a>
            </div>
        </div>

        <!-- Search & Rescue -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="section-title">Search & Rescue</h2>
                <p class="text-gray-600 mb-4">Specialized dogs trained for disaster response and missing person location. Available for:</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>✓ Natural disaster response</li>
                    <li>✓ Missing person search</li>
                    <li>✓ Emergency operations</li>
                    <li>✓ Wilderness rescue</li>
                </ul>
                <a href="/contact" class="btn-primary">Contact for Services</a>
            </div>
            <div class="bg-gray-50 p-8 rounded-lg text-center text-5xl">🚨</div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="section-title text-center mb-12">Service Packages</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white border-2 border-gray-200 p-8 rounded-lg hover:border-primary transition">
                <h3 class="text-2xl font-bold mb-4">Basic Training</h3>
                <p class="text-3xl font-bold text-primary mb-6">PKR 150K</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>✓ 30 days training</li>
                    <li>✓ Basic obedience</li>
                    <li>✓ Handler guidance</li>
                </ul>
                <a href="/contact" class="btn-primary w-full text-center block">Start Now</a>
            </div>

            <div class="bg-white border-2 border-primary p-8 rounded-lg shadow-lg">
                <div class="bg-primary text-white px-3 py-1 inline-block rounded mb-4 text-sm font-bold">POPULAR</div>
                <h3 class="text-2xl font-bold mb-4">Professional</h3>
                <p class="text-3xl font-bold text-primary mb-6">PKR 300K</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>✓ 60 days training</li>
                    <li>✓ Advanced techniques</li>
                    <li>✓ Handler certification</li>
                </ul>
                <a href="/contact" class="bg-primary hover:bg-amber-700 text-white px-6 py-2 rounded-lg w-full text-center block">Choose Plan</a>
            </div>

            <div class="bg-white border-2 border-gray-200 p-8 rounded-lg hover:border-primary transition">
                <h3 class="text-2xl font-bold mb-4">Elite Program</h3>
                <p class="text-3xl font-bold text-primary mb-6">PKR 500K+</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>✓ 90+ days training</li>
                    <li>✓ Specialized skills</li>
                    <li>✓ Lifetime support</li>
                </ul>
                <a href="/contact" class="btn-primary w-full text-center block">Get Quote</a>
            </div>
        </div>
    </div>
</section>
@endsection
