@extends('admin.layouts.app')

@section('title', 'Edit Blog')

@section('content')
<div class="min-h-screen bg-gray-100 py-10">
    <div class="max-w-5xl mx-auto px-6">

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">

            <div class="border-b px-8 py-6 flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">
                        Edit Blog
                    </h1>

                    <p class="mt-2 text-gray-500">
                        Update your blog article.
                    </p>
                </div>

                <a href="{{ route('admin.blogs.index') }}"
                    class="text-sm font-medium text-orange-600 hover:text-orange-700">
                    ← Back to Blogs
                </a>
            </div>

            <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" class="p-8 space-y-8">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                        Blog Title
                    </label>

                    <input id="title" type="text" name="title" value="{{ old('title', $blog->title) }}" required
                        autofocus
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition">
                </div>

                <div>
                    <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">
                        Blog Content
                    </label>

                    <textarea id="content" name="content">{{ old('content', $blog->content) }}</textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-3 rounded-lg transition">
                        Update Blog
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
let editor;

ClassicEditor
    .create(document.querySelector('#content'), {
        ckfinder: {
            uploadUrl: "{{ route('admin.ckeditor.upload') }}?_token={{ csrf_token() }}"
        }
    })
    .then(newEditor => {
        editor = newEditor;

        document.querySelector('form').addEventListener('submit', () => {
            editor.updateSourceElement();
        });
    })
    .catch(console.error);
</script>
@endsection