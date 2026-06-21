@extends('layout')

@section('title', 'Our Team - Army Dog Center')
@section('description', 'Meet the expert trainers and handlers at Army Dog Center.')

@section('content')
<!-- Hero -->
<section class="bg-dark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold">Our Expert Team</h1>
        <p class="text-gray-300 mt-2">Certified trainers with military and professional experience</p>
    </div>
</section>

<!-- Team Members -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="section-title text-center mb-12">Leadership & Trainers</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <div class="bg-gradient-to-b from-primary to-amber-700 h-48 flex items-center justify-center text-6xl">🧑‍💼</div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold">Col. Ahmad Khan</h3>
                    <p class="text-primary font-semibold mb-3">Founder & Chief Trainer</p>
                    <p class="text-gray-600 text-sm mb-4">
                        20+ years of military experience. Specialized in detection and protection dog training.
                    </p>
                    <p class="text-xs text-gray-500">📜 Certified Handler</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <div class="bg-gradient-to-b from-primary to-amber-700 h-48 flex items-center justify-center text-6xl">🧑‍🏫</div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold">Maj. Hassan Ahmed</h3>
                    <p class="text-primary font-semibold mb-3">Senior Trainer</p>
                    <p class="text-gray-600 text-sm mb-4">
                        15+ years of K-9 unit experience. Expert in behavioral training and handler conditioning.
                    </p>
                    <p class="text-xs text-gray-500">📜 Military K-9 Certification</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <div class="bg-gradient-to-b from-primary to-amber-700 h-48 flex items-center justify-center text-6xl">👨‍⚕️</div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold">Dr. Fatima Malik</h3>
                    <p class="text-primary font-semibold mb-3">Veterinary Consultant</p>
                    <p class="text-gray-600 text-sm mb-4">
                        DVM with 10 years of canine health expertise. Ensures optimal health for all training dogs.
                    </p>
                    <p class="text-xs text-gray-500">📜 Veterinary Doctor</p>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <div class="bg-gradient-to-b from-primary to-amber-700 h-48 flex items-center justify-center text-6xl">🐕‍🦺</div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold">Sgt. Imran Shahid</h3>
                    <p class="text-primary font-semibold mb-3">Detection Handler</p>
                    <p class="text-gray-600 text-sm mb-4">
                        12+ years with detection dogs. Specialized in explosive and narcotics detection training.
                    </p>
                    <p class="text-xs text-gray-500">📜 Certified Handler</p>
                </div>
            </div>

            <!-- Team Member 5 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <div class="bg-gradient-to-b from-primary to-amber-700 h-48 flex items-center justify-center text-6xl">🛡️</div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold">Sgt. Ali Raza</h3>
                    <p class="text-primary font-semibold mb-3">Protection Specialist</p>
                    <p class="text-gray-600 text-sm mb-4">
                        10+ years in protection dog training and handler development. Expert in threat assessment.
                    </p>
                    <p class="text-xs text-gray-500">📜 Certified Trainer</p>
                </div>
            </div>

            <!-- Team Member 6 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <div class="bg-gradient-to-b from-primary to-amber-700 h-48 flex items-center justify-center text-6xl">🚨</div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold">Cpl. Sara Khan</h3>
                    <p class="text-primary font-semibold mb-3">Rescue Coordinator</p>
                    <p class="text-gray-600 text-sm mb-4">
                        8+ years in Search & Rescue operations. Coordinates emergency response teams.
                    </p>
                    <p class="text-xs text-gray-500">📜 SAR Certified</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="section-title text-center mb-12">Our Certifications</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-3">✓ International Certifications</h3>
                <ul class="text-gray-600 space-y-2 text-sm">
                    <li>• IACP K-9 Certification</li>
                    <li>• IPPNW Handler Certification</li>
                    <li>• International Search & Rescue Certification</li>
                </ul>
            </div>

            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-3">✓ Local & Regional</h3>
                <ul class="text-gray-600 space-y-2 text-sm">
                    <li>• Registered with Pakistan Army</li>
                    <li>• Police Department Approved</li>
                    <li>• Ministry of Defence Certified</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
