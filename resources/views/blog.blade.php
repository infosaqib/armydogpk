@extends('layout')

@section('title', 'Our Team - Army Dog Center')
@section('description', 'Meet the expert trainers and handlers at Army Dog Center.')

@section('content')
<!-- Hero Section -->
<section class="relative w-full overflow-hidden">

    <!-- Orange Background -->
    <div class="relative min-h-[400px]">
        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1600 600" preserveAspectRatio="none">
            <path fill="#f57224"
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
        <div
            class="flex justify-center  gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
            <div class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl">
                <div class="flex items-center">
                    <img src="https://pagedone.io/asset/uploads/1696244317.png" alt="blogs tailwind section"
                        class="rounded-t-2xl w-full object-cover">
                </div>
                <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                    <span class="text-indigo-600 font-medium mb-3 block">Jan 01, 2023</span>
                    <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">Clever ways to invest in product to
                        organize your portfolio</h4>
                    <p class="text-gray-500 leading-6 mb-10">Discover smart investment strategies to streamline and
                        organize your portfolio..</p>
                    <a href="javascript:;" class="cursor-pointer text-lg text-indigo-600 font-semibold">Read more..</a>
                </div>
            </div>
            <div class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl">
                <div class="flex items-center">
                    <img src="https://pagedone.io/asset/uploads/1696244340.png" alt="blogs tailwind section"
                        class="rounded-t-2xl w-full object-cover">
                </div>
                <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                    <span class="text-indigo-600 font-medium mb-3 block">Feb 01, 2023</span>
                    <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">How to grow your profit through
                        systematic investment with us</h4>
                    <p class="text-gray-500 leading-6 mb-10">Unlock the power of systematic investment with us and watch
                        your profits soar. Our..</p>
                    <a href="javascript:;" class="cursor-pointer text-lg text-indigo-600 font-semibold">Read more..</a>
                </div>
            </div>
            <div class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl">
                <div class="flex items-center">
                    <img src="https://pagedone.io/asset/uploads/1696244356.png" alt="blogs tailwind section"
                        class="rounded-t-2xl w-full object-cover">
                </div>
                <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                    <span class="text-indigo-600 font-medium mb-3 block">Mar 01, 20233</span>
                    <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">How to analyze every holdings of your
                        portfolio</h4>
                    <p class="text-gray-500 leading-6 mb-10">Our comprehensive guide will equip you with the tools and
                        insights needed to..</p>
                    <a href="javascript:;" class="cursor-pointer text-lg text-indigo-600 font-semibold">Read more..</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection