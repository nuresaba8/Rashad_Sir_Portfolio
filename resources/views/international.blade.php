@extends('layouts.app')

@section('content')

<!-- Featured Projects Section -->
<section id="projects" class="pt-28 py-20 bg-slate-900">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient">International Coverage</span>
            </h2>
        </div>
        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card 1 -->
            <div class="project-card group" data-category="web">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/bhutan.jpg') }}" alt="E-commerce Platform"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Collaboration with Bhutan Govt</h3>
                        <p class="text-gray-400 mb-4">In January 2020, Rashad visited Bhutan and met with the
                            Honorable Prime Minister of Bhutan Dr Lotey
                            Tshering, ICT Minister Mr Karma Donnen Wangdi and Health Minister Ms Dechen Wangmo
                            there. There he
                            discussed the possibility of ICT collaboration scope between two countries.</p>

                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="project-card group" data-category="mobile">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Convener of Japan IT Week 2018 and 2019.jpg') }}"  alt="Fitness Tracking App"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Collaboration with Maldives</h3>
                        <p class="text-gray-400 mb-4">Rashad Kabir is also working in Maldives market. He has
                            brought the Defence State Minister of Maldives Mr Thoriq Ali Luthufi to Bangladesh
                            during Digital World 2017.</p>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Collaboration with Japan.jpeg') }}"  alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Collaboration with Japan</h3>
                        <p class="text-gray-400 mb-4">Japan is one of the Key markets where Rashad is working. He is
                            also the Director of BASIS Japan
                            Desk which is responsible for the Bilateral ICT relationship between Bangladesh and
                            Japan.</p>
                    </div>

                </div>
            </div>

            <!-- Project Card 4 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Experience in Africa.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Experience in Africa</h3>
                        <p class="text-gray-400 mb-4">Rashad is working in Multiple countries in Africa including
                            Cameroon, Nigeria, Kenya, Mozambique,
                            and others.</p>
                    </div>
                </div>
            </div>

            <!-- Project Card 4 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Collaboration with Turkey.jpg') }}"  alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Collaboration with Turkey</h3>
                        <p class="text-gray-400 mb-4">Rashad has started also working with the Turkey. Already his
                            company Dream71 Bangladesh Ltd has
                            expereince in working with UNDP Turkey. For them they have developed an online
                            aggregrated
                            marketplace for the refugees.</p>
                    </div>
                </div>
            </div>

            <!-- Project Card 5 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Footstep in Timor-Leste.jpg') }}"  alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Footstep in Timor-Leste</h3>
                        <p class="text-gray-400 mb-4">Rashad and Dream71 has also expereince in working with
                            Timor-Leste. Dream71 has developed their
                            parliament software and also developed educational games for the Ministry of Education,
                            Timor-Leste.</p>
                    </div>
                </div>
            </div>

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