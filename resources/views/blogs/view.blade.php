@extends('layout')

@section('title', 'Blog | Army Dog Center 03457125252, 03336937508')
@section('description', 'Read news, tips, and updates from Army Dog Center on dog training, security, and rescue work across Pakistan. Call 03005794720.')

@section('content')

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue">

                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900">

                            @if($blog->image)
                                <img class="mr-4 w-16 h-16 rounded-full" src="{{ $blog->image }}" alt="{{ $blog->title }}">
                            @endif

                            <div>
                                <p class="text-xl font-bold">
                                    Army Dog Center
                                </p>

                                <p class="text-base text-gray-500">
                                    {{ optional($blog->created_at)->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                    </address>

                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:text-4xl">
                        {{ $blog->title }}
                    </h1>
                </header>

                <div class="prose prose-lg max-w-none">
                    {!! $blog->content !!}
                </div>

            </article>
        </div>
    </main>

@endsection