@extends('layouts.app')

@section('content')

<!-- Featured Projects Section -->
<section id="projects" class="pt-28 py-20 bg-slate-900">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient">International</span>
            </h2>
        </div>
        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($internationals as $project)
            <div class="project-card group" data-category="{{ $project->category }}">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url($project->image) }}" alt="{{ $project->title }}"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60"></div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">{{ $project->title }}</h3>
                        <p class="text-gray-400 mb-4">{{ $project->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <script>
            // Project Filtering
            document.addEventListener('DOMContentLoaded', function() {
                const filterBtns = document.querySelectorAll('.filter-btn');
                const projectCards = document.querySelectorAll('.project-card');

                filterBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        // Update active button
                        filterBtns.forEach(b => {
                            b.classList.remove('active', 'bg-indigo-600', 'text-white');
                            b.classList.add('bg-slate-800', 'text-gray-300', 'hover:bg-indigo-600/20', 'hover:text-white', 'border', 'border-indigo-500/30');
                        });

                        btn.classList.add('active', 'bg-indigo-600', 'text-white');
                        btn.classList.remove('bg-slate-800', 'text-gray-300', 'hover:bg-indigo-600/20', 'hover:text-white', 'border', 'border-indigo-500/30');

                        const filter = btn.getAttribute('data-filter');

                        // Filter projects
                        projectCards.forEach(card => {
                            if (filter === 'all' || card.getAttribute('data-category') === filter) {
                                card.style.display = 'block';
                                // Add animation
                                card.classList.add('animate-fadeIn');
                                setTimeout(() => {
                                    card.classList.remove('animate-fadeIn');
                                }, 500);
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });
                });

                // Add CSS animation
                const styleElement = document.createElement('style');
                styleElement.textContent = `
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(20px); }
                    to { opacity: 1; transform: translateY(0); }
                }
                .animate-fadeIn {
                    animation: fadeIn 0.5s ease forwards;
                }
            `;
                document.head.appendChild(styleElement);
            });
        </script>
</section>


@endsection