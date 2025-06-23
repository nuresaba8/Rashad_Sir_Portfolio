@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-green-400 to-blue-400 text-transparent bg-clip-text">View Article</h2>
                <a href="{{ route('articles.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <div class="bg-slate-800 p-6 rounded-lg shadow-lg space-y-6">

            <!-- Title -->
            <div>
                <label class="block text-white mb-1 font-semibold">Title</label>
                <p class="text-gray-300">{{ $article->title }}</p>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-white mb-1 font-semibold">Description</label>
                <p class="text-gray-300 text-justify">{{ $article->description }}</p>
            </div>

            <!-- Link -->
            <div>
                <label class="block text-white mb-1 font-semibold">Article Link</label>
                @if ($article->article_url)
                <a href="{{ $article->article_url }}" target="_blank" class="text-indigo-400 hover:underline">
                    {{ $article->article_url }}
                </a>
                @else
                <p class="text-gray-400">No link provided.</p>
                @endif
            </div>

            <!-- Image -->
            <div>
                <label class="block text-white mb-2 font-semibold">Article Image</label>
                @if ($article->image_url)
                <img src="{{ asset($article->image_url) }}" alt="Article Image"
                    class="w-full max-w-md h-64 object-cover rounded shadow-md border border-slate-600" />
                @else
                <p class="text-gray-400">No image uploaded.</p>
                @endif
            </div>

        </div>
    </div>
</section>
@endsection
