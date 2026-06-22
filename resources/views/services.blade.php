@extends('layout')

@section('title', 'Services - Army Dog Center')
@section('description', 'Detection, Protection, and Search & Rescue dog training services.')

@section('content')
<!-- Hero -->
<section class="bg-dark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="text-center">
                <img src="https://dummyimage.com/600x360" alt="">
            </div>
            <div>
                <h1 class="text-5xl font-bold mb-6">Professional Dog Training & Protection</h1>
                <p class="text-xl text-gray-300 mb-8">Expert military and civilian dog training services in Pakistan.
                    Available 24/7 for emergency response.</p>
                <div class="flex gap-4">
                    <a href="/contact" class="btn-primary">Call us - 03000000000</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Areas we serve -->
@include('components.where-we-serve')

<!-- Areas we serve -->
@include('components.why-we-are-different')


@endsection