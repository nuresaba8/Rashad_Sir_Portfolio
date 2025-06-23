@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold bg-gradient-to-r from-green-400 to-blue-400 text-transparent bg-clip-text">
                Contact Details
            </h2>
            <div class="flex gap-3">
                <a href="{{ route('contact.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                    ← Back to List
                </a>
            </div>
        </div>

        <!-- Contact Info Card -->
        <div class="bg-slate-800 text-white rounded-xl shadow-md p-6 space-y-5">
            <div>
                <h3 class="text-sm text-slate-400">Email</h3>
                <p class="text-lg font-semibold break-all">{{ $contact->email }}</p>
            </div>
            <div>
                <h3 class="text-sm text-slate-400">Phone</h3>
                <p class="text-lg font-semibold">{{ $contact->phone }}</p>
            </div>
            <div>
                <h3 class="text-sm text-slate-400">Facebook</h3>
                <a href="{{ $contact->facebook }}" class="text-indigo-400 hover:underline break-all" target="_blank">
                    {{ $contact->facebook }}
                </a>
            </div>
            <div>
                <h3 class="text-sm text-slate-400">LinkedIn</h3>
                <a href="{{ $contact->linkedin }}" class="text-indigo-400 hover:underline break-all" target="_blank">
                    {{ $contact->linkedin }}
                </a>
            </div>
            <div class="text-right text-sm text-slate-400">
                Last updated {{ $contact->updated_at->diffForHumans() }}
            </div>
        </div>
    </div>
</section>
@endsection
