@extends('admin.layouts.app')

@section('title', 'Blogs')

{{-- Fallback: If your layout doesn't load Material Icons, this ensures they render --}}
@push('styles')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endpush

@section('content')
<div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
    <div>
        <h1 class="font-headline-lg text-3xl font-bold text-on-surface tracking-tight">Blogs</h1>
        <p class="text-sm text-gray-500 mt-1">Manage and publish your website updates.</p>
    </div>
    <a href="{{ route('admin.blogs.create') }}"
        class="inline-flex items-center gap-2 bg-primary text-on-primary px-5 py-3 rounded-lg font-label-md text-sm font-semibold hover:shadow-lg hover:shadow-primary/20 transition-all duration-200 active:scale-95">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
        </svg>
        Create New Post
    </a>
</div>

<div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm overflow-hidden">
    <div class="p-4 border-b border-outline-variant flex items-center justify-between bg-surface-bright">
        <div class="flex items-center gap-2">
            <span
                class="px-3 py-1.5 text-xs font-semibold rounded-md bg-secondary-container text-on-secondary-container">
                All Posts ({{ $blogs->total() ?? $blogs->count() }})
            </span>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-low border-b border-outline-variant">
                    <th class="px-6 py-4 font-medium text-sm text-on-surface-variant uppercase tracking-wider w-24">
                        Image</th>
                    <th class="px-6 py-4 font-medium text-sm text-on-surface-variant uppercase tracking-wider">Title
                    </th>
                    <th class="px-6 py-4 font-medium text-sm text-on-surface-variant uppercase tracking-wider">Date
                        Created</th>
                    <th
                        class="px-6 py-4 font-medium text-sm text-on-surface-variant uppercase tracking-wider text-right w-32">
                        Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant">
                @forelse($blogs as $blog)
                <tr class="hover:bg-surface-container-low/50 transition-colors group">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div
                            class="w-12 h-12 rounded-lg overflow-hidden bg-gray-100 flex-shrink-0 border border-gray-200">
                            @if($blog->thumbnail)
                            <img class="w-full h-full object-cover" src="{{ asset($blog->thumbnail) }}"
                                alt="{{ $blog->title }}" />
                            @else
                            <div class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            @endif
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        <p
                            class="font-semibold text-on-surface group-hover:text-primary transition-colors max-w-md break-words">
                            {{ $blog->title }}
                        </p>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                        {{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'N/A' }}
                    </td>

                    <td class="px-6 py-4 text-right whitespace-nowrap">
                        <div class="flex items-center justify-end gap-3">
                            <a href="{{url('/blogs/' . $blog->slug . '.html')}}"
                                class="p-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"
                                title="View">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                            </a>
                            <a href="{{ route('admin.blogs.edit', $blog) }}"
                                class="p-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"
                                title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>

                            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST"
                                onsubmit="return confirm('Delete this blog post permanently?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="p-2 text-gray-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all"
                                    title="Delete" type="submit">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-gray-400">
                        No articles found. Click "Create New Post" to start adding items.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@if(method_exists($blogs, 'links') && $blogs->hasPages())
<div class="mt-6">
    {{ $blogs->links() }}
</div>
@endif
@endsection