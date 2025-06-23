@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">
                    Edit TV Show
                </h2>
                <a href="{{ route('tvShows.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <form action="{{ route('tvShows.update', $tvShow->id) }}" method="POST" enctype="multipart/form-data" class="bg-slate-800 p-6 rounded-lg shadow-lg">
            @csrf
            @method('POST')

            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-white mb-1 font-semibold">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $tvShow->title) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                @error('title')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category -->
            <div class="mb-4">
                <label for="category" class="block text-white mb-1 font-semibold">Category</label>
                <input type="text" id="category" name="category" value="{{ old('category', $tvShow->category) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                @error('category')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Source -->
            <div class="mb-4">
                <label for="source" class="block text-white mb-1 font-semibold">Source</label>
                <input type="text" id="source" name="source" value="{{ old('source', $tvShow->source) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('source')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Publication Date -->
            <div class="mb-4">
                <label for="publication_date" class="block text-white mb-1 font-semibold">Publication Date</label>
                <input type="date" id="publication_date" name="publication_date" value="{{ old('publication_date', $tvShow->publication_date) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('publication_date')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Article URL -->
            <div class="mb-4">
                <label for="article_url" class="block text-white mb-1 font-semibold">Article URL</label>
                <input type="url" id="article_url" name="article_url" value="{{ old('article_url', $tvShow->article_url) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('article_url')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Current Image -->
            <div class="mb-4">
                <label class="block text-white mb-2 font-semibold">Current Image</label>
                @if ($tvShow->image_url)
                    <img src="{{ asset($tvShow->image_url) }}" alt="TV Show Image"
                        class="w-full max-w-md h-64 object-cover rounded shadow-md border border-slate-600 mb-4">
                @else
                    <p class="text-gray-400">No image uploaded.</p>
                @endif

                <label for="image_url" class="block text-white mb-1 font-semibold">Upload New Image (optional)</label>
                <input type="file" id="image_url" name="image_url" accept="image/*" class="text-white">
                @error('image_url')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-6 py-2 rounded">
                Update TV Show
            </button>
        </form>
    </div>
</section>
@endsection
