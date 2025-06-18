@extends('layouts.app')

@section('content')

<!-- Featured Projects Section -->
<section id="projects" class="pt-28 py-20 bg-slate-900">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient">Contribution To BASIS</span>
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
                        <img src="{{ url('images/Convener of BASIS Outsourcing Award.jpg') }}" alt="E-commerce Platform"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Convener of BASIS Outsourcing Award 2021 &
                            2020</h3>
                        <p class="text-gray-400 mb-4">Rashad Kabir is the convenor of BASIS Outsoucing Award 2021.
                            BASIS Outsoucing award is the most
                            prestigious award for the outsoucing professionals and companies. In the year 2021, 100
                            awards will
                            be given in different catagory including company and individual.</p>

                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="project-card group" data-category="mobile">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Convener of Japan IT Week 2018 and 2019.jpg') }}" alt="Fitness Tracking App"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Convener of Japan IT Week 2018 and 2019
                        </h3>
                        <p class="text-gray-400 mb-4">Every year BASIS is participating in Japan IT Week since 2013,
                            which is the most prestigious ICT
                            fair of Japan. Rashad was the convenor of the BASIS delegates team in the year 2018 and
                            2019.</p>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Organizer of BASIS Soft Expo 2017,2018 and 2019.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Organizer of BASIS Soft Expo 2017,2018 and
                            2019</h3>
                        <p class="text-gray-400 mb-4">Rashad has worked very promptly in organizing the BASIS
                            Softexpo 2017 , 2018 and 2019. He has
                            organized multiple seminars in those events.</p>
                    </div>

                </div>
            </div>

            <!-- Project Card 4 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Working on the SOP Guideline and Operation of Cash Incentive procedure.jpg') }}"
                            alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Working on the SOP Guideline and Operation
                            of Cash Incentive procedure</h3>
                        <p class="text-gray-400 mb-4">From June 2018, BASIS companies are getting 10% cash incentive
                            for the IT and ITES export. Till now
                            more than 285+ companies have earned 300+ CR BDT as cash incentive. Rashad is working
                            closely to
                            formulate SOP for the cash incentive procedures, doing different meetings with
                            Bangladesh Bank and
                            other relevant ministry to make the process smoother.</p>

                    </div>
                </div>
            </div>

            <!-- Project Card 4 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Convener of Japan IT Week 2018 and 20192.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Convener of Japan IT Week 2018 and 2019
                        </h3>
                        <p class="text-gray-400 mb-4">Every year BASIS is participating in Japan IT Week since 2013,
                            which is the most prestigious ICT
                            fair of Japan. Rashad was the convenor of the BASIS delegates team in the year 2018 and
                            2019.</p>
                    </div>
                </div>
            </div>

            <!-- Project Card 5 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Organizer of BASIS Soft Expo 2017,2018 and 20193.jpg') }}"
                            alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Organizer of BASIS Soft Expo 2017,2018 and
                            2019</h3>
                        <p class="text-gray-400 mb-4">Rashad has worked very promptly in organizing the BASIS
                            Softexpo 2017 , 2018 and 2019. He has
                            organized multiple seminars in those events.</p>
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