@extends('layout')

@section('title', $page->meta_title ?? $page->title)
@section('description', $page->meta_description ?? Str::limit(strip_tags($page->content), 160))
@section('image', $page->meta_image ? url($page->meta_image) : asset('images/default-blog.jpeg'))

@section('content')
    <main class="max-w-4xl mx-auto py-12 px-4">
        <header class="mb-6">
            <h1 class="text-3xl font-bold">{{ $page->title }}</h1>
        </header>

        <div class="prose">
            {!! $page->content !!}
        </div>
    </main>
@endsection