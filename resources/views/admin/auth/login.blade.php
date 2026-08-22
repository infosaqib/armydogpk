@extends('layouts.app')

@section('title', 'Admin Login - Army Dog Center')
@section('description', 'Admin login for Army Dog Center dashboard.')

@section('content')
    <section class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4">
        <div class="w-full max-w-md bg-white rounded-lg shadow p-8">

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Email Address</label>
                    <input type="email" name="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}" required autofocus>
                    @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password"
                            class="w-full px-4 py-2 pr-11 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('password') border-red-500 @enderror"
                            required>
                        <button type="button" id="togglePassword" tabindex="-1"
                            class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500 hover:text-gray-700">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <svg id="eyeOffIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3l18 18M10.584 10.587a2 2 0 002.828 2.83M9.363 5.365A9.466 9.466 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.02 10.02 0 01-4.132 5.411M6.223 6.223A9.996 9.996 0 002.458 12c1.274 4.057 5.065 7 9.542 7 1.522 0 2.968-.34 4.257-.949" />
                            </svg>
                        </button>
                    </div>
                    @error('password') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>


                <button type="submit" class="btn-primary w-full">Sign In</button>

            </form>
        </div>
    </section>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const input = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const eyeOffIcon = document.getElementById('eyeOffIcon');
            const isHidden = input.type === 'password';

            input.type = isHidden ? 'text' : 'password';
            eyeIcon.classList.toggle('hidden', isHidden);
            eyeOffIcon.classList.toggle('hidden', !isHidden);
        });
    </script>
@endsection