@extends('admin.layouts.app')

@section('title', 'Edit Blog')

@section('content')
<h1>Edit Blog</h1>

<form method="POST" action="{{ route('admin.blogs.update', $blog) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title', $blog->title) }}" required>
    </div>

    <div>
        <label>Content</label>
        <textarea name="content" rows="15" required>{{ old('content', $blog->content) }}</textarea>
    </div>

    <button type="submit">Update</button>
</form>
@endsection