@extends('layouts.sidebar')

@section('content')
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg">
        <div class="p-6 text-xl font-bold text-indigo-600">Skydash</div>
        <nav class="mt-10 space-y-2">
            <a href="#" class="block px-6 py-3 bg-indigo-600 text-white rounded-lg">Dashboard</a>
            <a href="#" class="block px-6 py-3 hover:bg-gray-200 rounded-lg">Experience</a>
            <a href="#" class="block px-6 py-3 hover:bg-gray-200 rounded-lg">Articles</a>
            <a href="#" class="block px-6 py-3 hover:bg-gray-200 rounded-lg">Contribution To BASIS</a>
            <a href="#" class="block px-6 py-3 hover:bg-gray-200 rounded-lg">TV Shows</a>
            <a href="#" class="block px-6 py-3 hover:bg-gray-200 rounded-lg">News</a>
            <a href="#" class="block px-6 py-3 hover:bg-gray-200 rounded-lg">International</a>
            <a href="#" class="block px-6 py-3 hover:bg-gray-200 rounded-lg">Award</a>
            <a href="#" class="block px-6 py-3 hover:bg-gray-200 rounded-lg">Contact</a>
            <a href="{{ url('/admin/logout') }}" class="block px-6 py-3 hover:bg-gray-200 rounded-lg">Logout</a>
        </nav>

    </aside>

    <!-- Main content -->
    <main class="flex-1 p-10 bg-gray-50">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold">Welcome Aamir</h1>
                <p class="text-sm text-gray-600">All systems are running smoothly! You have <a href="#" class="text-indigo-600 underline">3 unread alerts</a>!</p>
            </div>
            <div class="text-sm text-gray-500">Today (10 Jan 2021)</div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <div class="bg-indigo-100 p-6 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-800">☀️ 31°C</div>
                    <div class="text-sm">Bangalore, India</div>
                </div>
            </div>
            <div class="bg-blue-400 text-white p-6 rounded-lg">
                <h2 class="text-sm">Today's Bookings</h2>
                <p class="text-2xl font-bold">4006</p>
                <span class="text-xs">10.00% (30 days)</span>
            </div>
            <div class="bg-indigo-700 text-white p-6 rounded-lg">
                <h2 class="text-sm">Total Bookings</h2>
                <p class="text-2xl font-bold">61344</p>
                <span class="text-xs">22.00% (30 days)</span>
            </div>
            <div class="bg-purple-500 text-white p-6 rounded-lg">
                <h2 class="text-sm">Number of Meetings</h2>
                <p class="text-2xl font-bold">34040</p>
                <span class="text-xs">2.00% (30 days)</span>
            </div>
            <div class="bg-red-400 text-white p-6 rounded-lg">
                <h2 class="text-sm">Number of Clients</h2>
                <p class="text-2xl font-bold">47033</p>
                <span class="text-xs">0.22% (30 days)</span>
            </div>
        </div>
    </main>
</div>
@endsection