@extends('layout')

@section('title', 'Admin Dashboard - Army Dog Center')
@section('description', 'Admin dashboard for Army Dog Center.')

@section('content')
<!-- Page Header -->
<section class="bg-dark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-4xl font-bold">Dashboard</h1>
                <p class="text-gray-300 mt-2">Welcome, {{ Auth::user()->name }}</p>
            </div>
            <a href="{{ route('logout') }}" class="btn-secondary">Logout</a>
        </div>
    </div>
</section>

<!-- Dashboard Content -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-gray-600 text-sm font-semibold mb-2">Total Services</h3>
                <p class="text-3xl font-bold text-primary">3</p>
                <p class="text-gray-500 text-xs mt-2">Detection, Protection, Search & Rescue</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-gray-600 text-sm font-semibold mb-2">Dogs Trained</h3>
                <p class="text-3xl font-bold text-primary">500+</p>
                <p class="text-gray-500 text-xs mt-2">Over 500 trained dogs</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-gray-600 text-sm font-semibold mb-2">Active Handlers</h3>
                <p class="text-3xl font-bold text-primary">6</p>
                <p class="text-gray-500 text-xs mt-2">Certified professionals</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-gray-600 text-sm font-semibold mb-2">Experience</h3>
                <p class="text-3xl font-bold text-primary">20+</p>
                <p class="text-gray-500 text-xs mt-2">Years in operation</p>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Quick Actions -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-2xl font-bold mb-6">Quick Actions</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="/services" class="bg-primary text-white p-4 rounded-lg hover:bg-amber-700 transition text-center">
                            <div class="text-2xl mb-2">📋</div>
                            <span class="font-semibold">View Services</span>
                        </a>
                        <a href="/team" class="bg-dark text-white p-4 rounded-lg hover:bg-gray-900 transition text-center">
                            <div class="text-2xl mb-2">👥</div>
                            <span class="font-semibold">Team Members</span>
                        </a>
                    </div>
                </div>

                <!-- System Status -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-2xl font-bold mb-6">System Status</h2>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center p-3 bg-green-50 rounded border border-green-200">
                            <span>Database Connection</span>
                            <span class="bg-green-500 text-white px-3 py-1 rounded text-sm font-semibold">Active</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-green-50 rounded border border-green-200">
                            <span>Email Service</span>
                            <span class="bg-green-500 text-white px-3 py-1 rounded text-sm font-semibold">Active</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-green-50 rounded border border-green-200">
                            <span>Application Status</span>
                            <span class="bg-green-500 text-white px-3 py-1 rounded text-sm font-semibold">Running</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-8">
                <!-- User Info -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-2xl font-bold mb-6">Your Profile</h2>
                    <div class="space-y-4">
                        <div>
                            <p class="text-gray-600 text-sm">Email</p>
                            <p class="font-semibold">{{ Auth::user()->email }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Member Since</p>
                            <p class="font-semibold">{{ Auth::user()->created_at->format('M d, Y') }}</p>
                        </div>
                        <a href="#" class="btn-primary w-full text-center">Edit Profile</a>
                    </div>
                </div>

                <!-- Recent Info -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-2xl font-bold mb-6">Latest News</h2>
                    <div class="space-y-4 text-sm">
                        <div class="border-l-4 border-primary pl-4">
                            <p class="font-semibold">New Training Program</p>
                            <p class="text-gray-600">Advanced detection dog training</p>
                        </div>
                        <div class="border-l-4 border-primary pl-4">
                            <p class="font-semibold">Team Expansion</p>
                            <p class="text-gray-600">Added 2 new handlers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
