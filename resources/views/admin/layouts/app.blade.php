<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Army Dog Center</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="h-full font-sans antialiased text-gray-900" x-data="{ sidebarOpen: false }">

    <div class="flex h-screen overflow-hidden">

        <div class="fixed inset-0 z-20 bg-gray-900/40 lg:hidden transition-opacity duration-300" x-show="sidebarOpen"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="sidebarOpen = false"
            style="display: none;">
        </div>

        <aside
            class="fixed inset-y-0 left-0 z-30 w-[280px] bg-white border-r border-gray-200 flex flex-col p-4 transform lg:translate-x-0 lg:static lg:inset-0 transition-transform duration-300 ease-in-out"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">

            <div class="mb-6 px-2 py-1 flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-bold text-gray-900 tracking-tight">Army Dog Center</h1>
                    <p class="text-[11px] uppercase tracking-wider text-gray-400 font-semibold">Admin Panel</p>
                </div>
                <button @click="sidebarOpen = false" class="lg:hidden p-1 text-gray-500 hover:text-gray-900">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <nav class="flex-1 flex flex-col gap-1 overflow-y-auto">

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 {{ Route::is('admin.blogs.*') ? 'bg-gray-100 text-gray-900 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}"
                    href="{{ route('admin.blogs.index') }}">
                    <span class="material-symbols-outlined">article</span>
                    <span class="text-sm">Blogs</span>
                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 {{ Route::is('admin.service-pages.*') ? 'bg-gray-100 text-gray-900 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}"
                    href="{{ route('admin.service-pages.index') }}">
                    <span class="material-symbols-outlined">category</span>
                    <span class="text-sm">Service Pages</span>
                </a>
            </nav>

            <div class="mt-auto pt-4 border-t border-gray-200 flex items-center justify-between px-2 gap-2">
                <div class="flex items-center gap-3 min-w-0">
                    <div
                        class="w-10 h-10 rounded-full bg-gray-900 text-white flex items-center justify-center font-bold flex-shrink-0 uppercase">
                        {{ substr(Auth::user()->name ?? 'AD', 0, 2) }}
                    </div>
                    <div class="min-w-0">
                        <p class="font-semibold text-sm text-gray-900 truncate">{{ Auth::user()->name ?? 'Admin User' }}
                        </p>
                        <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email ?? 'admin@armydogcenter.com' }}
                        </p>
                    </div>
                </div>

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

        <div class="flex-1 flex flex-col h-screen overflow-hidden">

            <header class="bg-white border-b border-gray-200 py-3 px-4 flex items-center lg:hidden flex-shrink-0">
                <button @click="sidebarOpen = true" class="p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <span class="ml-3 font-semibold text-gray-900">Army Dog Center</span>
            </header>

            <main class="flex-1 overflow-y-auto p-4 md:p-6 max-w-7xl w-full mx-auto">

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

                @yield('content')

            </main>
        </div>

    </div>

    @stack('scripts')
</body>

</html>