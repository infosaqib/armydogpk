<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Army Dog Center</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="h-full font-sans antialiased text-gray-900">

    <div class="flex h-full min-h-screen overflow-hidden">

        <aside
            class="w-[280px] h-screen sticky top-0 bg-white border-r border-outline-variant flex flex-col p-4 flex-shrink-0 z-20">
            <div class="mb-6 px-2 py-1">
                <h1 class="font-headline-md text-xl font-bold text-primary tracking-tight">Army Dog Center</h1>
                <p class="text-[11px] uppercase tracking-wider text-gray-400 font-semibold">Admin Panel</p>
            </div>

            <nav class="flex-1 flex flex-col gap-1 overflow-y-auto">
                {{-- CONNECTED: admin.dashboard route hook --}}
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 {{ Route::is('admin.dashboard') ? 'bg-secondary-container text-on-secondary-container font-semibold' : 'text-on-surface-variant hover:bg-gray-100' }}"
                    href="{{ route('admin.dashboard') }}">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-body-md text-sm">Dashboard</span>
                </a>

                {{-- CONNECTED: admin.blogs.index route hook --}}
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 {{ Route::is('admin.blogs.*') ? 'bg-secondary-container text-on-secondary-container font-semibold' : 'text-on-surface-variant hover:bg-gray-100' }}"
                    href="{{ route('admin.blogs.index') }}">
                    <span class="material-symbols-outlined">article</span>
                    <span class="font-body-md text-sm">Blogs</span>
                </a>

                {{-- CONNECTED: admin.service-pages.index route hook --}}
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 {{ Route::is('admin.service-pages.*') ? 'bg-secondary-container text-on-secondary-container font-semibold' : 'text-on-surface-variant hover:bg-gray-100' }}"
                    href="{{ route('admin.service-pages.index') }}">
                    <span class="material-symbols-outlined">category</span>
                    <span class="font-body-md text-sm">Service Pages</span>
                </a>

                {{-- FALLBACK: Users link (change '#' to your route once created) --}}
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-gray-100 transition-colors duration-200"
                    href="#">
                    <span class="material-symbols-outlined">group</span>
                    <span class="font-body-md text-sm">Users</span>
                </a>
            </nav>

            <div class="mt-auto pt-4 border-t border-outline-variant flex items-center justify-between px-2 gap-2">
                <div class="flex items-center gap-3 min-w-0">
                    <div
                        class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold flex-shrink-0 uppercase">
                        {{ substr(Auth::user()->name ?? 'AD', 0, 2) }}
                    </div>
                    <div class="min-w-0">
                        <p class="font-semibold text-sm text-on-surface truncate">
                            {{ Auth::user()->name ?? 'Admin User' }}</p>
                        <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email ?? 'admin@armydogcenter.com' }}
                        </p>
                    </div>
                </div>

                {{-- CONNECTED: admin.logout route hook --}}
                <form action="{{ route('admin.logout') }}" method="POST" class="inline flex-shrink-0">
                    @csrf
                    <button type="submit"
                        class="p-1.5 text-gray-400 hover:text-red-600 rounded-md hover:bg-red-50 transition-colors"
                        title="Sign Out">
                        <span class="material-symbols-outlined text-[22px]">logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 h-screen overflow-y-auto bg-gray-50 relative">

            <div class="max-w-7xl mx-auto px-6 pt-6">
                @if(session('success'))
                <div
                    class="mb-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl text-sm font-medium flex items-center gap-2 shadow-sm">
                    <span class="material-symbols-outlined text-green-600 text-[20px]">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
                @endif

                @if($errors->any())
                <div class="mb-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm shadow-sm">
                    <div class="flex items-center gap-2 font-semibold text-red-800 mb-1">
                        <span class="material-symbols-outlined text-red-600 text-[20px]">error</span>
                        <span>Please fix the following problems:</span>
                    </div>
                    <ul class="list-disc pl-5 space-y-0.5 text-red-600 font-medium">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <div class="max-w-7xl mx-auto p-6 min-h-[calc(100vh-2rem)]">
                @yield('content')
            </div>
        </main>

    </div>

    @stack('scripts')
</body>

</html>