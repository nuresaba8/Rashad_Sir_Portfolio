@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">Edit Contribution</h2>
                <a href="{{ route('contributionToBasis.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <form action="{{ route('contributionToBasis.update', $contribution) }}" method="POST" enctype="multipart/form-data" class="bg-slate-800 p-6 rounded-lg shadow-lg">
            @csrf
            @method('POST')

            <div class="mb-4">
                <label for="title" class="block text-white mb-1 font-semibold">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $contribution->title) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                @error('title')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-white mb-1 font-semibold">Description</label>
                <textarea id="description" name="description" rows="4" required
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('description', $contribution->description) }}</textarea>
                @error('description')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category" class="block text-white mb-1 font-semibold">Category</label>
                <textarea id="category" name="category" rows="4" required
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('description', $contribution->description) }}</textarea>
                @error('category')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2 font-semibold">Current Image</label>
                @if ($contribution->image_path)
                <img src="{{ asset($contribution->image_path) }}" alt="Contribution Image" class="w-full max-w-3xl h-96 object-cover rounded-xl mb-6 mx-auto border border-slate-700 shadow-lg">
                @else
                <p class="text-gray-400">No image uploaded.</p>
                @endif

                <label for="image" class="block text-white mb-1 font-semibold">Upload New Image (optional)</label>
                <input type="file" id="image" name="image" accept="image/*" class="text-white">
                @error('image')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-6 py-2 rounded">Update Contribution</button>
        </form>
    </div>
</section>
@endsection