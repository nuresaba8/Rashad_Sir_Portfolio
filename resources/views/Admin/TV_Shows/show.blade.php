@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">
                    View TV Show
                </h2>
                <a href="{{ route('tvShows.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <div class="bg-slate-800 p-6 rounded-lg shadow-lg space-y-6">

            <!-- Title -->
            <div>
                <label class="block text-white mb-1 font-semibold">Title</label>
                <p class="text-gray-300">{{ $tvShow->title }}</p>
            </div>

            <!-- Category -->
            <div>
                <label class="block text-white mb-1 font-semibold">Category</label>
                <p class="text-gray-300">{{ $tvShow->category }}</p>
            </div>

            <!-- Source -->
            <div>
                <label class="block text-white mb-1 font-semibold">Source</label>
                <p class="text-gray-300">{{ $tvShow->source ?? 'N/A' }}</p>
            </div>

            <!-- Publication Date -->
            <div>
                <label class="block text-white mb-1 font-semibold">Publication Date</label>
                <p class="text-gray-300">
                    {{ $tvShow->publication_date ? \Carbon\Carbon::parse($tvShow->publication_date)->format('F d, Y') : 'N/A' }}
                </p>
            </div>

            <!-- Article URL -->
            <div>
                <label class="block text-white mb-1 font-semibold">Article URL</label>
                @if ($tvShow->article_url)
                    <a href="{{ $tvShow->article_url }}" target="_blank" class="text-blue-400 underline">
                        {{ $tvShow->article_url }}
                    </a>
                @else
                    <p class="text-gray-400">No URL provided.</p>
                @endif
            </div>

            <!-- Image -->
            <div>
                <label class="block text-white mb-2 font-semibold">TV Show Image</label>
                @if ($tvShow->image_url)
                    <img src="{{ asset($tvShow->image_url) }}" alt="TV Show Image"
                        class="w-full max-w-md h-64 object-cover rounded shadow-md border border-slate-600" />
                @else
                    <p class="text-gray-400">No image uploaded.</p>
                @endif
            </div>

        </div>
    </div>
</section>
@endsection
