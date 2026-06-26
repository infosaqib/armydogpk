@extends('admin.layouts.app')

@section('title', 'Create Service Page')

@section('content')
<div class="min-h-screen bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto px-6">

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">

            <div class="border-b px-8 py-6">
                <h1 class="text-3xl font-bold text-gray-800">
                    Create Service Page
                </h1>

                <p class="mt-2 text-gray-500">
                    Add a new service location for the website.
                </p>
            </div>

            <form method="POST" action="{{ route('admin.service-pages.store') }}" class="p-8 space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="city" class="block text-sm font-semibold text-gray-700 mb-2">
                            City
                        </label>

                        <input id="city" type="text" name="city" value="{{ old('city') }}" required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition"
                            placeholder="Lahore">
                    </div>

                    <div>
                        <label for="province" class="block text-sm font-semibold text-gray-700 mb-2">
                            Province
                        </label>

                        <select id="province" name="province" required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition">
                            <option value="">Select Province</option>

                            @foreach($provinces as $province)
                            <option value="{{ $province }}" @selected(old('province')===$province)>
                                {{ ucfirst($province) }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="phone_1" class="block text-sm font-semibold text-gray-700 mb-2">
                            Primary Phone
                        </label>

                        <input id="phone_1" type="text" name="phone_1" value="{{ old('phone_1') }}" required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition"
                            placeholder="+92...">
                    </div>

                    <div>
                        <label for="phone_2" class="block text-sm font-semibold text-gray-700 mb-2">
                            Secondary Phone
                        </label>

                        <input id="phone_2" type="text" name="phone_2" value="{{ old('phone_2') }}"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition"
                            placeholder="Optional">
                    </div>

                </div>

                <div class="flex justify-end pt-2">
                    <button type="submit"
                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-3 rounded-lg transition">
                        Save Service Page
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>
@endsection