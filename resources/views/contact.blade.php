@extends('layout')

@section('title', 'Contact Us - Army Dog Center')
@section('description', 'Get in touch with Army Dog Center. Available 24/7 for emergency inquiries.')

@section('content')


<section class="bg-white text-gray-900 antialiased">

    <!-- Hero with overlapping form -->
    <div class="relative">
        <div class="relative h-[28rem] w-full overflow-hidden">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=2000&q=80"
                alt="Person typing on laptop" class="absolute inset-0 h-full w-full object-cover" />
            <div class="absolute inset-0 bg-gray-900/70"></div>

            <div class="relative z-10 mx-auto max-w-3xl px-6 pt-20 text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">Contact Us</h1>
                <p class="mx-auto mt-4 max-w-xl text-base text-gray-300 sm:text-lg">
                    We use an agile approach to test assumptions and connect with the needs of your audience early and
                    often.
                </p>
            </div>
        </div>

        <div class="relative z-20 mx-auto -mt-44 max-w-3xl px-4 sm:px-6">
            <div class="rounded-lg bg-white p-6 shadow-xl sm:p-10">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="first-name" class="mb-2 block text-sm font-medium text-gray-900">First
                                Name</label>
                            <input type="text" id="first-name"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder-gray-500 focus:border-blue-500 focus:ring-blue-500 focus:outline-none"
                                placeholder="Bonnie" />
                        </div>
                        <div>
                            <label for="last-name" class="mb-2 block text-sm font-medium text-gray-900">Last
                                Name</label>
                            <input type="text" id="last-name"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder-gray-500 focus:border-blue-500 focus:ring-blue-500 focus:outline-none"
                                placeholder="Green" />
                        </div>
                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-gray-900">Your email</label>
                            <input type="email" id="email"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder-gray-500 focus:border-blue-500 focus:ring-blue-500 focus:outline-none"
                                placeholder="name@flowbite.com" />
                        </div>
                        <div>
                            <label for="phone" class="mb-2 block text-sm font-medium text-gray-900">Phone Number</label>
                            <input type="tel" id="phone"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder-gray-500 focus:border-blue-500 focus:ring-blue-500 focus:outline-none"
                                placeholder="+12 345 6789" />
                        </div>
                    </div>

                    <div>
                        <label for="message" class="mb-2 block text-sm font-medium text-gray-900">Your message</label>
                        <textarea id="message" rows="5"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder-gray-500 focus:border-blue-500 focus:ring-blue-500 focus:outline-none"
                            placeholder="Leave a comment..."></textarea>
                    </div>

                    <div class="flex items-start gap-2">
                        <input type="checkbox" id="terms"
                            class="mt-0.5 h-4 w-4 rounded border-gray-300 bg-gray-50 text-blue-600 focus:ring-blue-500" />
                        <label for="terms" class="text-sm text-gray-600">
                            I confirm that I have read and agree to our
                            <a href="#" class="font-medium text-gray-900 underline hover:text-blue-700">Terms of
                                Service</a> and
                            <a href="#" class="font-medium text-gray-900 underline hover:text-blue-700">Privacy
                                Statement</a>.
                        </label>
                    </div>

                    <button type="submit"
                        class="rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white shadow-sm transition hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
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
                        Email us for general queries, including marketing and partnership opportunities.
                    </p>
                    <a href="mailto:hello@flowbite.com" class="text-sm font-medium text-blue-700 hover:underline">
                        hello@flowbite.com
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
                        Call us to speak to a member of our team. We are always happy to help.
                    </p>
                    <a href="tel:+16467865060" class="text-sm font-medium text-blue-700 hover:underline">
                        +1 (646) 786-5060
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 text-gray-700">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" />
                            <circle cx="12" cy="12" r="3" />
                            <path d="M5.6 5.6l3.2 3.2M15.2 15.2l3.2 3.2M18.4 5.6l-3.2 3.2M8.8 15.2l-3.2 3.2" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-lg font-semibold text-gray-900">Support</h3>
                    <p class="mx-auto mb-3 max-w-xs text-sm text-gray-600">
                        Email us for general queries, including marketing and partnership opportunities.
                    </p>
                    <a href="#"
                        class="inline-block rounded-lg border border-blue-700 px-4 py-2 text-sm font-medium text-blue-700 transition hover:bg-blue-50">
                        Support center
                    </a>
                </div>

            </div>
        </div>
        </div>

    </section>



    @endsection