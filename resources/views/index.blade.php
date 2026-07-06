@extends('layout')

@section('title', 'Army Dog Center Pakistan | 03457125252, 03336937508')
@section('description', 'Army Dog Center trains and supplies dogs across Pakistan for home security, tracking, and rescue work, backed by a team on call every day of the year. Call now 03005794720.')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-dark to-gray-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col-reverse md:flex-row gap-12 items-center">

            <div class="w-full md:w-1/2">
                <h1 class="text-5xl font-bold mb-6">Professional Dog Training & Protection</h1>
                <p class="text-xl text-gray-300 mb-8" lang="ur" dir="rtl">
                    چوری، ڈکیتی، قتل اور اغوا جیسے مقدمات کے سراغ کے لیے آرمی ڈاگ سینٹر تربیت یافتہ کھوجی
                    کتے فراہم کرتا ہے۔ ہماری ٹیم پورے پاکستان میں چوبیس گھنٹے آپ کی خدمت کے لیے حاضر ہے۔
                </p>
                <div class="flex gap-4">
                    <a href="{{ route('contact') }}" class="btn-primary">Call us - 03000000000</a>
                </div>
            </div>

            <div class="w-full md:w-1/2 text-center">
                <img src="https://dummyimage.com/600x360" alt="" class="w-full h-auto">
            </div>

        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-6 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <img src="https://dummyimage.com/600x360" alt="Elite Tactical Dog"
                    class="w-full max-w-md rounded-lg shadow-lg">
            </div>
            <div>
                <h2 class="text-center md:text-left text-4xl font-bold mb-4 mt-2">
                    About <span class="text-primary">Us</span>
                </h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Our dogs go through hard, focused training so they can handle tough security and
                    rescue jobs. We pick each dog with care and train it to reach a high, trusted standard.
                </p>
                <p class="text-gray-700 mb-8 leading-relaxed">
                    Every dog works with its own trained handler, so it fits in easily with your security
                    team and gets the job done in real situations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-6 md:py-20 bg-white">
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
<section class="py-6 md:py-20 bg-primary text-white">
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