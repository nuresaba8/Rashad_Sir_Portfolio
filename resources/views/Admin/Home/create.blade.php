@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">Create Profile</h2>
                <a href="{{ route('home.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
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

            <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-white font-medium mb-1">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('name') }}" required>
                </div>

                <div class="mb-4">
                    <label for="designation" class="block text-white font-medium mb-1">Designation</label>
                    <input type="text" id="designation" name="designation" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('designation') }}">
                </div>

                <div class="mb-4">
                    <label for="short_description" class="block text-white font-medium mb-1">Short Description</label>
                    <textarea id="short_description" name="short_description" rows="2" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500">{{ old('short_description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="full_description" class="block text-white font-medium mb-1">Full Description</label>
                    <textarea id="full_description" name="full_description" rows="4" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500">{{ old('full_description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="facebook_link" class="block text-white font-medium mb-1">Facebook Link (optional)</label>
                    <input type="url" id="facebook_link" name="facebook_link" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('facebook_link') }}">
                </div>

                <div class="mb-4">
                    <label for="linkedin_link" class="block text-white font-medium mb-1">LinkedIn Link (optional)</label>
                    <input type="url" id="linkedin_link" name="linkedin_link" class="w-full px-4 py-2 rounded bg-slate-700 text-white focus:outline-none focus:ring focus:ring-indigo-500" value="{{ old('linkedin_link') }}">
                </div>

                <div class="mb-4">
                    <label for="image_path" class="block text-white font-medium mb-1">Upload Image (optional)</label>
                    <input type="file" id="image_path" name="image_path" accept="image/*" class="block w-full text-white">
                </div>

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
