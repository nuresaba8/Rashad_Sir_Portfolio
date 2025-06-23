@extends('layouts.sidebar')

@section('content')
<section class="pt-0 py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold bg-gradient-to-r from-green-400 to-blue-400 text-transparent bg-clip-text">
                Edit Contact Information
            </h2>
            <div class="flex gap-3">
                <a href="{{ route('contact.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                    ← Back to List
                </a>
            </div>
        </div>

        <form action="{{ route('contact.update') }}" method="POST" class="space-y-6 bg-slate-800 p-6 rounded-xl">
            @csrf

            <div>
                <label class="block text-white mb-2" for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}" class="w-full bg-slate-700 text-white p-3 rounded" required>
            </div>

            <div>
                <label class="block text-white mb-2" for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}" class="w-full bg-slate-700 text-white p-3 rounded" required>
            </div>

            <div>
                <label class="block text-white mb-2" for="facebook">Facebook URL</label>
                <input type="url" id="facebook" name="facebook" value="{{ old('facebook', $contact->facebook) }}" class="w-full bg-slate-700 text-white p-3 rounded">
            </div>

            <div>
                <label class="block text-white mb-2" for="linkedin">LinkedIn URL</label>
                <input type="url" id="linkedin" name="linkedin" value="{{ old('linkedin', $contact->linkedin) }}" class="w-full bg-slate-700 text-white p-3 rounded">
            </div>

            <button type="submit" class="bg-indigo-600 text-white py-3 px-6 rounded hover:bg-indigo-500 transition">💾 Update Contact</button>
        </form>
    </div>
</section>
@endsection
