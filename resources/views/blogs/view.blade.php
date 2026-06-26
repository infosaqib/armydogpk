@extends('layout')

@section('title', $blog->title)
@section('description', 'Get in touch with Army Dog Center.')

@section('content')

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article
            class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="{{$blog->image}}" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">Jese
                                Leos</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">Army Dog Center</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                    title="February 8th, 2022">{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'N/A' }}</time>
                            </p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">
                    {{$blog->title}}</h1>
            </header>
            <div>
                <p>{{ $blog->content }}</p>
            </div>
        </article>
    </div>
</main>