@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">Create Experience</h2>
                <a href="{{ route('experiences.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
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

            <form action="{{ route('experiences.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <div class="mb-4">
                    <label for="title" class="block text-white font-medium mb-1">Title</label>
                    <input type="text" id="title" name="title" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('title') }}" required>
                </div>

                <!-- Organization -->
                <div class="mb-4">
                    <label for="organization" class="block text-white font-medium mb-1">Organization</label>
                    <input type="text" id="organization" name="organization" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('organization') }}" required>
                </div>

                <!-- Duration -->
                <div class="mb-4">
                    <label for="duration" class="block text-white font-medium mb-1">Duration</label>
                    <input type="text" id="duration" name="duration" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('duration') }}" required>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block text-white font-medium mb-1">Description</label>
                    <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" required>{{ old('description') }}</textarea>
                </div>

                <!-- Image -->
                <div class="mb-4">
                    <label for="image" class="block text-white font-medium mb-1">Upload Image (optional)</label>
                    <input type="file" id="image" name="image" accept="image/*" class="block w-full text-white">
                </div>

                <!-- Submit -->
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
