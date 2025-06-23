@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">
                    Create TV Show
                </h2>
                <a href="{{ route('tvShows.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <!-- Form Card -->
        <div class="bg-slate-800 p-6 rounded-lg shadow-lg max-w-2xl mx-auto">
            @if ($errors->any())
                <div class="mb-4 text-red-500">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('tvShows.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <div class="mb-4">
                    <label for="title" class="block text-white font-medium mb-1">Title</label>
                    <input type="text" id="title" name="title" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('title') }}" required>
                </div>

                <!-- Category -->
                <div class="mb-4">
                    <label for="category" class="block text-white font-medium mb-1">Category</label>
                    <input type="text" id="category" name="category" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('category') }}" required>
                </div>

                <!-- Source -->
                <div class="mb-4">
                    <label for="source" class="block text-white font-medium mb-1">Source</label>
                    <input type="text" id="source" name="source" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('source') }}">
                </div>

                <!-- Publication Date -->
                <div class="mb-4">
                    <label for="publication_date" class="block text-white font-medium mb-1">Publication Date</label>
                    <input type="date" id="publication_date" name="publication_date" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('publication_date') }}">
                </div>

                <!-- Article URL -->
                <div class="mb-4">
                    <label for="article_url" class="block text-white font-medium mb-1">Article URL (optional)</label>
                    <input type="url" id="article_url" name="article_url" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('article_url') }}">
                </div>

                <!-- Image Upload -->
                <div class="mb-4">
                    <label for="image_url" class="block text-white font-medium mb-1">Upload Image (optional)</label>
                    <input type="file" id="image_url" name="image_url" accept="image/*" class="block w-full text-white">
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-6 py-2 rounded">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
