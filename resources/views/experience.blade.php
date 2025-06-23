@extends('layouts.app')

@section('content')

<section id="testimonials" class="pt-28 py-20 bg-slate-900">
    <!-- Background Elements -->
    <div
        class="absolute top-0 right-0 w-64 h-64 bg-indigo-600/20 rounded-full blur-3xl -translate-y-1/2">
    </div>
    <div
        class="absolute bottom-0 left-0 w-80 h-80 bg-purple-600/10 rounded-full blur-3xl translate-y-1/2">
    </div>

    <div class="container mx-auto px-4 md:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
                Professional <span class="text-gradient">Experience</span>
            </h2>
        </div>
        <!-- Experience Grid -->
        <div class="grid gap-10 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($experiences as $experience)
            <div
                class="bg-slate-800/60 backdrop-blur p-8 rounded-3xl border border-indigo-500/30 transition-transform hover:scale-[1.02]">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-30 h-20 overflow-hidden border-2 border-indigo-500 shadow-lg rounded-xl">
                        <img src="{{ asset($experience->image) }}" alt="{{ $experience->title }}" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-white">{{ $experience->title }}</h4>
                        <p class="text-sm text-gray-400">
                            {{ $experience->organization }}<br>
                            {{ $experience->duration }}
                        </p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    {{ $experience->description }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection