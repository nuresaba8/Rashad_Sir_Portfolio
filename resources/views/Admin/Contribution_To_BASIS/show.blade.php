@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">View Contribution</h2>
                <a href="{{ route('contributionToBasis.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <div class="bg-slate-800 p-6 rounded-lg shadow-lg space-y-6">

            <!-- Title -->
            <div>
                <label class="block text-white mb-1 font-semibold">Title</label>
                <p class="text-gray-300">{{ $contribution->title }}</p>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-white mb-1 font-semibold">Description</label>
                <p class="text-gray-300 text-justify">{{ $contribution->description }}</p>
            </div>

            <!-- Category -->
            <div>
                <label class="block text-white mb-1 font-semibold">Category</label>
                <p class="text-gray-300 text-justify">{{ $contribution->category }}</p>
            </div>

            <!-- Image -->
            <div>
                <label class="block text-white mb-2 font-semibold">Contribution Image</label>
                @if ($contribution->image_path)
                <img src="{{ asset($contribution->image_path) }}" alt="Contribution Image"
                    class="w-full max-w-3xl h-96 object-cover rounded-xl shadow-md border border-slate-700 mx-auto" />
                @else
                <p class="text-gray-400">No image uploaded.</p>
                @endif
            </div>

        </div>
    </div>
</section>
@endsection