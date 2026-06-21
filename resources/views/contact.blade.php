@extends('layout')

@section('title', 'Contact Us - Army Dog Center')
@section('description', 'Get in touch with Army Dog Center. Available 24/7 for emergency inquiries.')

@section('content')
<!-- Hero -->
<section class="bg-dark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold">Contact Us</h1>
        <p class="text-gray-300 mt-2">We're available 24/7 for emergency inquiries and consultations</p>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-gray-50 p-8 rounded-lg">
                <h2 class="text-2xl font-bold mb-6">Send us a Message</h2>
                
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Full Name *</label>
                        <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                        @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                        <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                        @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Phone</label>
                        <input type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('phone') border-red-500 @enderror" value="{{ old('phone') }}">
                        @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Service Interest *</label>
                        <select name="service" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('service') border-red-500 @enderror" required>
                            <option value="">Select a service</option>
                            <option value="detection" {{ old('service') == 'detection' ? 'selected' : '' }}>Detection Dogs</option>
                            <option value="protection" {{ old('service') == 'protection' ? 'selected' : '' }}>Protection Dogs</option>
                            <option value="rescue" {{ old('service') == 'rescue' ? 'selected' : '' }}>Search & Rescue</option>
                            <option value="consultation" {{ old('service') == 'consultation' ? 'selected' : '' }}>Consultation</option>
                        </select>
                        @error('service') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Message *</label>
                        <textarea name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('message') border-red-500 @enderror" required>{{ old('message') }}</textarea>
                        @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                </div>

                <div class="bg-white border-l-4 border-primary p-6 rounded">
                    <h4 class="font-bold text-lg mb-2">📞 Phone Numbers</h4>
                    <p class="text-gray-600 mb-1">Emergency Hotline: <span class="font-bold text-primary">0300-5454631</span></p>
                    <p class="text-gray-600">General Inquiries: <span class="font-bold text-primary">0345-7961818</span></p>
                </div>

                <div class="bg-white border-l-4 border-primary p-6 rounded">
                    <h4 class="font-bold text-lg mb-2">✉️ Email</h4>
                    <p class="text-gray-600"><a href="mailto:info@armydogcenter.pk" class="text-primary hover:underline">info@armydogcenter.pk</a></p>
                </div>

                <div class="bg-white border-l-4 border-primary p-6 rounded">
                    <h4 class="font-bold text-lg mb-2">🕐 Hours of Operation</h4>
                    <p class="text-gray-600 mb-1">24/7 Emergency Service Available</p>
                    <p class="text-gray-600">Regular Hours: 8:00 AM - 6:00 PM (Mon-Fri)</p>
                </div>

                <div class="bg-white border-l-4 border-primary p-6 rounded">
                    <h4 class="font-bold text-lg mb-2">📍 Location</h4>
                    <p class="text-gray-600">Army Dog Center<br>Islamabad, Pakistan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="section-title text-center mb-12">Frequently Asked Questions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg">
                <h4 class="font-bold mb-2">How long does training take?</h4>
                <p class="text-gray-600 text-sm">Training duration varies from 30-90 days depending on the service and dog's progress.</p>
            </div>

            <div class="bg-white p-6 rounded-lg">
                <h4 class="font-bold mb-2">What is the cost?</h4>
                <p class="text-gray-600 text-sm">Pricing starts from PKR 150K for basic training. Contact us for a custom quote.</p>
            </div>

            <div class="bg-white p-6 rounded-lg">
                <h4 class="font-bold mb-2">Do you provide handler training?</h4>
                <p class="text-gray-600 text-sm">Yes, all our packages include handler training and certification.</p>
            </div>

            <div class="bg-white p-6 rounded-lg">
                <h4 class="font-bold mb-2">Are your dogs certified?</h4>
                <p class="text-gray-600 text-sm">Yes, all trained dogs receive international certification upon completion.</p>
            </div>
        </div>
    </div>
</section>
@endsection
