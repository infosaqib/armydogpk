@extends('admin.layouts.app')

@section('title', 'Blogs')

@section('content')
<h1>Blogs</h1>

<a href="{{ route('admin.blogs.create') }}">Create Blog</a>

<ul>
    @foreach($blogs as $blog)
    <li>
        {{ $blog->title }}

        <a href="{{ route('admin.blogs.edit', $blog) }}">Edit</a>

        <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>

{{ $blogs->links() }}
@endsection