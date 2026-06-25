@extends('admin.layouts.app')

@section('title', 'Create Blog')

@section('content')
<h1>Create Blog</h1>

<form method="POST" action="{{ route('admin.blogs.store') }}">
    @csrf

    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title') }}" required>
    </div>

    <div>
        <label>Content</label>
        <textarea name="content" rows="15" required>{{ old('content') }}</textarea>
    </div>

    <button type="submit">Save</button>
</form>
@endsection