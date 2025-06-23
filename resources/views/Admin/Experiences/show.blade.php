@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">View Experience</h2>
                <a href="{{ route('experiences.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <div class="bg-slate-800 p-6 rounded-lg shadow-lg space-y-6">

            <!-- Title -->
            <div>
                <label class="block text-white mb-1 font-semibold">Title</label>
                <p class="text-gray-300">{{ $experience->title }}</p>
            </div>

            <!-- Organization -->
            <div>
                <label class="block text-white mb-1 font-semibold">Organization</label>
                <p class="text-gray-300">{{ $experience->organization }}</p>
            </div>

            <!-- Duration -->
            <div>
                <label class="block text-white mb-1 font-semibold">Duration</label>
                <p class="text-gray-300">{{ $experience->duration }}</p>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-white mb-1 font-semibold">Description</label>
                <p class="text-gray-300 text-justify">{{ $experience->description }}</p>
            </div>

            <!-- Image -->
            <div>
                <label class="block text-white mb-2 font-semibold">Experience Image</label>
                @if ($experience->image)
                <img src="{{ asset($experience->image) }}" alt="Experience Image"
                    class="w-full max-w-md h-64 object-cover rounded shadow-md border border-slate-600" />
                @else
                <p class="text-gray-400">No image uploaded.</p>
                @endif
            </div>


        </div>
    </div>
</section>
@endsection