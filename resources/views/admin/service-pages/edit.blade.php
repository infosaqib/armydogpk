@extends('admin.layouts.app')

@section('title', 'Edit Service Page')

@section('content')
<h1>Edit Service Page</h1>

<form method="POST" action="{{ route('admin.service-pages.update', $servicePage) }}">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ old('title', $servicePage->title) }}" required>

    <input type="text" name="city" value="{{ old('city', $servicePage->city) }}" required>

    <select name="province" required>
        @foreach($provinces as $province)
        <option value="{{ $province }}" @selected($province===$servicePage->province)
            >
            {{ ucfirst($province) }}
        </option>
        @endforeach
    </select>

    <input type="text" name="phone_1" value="{{ old('phone_1', $servicePage->phone_1) }}" required>

    <input type="text" name="phone_2" value="{{ old('phone_2', $servicePage->phone_2) }}">

    <button type="submit">Update</button>
</form>
@endsection