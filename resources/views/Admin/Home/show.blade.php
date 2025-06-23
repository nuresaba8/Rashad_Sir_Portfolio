@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">
                    View Profile
                </h2>
                <a href="{{ route('home.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <div class="bg-slate-800 p-6 rounded-lg shadow-lg space-y-6">

            <!-- Name -->
            <div>
                <label class="block text-white mb-1 font-semibold">Name</label>
                <p class="text-gray-300">{{ $home->name }}</p>
            </div>

            <!-- Designation -->
            <div>
                <label class="block text-white mb-1 font-semibold">Designation</label>
                <p class="text-gray-300">{{ $home->designation }}</p>
            </div>

            <!-- Short Description -->
            <div>
                <label class="block text-white mb-1 font-semibold">Short Description</label>
                <p class="text-gray-300">{{ $home->short_description }}</p>
            </div>

            <!-- Full Description -->
            <div>
                <label class="block text-white mb-1 font-semibold">Full Description</label>
                <p class="text-gray-300 text-justify">{{ $home->full_description }}</p>
            </div>

            <!-- Facebook -->
            <div>
                <label class="block text-white mb-1 font-semibold">Facebook Link</label>
                @if ($home->facebook_link)
                    <a href="{{ $home->facebook_link }}" target="_blank" class="text-indigo-400 hover:underline">
                        {{ $home->facebook_link }}
                    </a>
                @else
                    <p class="text-gray-400">No Facebook link provided.</p>
                @endif
            </div>

            <!-- LinkedIn -->
            <div>
                <label class="block text-white mb-1 font-semibold">LinkedIn Link</label>
                @if ($home->linkedin_link)
                    <a href="{{ $home->linkedin_link }}" target="_blank" class="text-indigo-400 hover:underline">
                        {{ $home->linkedin_link }}
                    </a>
                @else
                    <p class="text-gray-400">No LinkedIn link provided.</p>
                @endif
            </div>

            <!-- Image -->
            <div>
                <label class="block text-white mb-2 font-semibold">Profile Image</label>
                @if ($home->image_path)
                    <img src="{{ asset($home->image_path) }}" alt="Profile Image"
                        class="w-full max-w-md h-64 object-cover rounded shadow-md border border-slate-600" />
                @else
                    <p class="text-gray-400">No image uploaded.</p>
                @endif
            </div>

        </div>
    </div>
</section>
@endsection
