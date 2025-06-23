@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Sticky Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-green-400 to-blue-500 text-transparent bg-clip-text">
                    TV Shows
                </h2>
                <div class="flex flex-wrap gap-4">

                    <a href="{{ route('tvShows.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                        + Add New
                    </a>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-slate-800 text-white rounded-lg">
                <thead class="bg-slate-700 text-sm uppercase">
                    <tr>
                        <th class="py-3 px-4">No</th>
                        <th class="py-3 px-4">Image</th>
                        <th class="py-3 px-4">Title</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Source</th>
                        <th class="py-3 px-4">Publication Date</th>
                        <th class="py-3 px-4">URL</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tvShows as $index => $tvshow)
                    <tr class="border-t border-slate-700 hover:bg-slate-700">
                        <td class="py-2 px-4">{{ $index + 1 }}</td>

                        <!-- Image -->
                        <td class="py-2 px-4">
                            @if ($tvshow->image_url)
                            <img src="{{ asset($tvshow->image_url) }}" alt="TV Show Image" class="w-20 h-16 object-cover rounded">
                            @else
                            <span class="text-gray-400">No Image</span>
                            @endif
                        </td>

                        <td class="py-2 px-4 font-medium">{{ $tvshow->title }}</td>
                        <td class="py-2 px-4 text-indigo-300 text-xs font-medium">{{ $tvshow->category ?? 'N/A' }}</td>
                        <td class="py-2 px-4 text-sm">{{ $tvshow->source ?? 'N/A' }}</td>
                        <td class="py-2 px-4 text-sm">{{ \Carbon\Carbon::parse($tvshow->publication_date)->format('d M Y') }}</td>

                        <!-- Article URL -->
                        <td class="py-2 px-4">
                            <a href="{{ $tvshow->article_url }}" target="_blank" class="text-blue-400 hover:underline text-sm">
                                Visit
                            </a>
                        </td>

                        <!-- Actions -->
                        <td class="py-2 px-4 text-right">
                            <div class="flex justify-end items-center space-x-3">
                                <a href="{{ route('tvShows.show', $tvshow->id) }}" class="text-purple-400 hover:underline text-sm">View</a>
                                <a href="{{ route('tvShows.edit', $tvshow->id) }}" class="text-yellow-400 hover:underline text-sm">Edit</a>
                                <form action="{{ route('tvShows.destroy', $tvshow->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline text-sm">Delete</button>
                                </form>
                            </div>
                        </td>

                        <!-- Status -->
                        <td class="py-2 px-4">
                            <form action="{{ route('tvShows.toggleStatus', $tvshow->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-xs px-3 py-1 rounded font-semibold 
            {{ $tvshow->status ? 'bg-green-600 text-white hover:bg-green-500' : 'bg-red-600 text-white hover:bg-red-500' }}">
                                    {{ $tvshow->status ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection