@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center py-0">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">
                    Edit Profile
                </h2>
                <a href="{{ route('home.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                    ← Back to List
                </a>
            </div>
        </div>

        <form action="{{ route('home.update', $home) }}" method="POST" enctype="multipart/form-data" class="bg-slate-800 p-6 rounded-lg shadow-lg">
            @csrf
            @method('POST')

            <div class="mb-4">
                <label for="name" class="block text-white mb-1 font-semibold">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $home->name) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                @error('name')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="designation" class="block text-white mb-1 font-semibold">Designation</label>
                <input type="text" id="designation" name="designation" value="{{ old('designation', $home->designation) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                @error('designation')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="facebook_link" class="block text-white mb-1 font-semibold">Facebook Link</label>
                <input type="url" id="facebook_link" name="facebook_link" value="{{ old('facebook_link', $home->facebook_link) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('facebook_link')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="linkedin_link" class="block text-white mb-1 font-semibold">LinkedIn Link</label>
                <input type="url" id="linkedin_link" name="linkedin_link" value="{{ old('linkedin_link', $home->linkedin_link) }}"
                    class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('linkedin_link')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
    <label for="short_description" class="block text-white mb-1 font-semibold">Short Description</label>
    <input type="text" id="short_description" name="short_description"
        value="{{ old('short_description', $home->short_description) }}"
        class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
    @error('short_description')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label for="full_description" class="block text-white mb-1 font-semibold">Full Description</label>
    <textarea id="full_description" name="full_description" rows="5"
        class="w-full px-3 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('full_description', $home->full_description) }}</textarea>
    @error('full_description')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>


            <div class="mb-4">
                <label class="block text-white mb-2 font-semibold">Current Image</label>
                @if ($home->image_path)
                    <img src="{{ asset($home->image_path) }}" alt="Profile Image"
                        class="w-full max-w-md h-64 object-cover rounded shadow-md border border-slate-600 mb-4">
                @else
                    <p class="text-gray-400">No image uploaded.</p>
                @endif

                <label for="image" class="block text-white mb-1 font-semibold">Upload New Image (optional)</label>
                <input type="file" id="image" name="image" accept="image/*" class="text-white">
                @error('image')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-6 py-2 rounded">Update Profile</button>
        </form>
    </div>
</section>
@endsection
