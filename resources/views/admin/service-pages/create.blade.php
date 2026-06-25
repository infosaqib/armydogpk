@extends('admin.layouts.app')

@section('title', 'Create Service Page')

@section('content')
<h1>Create Service Page</h1>

<form method="POST" action="{{ route('admin.service-pages.store') }}">
    @csrf

    <input type="text" name="title" value="{{ old('title') }}" placeholder="Title" required>

    <input type="text" name="city" value="{{ old('city') }}" placeholder="City" required>

    <select name="province" required>
        @foreach($provinces as $province)
        <option value="{{ $province }}">
            {{ ucfirst($province) }}
        </option>
        @endforeach
    </select>

    <input type="text" name="phone_1" value="{{ old('phone_1') }}" placeholder="Phone 1" required>

    <input type="text" name="phone_2" value="{{ old('phone_2') }}" placeholder="Phone 2">

    <button type="submit">Save</button>
</form>
@endsection