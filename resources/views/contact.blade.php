@extends('layouts.app')

@section('title', 'Contact Us | Army Dog Center 03457125252, 03336937508')
@section('description', 'Get in touch with Army Dog Center for trained dogs, security, and rescue help across Pakistan. Call 03457125252, 03336937508, or 03005794720.')

@section('content')


    <section class="bg-white text-gray-900 antialiased">

        <!-- Hero with overlapping form -->
        <div class="relative">
            <div class="relative h-[28rem] w-full overflow-hidden">
                <img src="{{ asset('images/site_images/contact-hero-k9-airport-field-tracking.jpeg') }}"
                    alt="Army Dog Center trained dogs performing airport luggage detection and open-field tracking"
                    width="2000" height="448" class="absolute inset-0 h-full w-full object-cover" loading="eager" />
                <div class="absolute inset-0 bg-gray-900/70"></div>

                <div class="relative z-10 mx-auto max-w-3xl px-6 pt-20 text-center">
                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">Contact Us</h1>
                    <p class="mx-auto mt-4 max-w-xl text-base text-gray-300 sm:text-lg">
                        Reach out to Army Dog Center for trained dogs, security help, or rescue support
                        anywhere in Pakistan. Our team is ready to answer your questions.
                    </p>
                </div>
            </div>

            <div class="relative z-20 mx-auto -mt-44 max-w-3xl px-4 sm:px-6">
                <div class="rounded-lg bg-white p-6 shadow-xl sm:p-10">

                    @if (session('success'))
                        <div class="mb-6 rounded-lg bg-green-50 p-4 text-sm text-green-800">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 rounded-lg bg-red-50 p-4 text-sm text-red-800">
                            <ul class="list-disc space-y-1 pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="name" class="mb-2 block text-sm font-medium text-gray-900">Full
                                    Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder-gray-500 focus:border-primary focus:ring-primary focus:outline-none"
                                    placeholder="Bonnie Green" required />
                            </div>
                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium text-gray-900">Your email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder-gray-500 focus:border-primary focus:ring-primary focus:outline-none"
                                    placeholder="name@example.com" required />
                            </div>
                            <div>
                                <label for="phone" class="mb-2 block text-sm font-medium text-gray-900">Phone Number</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder-gray-500 focus:border-primary focus:ring-primary focus:outline-none"
                                    placeholder="+12 345 6789" />
                            </div>
                            <div>
                                <label for="service" class="mb-2 block text-sm font-medium text-gray-900">Service</label>
                                <select id="service" name="service" required
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-primary focus:outline-none">
                                    <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service
                                    </option>
                                    <option value="detection" {{ old('service') == 'detection' ? 'selected' : '' }}>Detection
                                    </option>
                                    <option value="protection" {{ old('service') == 'protection' ? 'selected' : '' }}>
                                        Protection</option>
                                    <option value="rescue" {{ old('service') == 'rescue' ? 'selected' : '' }}>Rescue</option>
                                    <option value="consultation" {{ old('service') == 'consultation' ? 'selected' : '' }}>
                                        Consultation</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="mb-2 block text-sm font-medium text-gray-900">Your message</label>
                            <textarea id="message" name="message" rows="5" required minlength="10" maxlength="1000"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder-gray-500 focus:border-primary focus:ring-primary focus:outline-none"
                                placeholder="Leave a comment...">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit"
                            class="rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white shadow-sm transition hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                            Send message
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Info Cards -->
        <section class="bg-white py-20">
            <div class="mx-auto max-w-6xl px-6">
                <div class="grid grid-cols-1 gap-12 text-center md:grid-cols-3">

                    <div class="flex flex-col items-center">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 text-gray-700">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-900">Email us:</h3>
                        <p class="mx-auto mb-3 max-w-xs text-sm text-gray-600">
                            Email us with any question about our dogs, training, or services.
                        </p>
                        <a href="mailto:contact@armydogpk.com" class="text-sm font-medium text-primary-700 hover:underline">
                            contact@armydogpk.com
                        </a>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 text-gray-700">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h2.28a2 2 0 011.94 1.515l.7 2.808a2 2 0 01-.45 1.9l-1.27 1.27a16 16 0 006.586 6.586l1.27-1.27a2 2 0 011.9-.45l2.808.7A2 2 0 0121 17.72V20a2 2 0 01-2 2h-1C9.716 22 2 14.284 2 5V4a1 1 0 011-1z" />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-900">Call us:</h3>
                        <p class="mx-auto mb-3 max-w-xs text-sm text-gray-600">
                            Give us a call any time, day or night, and our team will be glad to help.
                        </p>
                        <div class="flex flex-col gap-1">
                            <a href="tel:+923457125252" class="text-sm font-medium text-primary-700 hover:underline">
                                03457125252
                            </a>
                            <a href="tel:+923336937508" class="text-sm font-medium text-primary-700 hover:underline">
                                03336937508
                            </a>
                            <a href="tel:+923005794720" class="text-sm font-medium text-primary-700 hover:underline">
                                03005794720
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 text-gray-700">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-900">Location</h3>
                        <p class="mx-auto mb-3 max-w-xs text-sm text-gray-600">
                            We serve clients across Pakistan, with trained teams ready in every province and
                            major city.
                        </p>
                        <a href="{{ route('services') }}"
                            class="inline-block rounded-lg border border-primary-700 px-4 py-2 text-sm font-medium text-primary-700 transition hover:bg-primary-50">
                            View Our Services
                        </a>
                    </div>

                </div>
            </div>
            </div>

        </section>



@endsection