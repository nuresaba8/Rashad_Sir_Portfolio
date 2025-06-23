@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">

        <!-- Sticky Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">
                    Profiles
                </h2>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('home.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                        + Add New
                    </a>
                </div>
            </div>
        </div>

        <!-- Profiles Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-slate-800 text-white rounded-lg">
                <thead class="bg-slate-700 text-sm uppercase">
                    <tr>
                        <th class="py-3 px-4">No</th>
                        <th class="py-3 px-4">Image</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Designation</th>
                        <th class="py-3 px-4 max-w-xs">Short Description</th>
                        <th class="py-3 px-4 max-w-xs">Full Description</th> <!-- Added Full Description -->
                        <th class="py-3 px-4">Facebook</th>
                        <th class="py-3 px-4">LinkedIn</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($profiles as $index => $profile)
                    <tr class="border-t border-slate-700 hover:bg-slate-700">
                        <!-- Serial -->
                        <td class="py-2 px-4">{{ $index + 1 }}</td>

                        <!-- Image -->
                        <td class="py-2 px-4">
                            @if ($profile->image_path)
                            <img src="{{ asset($profile->image_path) }}" alt="Profile Image" class="w-20 h-16 object-cover rounded">
                            @else
                            <span class="text-gray-400">No Image</span>
                            @endif
                        </td>

                        <!-- Name -->
                        <td class="py-2 px-4 font-medium">{{ $profile->name }}</td>

                        <!-- Designation -->
                        <td class="py-2 px-4">{{ $profile->designation }}</td>

                        <!-- Short Description -->
                        <td class="py-2 px-4" title="{{ $profile->short_description }}">
                            {{ \Illuminate\Support\Str::words($profile->short_description, 3, '...') ?? '-' }}
                        </td>


                        <!-- Full Description -->
                        <td class="py-2 px-4" title="{{ $profile->full_description }}">
                            {{ \Illuminate\Support\Str::words($profile->full_description, 3, '...') ?? '-' }}
                        </td>


                        <!-- Facebook -->
                        <td class="py-2 px-4">
                            @if ($profile->facebook_link)
                            <a href="{{ $profile->facebook_link }}" target="_blank" class="text-indigo-400 hover:underline text-sm">🔗 Visit</a>
                            @else
                            <span class="text-gray-400">N/A</span>
                            @endif
                        </td>

                        <!-- LinkedIn -->
                        <td class="py-2 px-4">
                            @if ($profile->linkedin_link)
                            <a href="{{ $profile->linkedin_link }}" target="_blank" class="text-indigo-400 hover:underline text-sm">🔗 Visit</a>
                            @else
                            <span class="text-gray-400">N/A</span>
                            @endif
                        </td>

                        <!-- Actions -->
                        <td class="py-2 px-4 text-right">
                            <div class="flex justify-end items-center space-x-3">
                                <a href="{{ route('home.show', $profile->id) }}" class="text-purple-400 hover:underline text-sm">View</a>
                                <a href="{{ route('home.edit', $profile->id) }}" class="text-yellow-400 hover:underline text-sm">Edit</a>
                                <form action="{{ route('home.destroy', $profile->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this profile?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline text-sm">Delete</button>
                                </form>
                            </div>
                        </td>

                        <!-- Status -->
                        <td class="py-2 px-4">
                            <form action="{{ route('home.toggleStatus', $profile->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    @if ($profile->status) disabled @endif
                                    class="text-xs px-3 py-1 rounded font-semibold
                                    {{ $profile->status ? 'bg-green-600 text-white cursor-not-allowed' : 'bg-red-600 text-white hover:bg-red-500' }}">
                                    {{ $profile->status ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="py-6 text-center text-gray-400">No profiles found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection