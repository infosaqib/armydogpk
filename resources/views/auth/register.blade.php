@extends('layout')

@section('title', 'Admin Register - Army Dog Center')
@section('description', 'Admin registration for Army Dog Center.')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow p-8">
        <div class="text-center mb-8">
            <div class="text-4xl mb-3">🐕</div>
            <h1 class="text-2xl font-bold text-dark">Create Admin Account</h1>
            <p class="text-gray-600 mt-2">Army Dog Center Dashboard</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Full Name</label>
                <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Email Address</label>
                <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('password') border-red-500 @enderror" required>
                @error('password') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary" required>
            </div>

            <button type="submit" class="btn-primary w-full">Create Account</button>

            <p class="text-center text-gray-600 text-sm mt-4">
                Already have an account? <a href="{{ route('login') }}" class="text-primary font-semibold hover:underline">Sign in</a>
            </p>
        </form>
    </div>
</section>
@endsection
