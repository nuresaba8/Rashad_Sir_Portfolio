@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Sticky Header -->
        <div class="sticky top-0 bg-slate-900 z-50 py-4 mb-6">
            <div class="flex justify-between items-center">
                <h2 class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-green-400 to-blue-400 text-transparent bg-clip-text">
                    Contact Information
                </h2>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact.edit') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                        ✏️ Edit
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Info Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-slate-800 text-white rounded-lg">
                <thead class="bg-slate-700 text-sm uppercase text-left">
                    <tr>
                        <th class="py-3 px-4 w-1/5">Email</th>
                        <th class="py-3 px-4 w-1/5">Phone</th>
                        <th class="py-3 px-4 w-1/5">Facebook</th>
                        <th class="py-3 px-4 w-1/5">LinkedIn</th>
                        <th class="py-3 px-4 w-1/5">Last Updated</th>
                        <th class="py-3 px-4 w-1/5">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-slate-700 hover:bg-slate-700">
                        <td class="py-3 px-4 w-1/5 break-words">{{ $contact->email }}</td>
                        <td class="py-3 px-4 w-1/5 break-words">{{ $contact->phone }}</td>
                        <td class="py-3 px-4 w-1/5">
                            <a href="{{ $contact->facebook }}" class="text-indigo-400 hover:underline" target="_blank">Facebook</a>
                        </td>
                        <td class="py-3 px-4 w-1/5">
                            <a href="{{ $contact->linkedin }}" class="text-indigo-400 hover:underline" target="_blank">LinkedIn</a>
                        </td>
                        <td class="py-3 px-4 w-1/5">{{ $contact->updated_at->diffForHumans() }}</td>
                        <td class="py-2 px-4 text-right">
                            <div class="flex justify-end items-center space-x-3">
                                <a href="{{ route('contact.show') }}" class="text-purple-400 hover:underline text-sm">View</a>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</section>
@endsection