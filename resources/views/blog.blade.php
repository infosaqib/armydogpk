@extends('layout')

@section('title', 'Blog | Army Dog Center 03457125252, 03336937508')
@section('description', 'Read news, tips, and updates from Army Dog Center on dog training, security, and rescue work across Pakistan. Call 03005794720.')

@section('content')
<!-- Hero Section -->
<section class="relative w-full overflow-hidden">

    <!-- Orange Background -->
    <div class="relative min-h-[400px]">
        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1600 600" preserveAspectRatio="none">
            <path fill="#f85606"
                d="M0,0 L1600,0 L1600,470 C1400,540 1250,560 1100,540 C950,520 850,470 720,490 C560,515 420,580 280,560 C170,545 80,500 0,440 Z" />
        </svg>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center pt-8 lg:pt-20 pb-16">

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                Our Blog
            </h1>

            <p class="mt-6 text-lg text-white/90 max-w-2xl mx-auto leading-relaxed">
                Discover training insights, success stories, security updates, and expert guidance
                from Army Dog Center professionals across Pakistan.
            </p>

        </div>
    </div>

</section>

<!-- Blog section -->
<section class="py-24 ">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="font-manrope text-4xl font-bold text-gray-900 text-center mb-16">Our latest blog</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
            @foreach($blogs as $blog)
            <div class="group w-full border border-gray-700 rounded-2xl p-1 md:p-2 bg-gray-100">
                <div class="flex items-center">
                    <img src="{{ $blog->thumbnail }}" alt="{{ $blog->title }}"
                        class="rounded-t-2xl w-full h-60 object-cover">
                </div>
                <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                    <span
                        class="text-indigo-600 font-medium mb-3 block">{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'N/A' }}</span>
                    <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">{{$blog->title}}</h4>
                    <div class="prose prose-lg max-w-none">
                        {!! Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') !!}
                    </div>
                    <a href="{{ '/blogs/' . $blog->slug . '.html'}}"
                        class="cursor-pointer text-lg text-indigo-600 font-semibold">Read
                        more..</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection