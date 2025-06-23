@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">View News</h2>
                <a href="{{ route('news.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <div class="bg-slate-800 p-6 rounded-lg shadow-lg space-y-6">

            <!-- Title -->
            <div>
                <label class="block text-white mb-1 font-semibold">Title</label>
                <p class="text-gray-300">{{ $new->title }}</p>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-white mb-1 font-semibold">Description</label>
                <p class="text-gray-300 text-justify">{{ $new->description }}</p>
            </div>

            <!-- Link -->
            <div>
                <label class="block text-white mb-1 font-semibold">Article Link</label>
                @if ($new->link)
                    <a href="{{ $new->link }}" target="_blank" class="text-indigo-400 hover:underline">
                        {{ $new->link }}
                    </a>
                @else
                    <p class="text-gray-400">No link provided.</p>
                @endif
            </div>

            <!-- Source -->
            <div>
                <label class="block text-white mb-1 font-semibold">Source</label>
                <p class="text-gray-300">{{ $new->source ?? 'Not specified' }}</p>
            </div>

            <!-- Date -->
            <div>
                <label class="block text-white mb-1 font-semibold">Published Date</label>
                <p class="text-gray-300">{{ $new->date }}</p>
            </div>

            <!-- Category -->
            <div>
                <label class="block text-white mb-1 font-semibold">Category</label>
                <p class="text-gray-300">{{ $new->category }}</p>
            </div>

            <!-- Image -->
            <div>
                <label class="block text-white mb-2 font-semibold">News Image</label>
                @if ($new->image)
                    <img src="{{ asset($new->image) }}" alt="News Image"
                        class="w-full max-w-md h-64 object-cover rounded shadow-md border border-slate-600" />
                @else
                    <p class="text-gray-400">No image uploaded.</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
