@extends('layout')

@section('title', 'Our Services | Army Dog Center 03457125252, 03336937508')
@section('description', 'Army Dog Center provides trained dogs and skilled handlers across Pakistan for detection, protection, tracking, and search & rescue work. Call 03005794720.')

@section('content')
    <section class="relative w-full overflow-hidden">
        <div class="relative min-h-[400px]">
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1600 600" preserveAspectRatio="none">
                <path fill="#f85606"
                    d="M0,0 L1600,0 L1600,470 C1400,540 1250,560 1100,540 C950,520 850,470 720,490 C560,515 420,580 280,560 C170,545 80,500 0,440 Z" />
            </svg>

            <div class="relative z-10 max-w-4xl mx-auto px-6 text-center pt-8 lg:pt-20 pb-16">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                    Army Dog Center {{ $servicePage->city }}
                </h1>

                <p class="mt-6 text-lg text-white/90 max-w-2xl mx-auto leading-relaxed">
                    Trusted dog services and security help for
                    {{ $servicePage->city }}, {{ ucfirst($servicePage->province) }}
                </p>
                <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                    <a href="tel:+923005794720" class="btn-primary bg-white hover:bg-slate-50  text-gray-900">Call us - 03005794720</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="mx-auto max-w-6xl px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">
                    Our Services in <span class="text-primary">{{ $servicePage->city }}</span>
                </h2>
                <p class="mt-4 text-gray-600 leading-relaxed">
                    Army Dog Center offers top dog services all over
                    {{ $servicePage->city }}, {{ ucfirst($servicePage->province) }}.
                    Our skilled team and well-trained dogs are ready 24/7 to
                    help with emergencies and keep you safe.
                </p>

                <ul class="mt-8 space-y-4">
                    @foreach ([
    "Finding Evidence & Investigation Help in {$servicePage->city}",
    "Guard Dogs for Safety & Protection in {$servicePage->city}",
    "Search & Tracking Services in {$servicePage->city}",
    "24/7 Emergency Help Team in {$servicePage->city}",
] as $service)
                        <li class="flex items-start gap-3 text-gray-800">
                            <span class="mt-1 text-primary flex-shrink-0">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="font-medium">{{ $service }}</span>
                        </li>
                    @endforeach
                </ul>

            </div>

            <div class="flex justify-center lg:justify-end">
                <img src="{{ asset('storage/' . $servicePage->image->path) }}"
                    alt="Army Dog Center {{ $servicePage->city }}"
                    class="rounded-xl shadow-xl max-w-full h-auto object-cover max-h-[350px]">
            </div>
        </div>


        <div class="max-w-md mx-auto mt-16 bg-gray-50 border border-gray-100 rounded-2xl p-6 text-center shadow-sm">
            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 text-primary">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </div>
            <h4 class="mt-4 text-lg font-bold text-gray-900">Get in Touch</h4>
            <div class="mt-2 text-gray-700 space-y-1 font-semibold text-base tracking-wide">
                <p>{{ $servicePage->phone_1 }}</p>
                @if($servicePage->phone_2)
                    <p>{{ $servicePage->phone_2 }}</p>
                @endif
            </div>
        </div>
    </section>

    <section class="bg-slate-50 py-20">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="text-center text-2xl sm:text-3xl font-bold text-gray-900">
                Why Choose Army Dog Center in
                <span class="text-primary">{{ $servicePage->city }}</span>
            </h2>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ([
    [
        'title' => 'Local Expertise',
        'desc' => "Our team knows {$servicePage->city} and the nearby areas well, so we can respond fast
                                    and get the job done right."
    ],
    [
        'title' => 'Fast Response Time',
        'desc' => "We keep our teams close by in {$servicePage->city}, so we can reach you quickly during
                                    emergencies or urgent security needs."
    ],
    [
        'title' => 'Community Trust',
        'desc' => "We have good working relationships with local authorities and businesses in
                                    {$servicePage->city}, which helps us work together smoothly."
    ],
] as $item)
                    <div class="rounded-lg bg-white p-7 shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-900">{{ $item['title'] }}</h3>
                        <p class="mt-4 text-gray-600 leading-relaxed text-sm">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection