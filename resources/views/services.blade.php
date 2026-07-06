@extends('layout')

@section('title', 'Our Services | Army Dog Center Pakistan')
@section('description', 'Army Dog Center provides trained dogs and skilled handlers across Pakistan for detection, protection, tracking, and search & rescue work. Call 03005794720.')

@section('content')
<!-- Hero -->
<section class="relative w-full bg-white overflow-hidden">

    <div class="relative w-full" style="min-height: 200px;">
        <!-- Curved background using SVG -->
        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1600 600" preserveAspectRatio="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill="#f57224"
                d="M0,0 L1600,0 L1600,470 C1400,540 1250,560 1100,540 C950,520 850,470 720,490 C560,515 420,580 280,560 C170,545 80,500 0,440 Z" />
        </svg>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center"
            style="min-height: 600px;">
            <!-- Right -->
            <div class="pt-16 lg:pt-1 text-center lg:text-left text-white lg:pl-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-5">
                    OUR SERVICES
                </h1>

                <p class="text-base md:text-lg leading-relaxed text-white/95 max-w-xl mx-auto lg:mx-0">
                    Army Dog Center offers trained dogs and skilled handlers for security, tracking, and
                    rescue work across Pakistan, ready to help wherever you need us.
                </p>
            </div>
            <!-- Left -->
            <div class="flex justify-center lg:justify-start">
                <img src="https://dummyimage.com/600x360"
                    onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1558981806-ec527fa84c39?w=800&q=80';"
                    alt="Army Dog Center trained security dog" class="w-full max-w-[560px] h-auto object-contain drop-shadow-2xl" />
            </div>

        </div>
    </div>
</section>



<!-- Areas we serve -->
<x-where-we-serve />

<!-- Areas we serve -->
@include('components.why-we-are-different')


@endsection