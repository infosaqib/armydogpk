@php
// Passed directly from view/controller
@endphp

<div x-data="{ active: '{{ $provinces[0]['key'] ?? '' }}' }"
    class="mx-auto max-w-5xl rounded-2xl bg-[#1a1a1a] shadow-2xl overflow-hidden min-h-[380px]">

    <div class="hidden md:grid grid-cols-[240px_1fr] items-stretch min-h-[380px]">

        {{-- LEFT: REGIONS --}}
        <aside class="bg-[#141414] p-5 border-r border-white/5 shrink-0">
            <div class="flex items-center gap-2 mb-5">
                <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <h3 class="text-white font-bold text-base">Regions</h3>
            </div>

            <ul class="space-y-2">
                @foreach ($provinces as $province)
                    <li>
                        <button type="button" @mouseenter="active = '{{ $province['key'] }}'"
                            :class="active === '{{ $province['key'] }}' ? 'bg-primary/20 text-white' : 'text-gray-300 hover:bg-white/5'"
                            class="w-full flex items-center justify-between gap-2 rounded-lg px-4 py-3 text-sm font-medium transition-colors text-left">
                            <span class="truncate">{{ $province['name'] }}</span>
                            <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </li>
                @endforeach
            </ul>
        </aside>

        {{-- RIGHT: CITIES --}}
        <div class="p-6 relative w-full grow bg-[#1a1a1a]">
            @foreach ($provinces as $province)
                <div x-show="active === '{{ $province['key'] }}'" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="w-full">

                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <h4 class="text-white font-bold text-lg">{{ $province['name'] }}</h4>
                        </div>
                        <a href="{{ route('services') }}"
                            class="text-sm text-primary hover:underline inline-flex items-center gap-1">
                            View All
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-4">
                        @foreach ($province['cities'] as $city)
                            <a href="{{ url('services/' . $city->slug . '.html') }}"
                                class="text-gray-300 hover:text-primary text-sm transition-colors whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $city->city }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- DESKTOP FOOTER STRIP --}}
    <div class="hidden md:flex flex-row justify-between items-center border-t border-white/5 px-6 py-3 bg-[#141414]">
        <p class="text-xs text-gray-500">Find dog security and training services in your city</p>
        <a href="{{ route('contact') }}" class="btn-primary">Contact us</a>
    </div>
</div>