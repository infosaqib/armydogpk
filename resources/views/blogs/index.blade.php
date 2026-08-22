@extends('layouts.app')

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
    <section class="py-16 md:py-24">
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
                                class="text-[#f85606] font-medium mb-3 block">{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'N/A' }}</span>
                            <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">{{$blog->title}}</h4>
                            <div class="prose prose-lg max-w-none">
                                {!! Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') !!}
                            </div>
                            <a href="{{ '/blogs/' . $blog->slug }}"
                                class="cursor-pointer text-lg text-[#f85606] hover:text-[#d44805] font-semibold inline-block mt-4 transition-colors">
                                Read more &rarr;
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Custom Responsive & Wide Pagination Navigation -->
            @if ($blogs->hasPages())
                <nav aria-label="Blog Pagination" class="mt-16 w-full max-w-4xl mx-auto px-2">
                    <div
                        class="flex flex-col sm:flex-row items-center justify-between gap-4 bg-white p-4 sm:px-6 rounded-2xl shadow-md border border-gray-200">

                        <!-- Page Info / Item Count -->
                        <div class="text-sm text-gray-600 font-medium text-center sm:text-left">
                            Showing <span class="font-semibold text-gray-900">{{ $blogs->firstItem() }}</span> to <span
                                class="font-semibold text-gray-900">{{ $blogs->lastItem() }}</span> of <span
                                class="font-semibold text-gray-900">{{ $blogs->total() }}</span> posts
                        </div>

                        <!-- Navigation Controls -->
                        <div class="flex items-center justify-center gap-2 w-full sm:w-auto">
                            {{-- Previous Page Link --}}
                            @if ($blogs->onFirstPage())
                                <span
                                    class="px-4 py-2 text-sm font-semibold text-gray-400 bg-gray-100 rounded-xl cursor-not-allowed border border-gray-200">
                                    &larr; Previous
                                </span>
                            @else
                                <a href="{{ $blogs->previousPageUrl() }}"
                                    class="px-4 py-2 text-sm font-semibold text-gray-700 bg-white hover:bg-[#f85606] hover:text-white rounded-xl border border-gray-300 transition-all duration-200 shadow-sm">
                                    &larr; Previous
                                </a>
                            @endif

                            {{-- Numerical Page Links (Visible on desktop/tablets) --}}
                            <div class="hidden md:flex items-center gap-1">
                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    @if ($page == $blogs->currentPage())
                                        <span
                                            class="w-10 h-10 flex items-center justify-center text-sm font-bold text-white bg-[#f85606] rounded-xl shadow-sm">
                                            {{ $page }}
                                        </span>
                                    @else
                                        <a href="{{ $url }}"
                                            class="w-10 h-10 flex items-center justify-center text-sm font-semibold text-gray-700 bg-white hover:bg-orange-50 hover:text-[#f85606] rounded-xl border border-gray-200 transition-colors">
                                            {{ $page }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>

                            {{-- Next Page Link --}}
                            @if ($blogs->hasMorePages())
                                <a href="{{ $blogs->nextPageUrl() }}"
                                    class="px-4 py-2 text-sm font-semibold text-white bg-[#f85606] hover:bg-[#d44805] rounded-xl border border-transparent transition-all duration-200 shadow-sm">
                                    Next &rarr;
                                </a>
                            @else
                                <span
                                    class="px-4 py-2 text-sm font-semibold text-gray-400 bg-gray-100 rounded-xl cursor-not-allowed border border-gray-200">
                                    Next &rarr;
                                </span>
                            @endif
                        </div>

                    </div>
                </nav>
            @endif

        </div>
    </section>
@endsection