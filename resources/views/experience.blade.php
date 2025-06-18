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
        <!-- Experience Grid (Now 3 per row on large screens) -->
        <div class="grid gap-10 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!-- Experience Card Template -->
            <div
                class="bg-slate-800/60 backdrop-blur p-8 rounded-3xl border border-indigo-500/30 transition-transform hover:scale-[1.02]">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-30 h-20 overflow-hidden border-2 border-indigo-500 shadow-lg rounded-xl">
                        <img src="{{ url('images/ex-1.png') }}" alt="Director" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-white">Former Director</h4>
                        <p class="text-sm text-gray-400">BASIS<br>2020 - 2024</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    Bangladesh Association of Software and Information Services is the national association of
                    Software and ICT companies in Bangladesh. I am now the Director of BASIS and working with the
                    vision of Digital Bangladesh of Bangladesh Govt.
                </p>
            </div>

            <!-- Repeat below cards accordingly with their own data -->
            <div
                class="bg-slate-800/60 backdrop-blur p-8 rounded-3xl border border-indigo-500/30 transition-transform hover:scale-[1.02]">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-30 h-20 overflow-hidden border-2 border-indigo-500 shadow-lg rounded-xl">
                        <img src="{{ url('images/ex-1.png') }}" alt="Co Chairman" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-white">Co Chairman</h4>
                        <p class="text-sm text-gray-400">BASIS<br>May 2018 - Present</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    I work in the International Market Development Committee of BASIS, helping formulate strategy
                    and policy for Bangladesh's 5B USD ICT export goal.
                </p>
            </div>

            <div
                class="bg-slate-800/60 backdrop-blur p-8 rounded-3xl border border-indigo-500/30 transition-transform hover:scale-[1.02]">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-30 h-20 overflow-hidden border-2 border-indigo-500 shadow-lg rounded-xl">
                        <img src="{{ url('images/ex-1.png') }}" alt="Co Chairman" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-white">Convenor</h4>
                        <p class="text-sm text-gray-400">BASIS<br>Jul 2018 - Present</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    I lead the Japan Focus Group at BASIS, building strategic support for enhancing Bangladesh's ICT
                    exports to Japan.
                </p>
            </div>

            <div
                class="bg-slate-800/60 backdrop-blur p-8 rounded-3xl border border-indigo-500/30 transition-transform hover:scale-[1.02]">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-30 h-20 overflow-hidden border-2 border-indigo-500 shadow-lg rounded-xl">
                        <img src="{{ url('images/ex-2.png') }}" alt="Managing Director" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-white">Managing Director</h4>
                        <p class="text-sm text-gray-400">Dream71 Bangladesh Ltd<br>2014 - Present</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    Dream71 is a company driven by youth innovation and ideas. I lead it with a vision to make ideas
                    count and to reward talent and hard work.
                </p>
            </div>

            <div
                class="bg-slate-800/60 backdrop-blur p-8 rounded-3xl border border-indigo-500/30 transition-transform hover:scale-[1.02]">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-30 h-20 overflow-hidden border-2 border-indigo-500 shadow-lg rounded-xl">
                        <img src="{{ url('images/ex-3.png') }}" alt="Director" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-white">Director</h4>
                        <p class="text-sm text-gray-400">BCMC Foundation Ltd<br>2016 - Present</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    BCMC Foundation works on education, health, and IT. As Director, I focus on setting up
                    institutions for engineering, medical, and agricultural education across Bangladesh.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection