@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Sticky Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">
                    Professional Experiences
                </h2>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ url('/experience') }}" target="_blank" rel="noopener noreferrer"
                        class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                        🔗 Check the Live Route
                    </a>

                    <a href="{{ route('experiences.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
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
                        <th class="py-3 px-4">Organization</th>
                        <th class="py-3 px-4">Duration</th>
                        <th class="py-3 px-4">Description</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($experiences as $index => $experience)
                    <tr class="border-t border-slate-700 hover:bg-slate-700">
                        <!-- Serial -->
                        <td class="py-2 px-4">{{ $index + 1 }}</td>

                        <!-- Image -->
                        <td class="py-2 px-4">
                            @if ($experience->image)
                            <img src="{{ asset($experience->image) }}" alt="{{ $experience->title }}" class="w-20 h-16 object-cover rounded">
                            @else
                            <span class="text-gray-400">No Image</span>
                            @endif
                        </td>

                        <!-- Title -->
                        <td class="py-2 px-4 font-medium">{{ $experience->title }}</td>

                        <!-- Organization -->
                        <td class="py-2 px-4">{{ $experience->organization }}</td>

                        <!-- Duration -->
                        <td class="py-2 px-4">{{ $experience->duration }}</td>

                        <!-- Description -->
                        <td class="py-2 px-4 text-sm text-gray-300">{{ Str::limit($experience->description, 100) }}</td>

                        <!-- Actions -->
                        <td class="py-2 px-4 text-right">
                            <div class="flex justify-end items-center space-x-3">
                                <a href="{{ route('experiences.show', $experience->id) }}" class="text-purple-400 hover:underline text-sm">View</a>
                                <a href="{{ route('experiences.edit', $experience->id) }}" class="text-yellow-400 hover:underline text-sm">Edit</a>
                                <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline text-sm">Delete</button>
                                </form>
                            </div>
                        </td>

                        <!-- Status -->
                        <td class="py-2 px-4">
                            <form action="{{ route('experiences.toggleStatus', $experience->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-xs px-3 py-1 rounded font-semibold 
            {{ $experience->status ? 'bg-green-600 text-white hover:bg-green-500' : 'bg-red-600 text-white hover:bg-red-500' }}">
                                    {{ $experience->status ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @if($experiences->isEmpty())
                    <tr>
                        <td colspan="7" class="text-center py-4 text-gray-400">No experiences found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection