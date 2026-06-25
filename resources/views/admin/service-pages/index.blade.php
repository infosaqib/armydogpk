@extends('admin.layouts.app')

@section('title', 'Service Pages')

@section('content')
<h1>Service Pages</h1>

<a href="{{ route('admin.service-pages.create') }}">Create Service Page</a>

<ul>
    @foreach($servicePages as $servicePage)
    <li>
        {{ $servicePage->title }}

        <a href="{{ route('admin.service-pages.edit', $servicePage) }}">Edit</a>

        <form action="{{ route('admin.service-pages.destroy', $servicePage) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>

{{ $servicePages->links() }}
@endsection