@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Sticky Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">News</h2>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ url('/news') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                        🔗 Check the Live Route
                    </a>

                    <a href="{{ route('news.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                        ➕ Add New
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
                        <th class="py-3 px-4">Source</th>
                        <th class="py-3 px-4">Date</th>
                        <th class="py-3 px-4">Description</th>
                        <th class="py-3 px-4">Link</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $index => $item)
                    <tr class="border-t border-slate-700 hover:bg-slate-700">
                        <td class="py-2 px-4">{{ $index + 1 }}</td>

                        <!-- Image -->
                        <td class="py-2 px-4">
                            @if ($item->image)
                            <img src="{{ asset($item->image) }}" alt="News Image" class="w-20 h-16 object-cover rounded">
                            @else
                            <span class="text-gray-400">No Image</span>
                            @endif
                        </td>

                        <!-- Title -->
                        <td class="py-2 px-4 font-medium">{{ $item->title }}</td>

                        <!-- Source -->
                        <td class="py-2 px-4 text-sm">{{ $item->source }}</td>

                        <!-- Date -->
                        <td class="py-2 px-4 text-sm">{{ $item->date }}</td>

                        <!-- Description -->
                        <td class="py-2 px-4 text-sm text-gray-300">{{ Str::limit($item->description, 100) }}</td>

                        <!-- Link -->
                        <td class="py-2 px-4">
                            @if ($item->link)
                            <a href="{{ $item->link }}" target="_blank" class="text-indigo-400 hover:underline text-sm">🔗 Open</a>
                            @else
                            <span class="text-gray-400">None</span>
                            @endif
                        </td>

                        <!-- Category -->
                        <td class="py-2 px-4 text-sm">{{ $item->category }}</td>

                        <!-- Actions -->
                        <td class="py-2 px-4 text-right">
                            <div class="flex justify-end items-center space-x-3">
                                <a href="{{ route('news.show', $item->id) }}" class="text-purple-400 hover:underline text-sm">View</a>
                                <a href="{{ route('news.edit', $item->id) }}" class="text-yellow-400 hover:underline text-sm">Edit</a>
                                <form action="{{ route('news.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline text-sm">Delete</button>
                                </form>
                            </div>
                        </td>

                        <!-- Status -->
                        <td class="py-2 px-4">
                            <form action="{{ route('news.toggleStatus', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-xs px-3 py-1 rounded font-semibold 
            {{ $item->status ? 'bg-green-600 text-white hover:bg-green-500' : 'bg-red-600 text-white hover:bg-red-500' }}">
                                    {{ $item->status ? 'Active' : 'Inactive' }}
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
