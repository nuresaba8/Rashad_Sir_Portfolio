@extends('layouts.app')

@section('content')

<!-- Featured Projects Section -->
<section id="projects" class="pt-28 py-20 bg-slate-900">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient">TV Shows</span>
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
                        <img src="{{ url('images/coverage-1.png') }}" alt="E-commerce Platform"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">আন্দোলন ঠেকাতে ইন্টারনেট বন্ধের খেসারত
                            দিচ্ছে তথ্য প্রযুক্তি খাত ||</h3>
                        <p class="text-gray-400 mb-4">Ekushey ETV<br>26 Sep, 2024</p>

                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=s4K43kKBhvE" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="project-card group" data-category="mobile">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-2.png') }}" alt="Fitness Tracking App"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">এআই করবে মানুষের কাজ? | Muktobak</h3>
                        <p class="text-gray-400 mb-4">Channel 24<br>19 Jun, 2024</p>

                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=Fb7Ez4A_2CA" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-3.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">বাজেটে প্রাপ্তি-অপ্রাপ্তি: আইসিটি খাত |
                            Business Hour | ব্যবসা বাণিজ্যের সব
                            খবর</h3>
                        <p class="text-gray-400 mb-4">News 24<br>12 Jun 2024</p>

                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=cAOPPoRBmkI" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 4 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-4.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">একুশের রাত || আউটসোর্সিং এর সম্ভবনা ও
                            প্রতিবন্ধকতা</h3>
                        <p class="text-gray-400 mb-4">Ekushey TV<br>03 Apr, 2024</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=W7g3poOuh4o" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 4 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-5.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">একুশের বই আড্ডা || Ekusher Boi Adda ||
                            Ep-18 ||</h3>
                        <p class="text-gray-400 mb-4">Ekushey TV<br>18 Feb, 2024</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=-z8IW-bDPjk" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 5 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-6.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">স্মার্ট অর্থনীতি ২০৪১; আইসিটি সেক্টরের
                            ভূমিকা | Smart Bangladesh |</h3>
                        <p class="text-gray-400 mb-4">Channel 24<br>01 October, 2023</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=dIiAr4PAdng" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 6 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-8.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">ডিপ ফেক প্রযুক্তি: আশীর্বাদ নাকি
                            দুশ্চিন্তা | জানলেই নিরাপদ</h3>
                        <p class="text-gray-400 mb-4">Channel 24<br>01 October, 2023</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=9ATMqgGRs34" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-7.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">রোড টু স্মার্ট বাংলাদেশ | Smart Bangladesh
                            |</h3>
                        <p class="text-gray-400 mb-4">News 24<br>30 Sep, 2023</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=Tmf8UoUGOSM" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-9.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">একুশের রাত || সাইবার হামলায় বিপর্যস্ত সেবা
                        </h3>
                        <p class="text-gray-400 mb-4">Ekushey TV<br>19 Aug, 2023</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=MkPSDzQOdpA" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-10.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">বিজনেস আওয়ার | Business Hour | ব্যবসা
                            বাণিজ্যের সব খবর</h3>
                        <p class="text-gray-400 mb-4">News 24<br>07 June, 2023</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=XtNtY8daB8o" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-11.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Nitol Tata Table Talk</h3>
                        <p class="text-gray-400 mb-4">Asian TV<br>21 Nov, 2022</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=q3bcM9wauQA" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-12.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Talked at Maasranga Ranga Shokal</h3>
                        <p class="text-gray-400 mb-4">Maasranga Television<br>16 October, 2022</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=315qFICBk48" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-13.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">ডিজিটাল সেবায় অ্যানালগ ভোগান্তি</h3>
                        <p class="text-gray-400 mb-4">ATN<br>12 March, 2022</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=X8uQd_dRacA" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-14.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Discussion on Young Entrepreneur at ICT
                            Sector</h3>
                        <p class="text-gray-400 mb-4">Channel 24<br>06 November, 2021</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=1460108657716608" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-15.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Talks about 5 billion in revenue in the IT
                            sector</h3>
                        <p class="text-gray-400 mb-4">NTV<br>24 December, 2020</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=687581398787956" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-16.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Digital Bangladesh Day 2020</h3>
                        <p class="text-gray-400 mb-4">Channel 24<br>10 December, 2020</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=OUeRspNerTQ" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-17.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Talked with the ATN News about the impact
                            of Covid-19 on the ICT industry.</h3>
                        <p class="text-gray-400 mb-4">ATN<br>14 June, 2020</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=10219821574944467" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-18.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">5 Billion Export Target</h3>
                        <p class="text-gray-400 mb-4">Independent TV<br>18 March, 2020</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=10218950222561202" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Japan IT Week2.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Japan IT Week</h3>
                        <p class="text-gray-400 mb-4">Independent TV<br>2019</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://fb.watch/z-TX8fO8z7/" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-19.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">BASIS Soft Expo 2018</h3>
                        <p class="text-gray-400 mb-4">Somoy TV<br>26 February, 2018</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=10213081184278913" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/coverage-18.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Innovation to Enterpreneurship</h3>
                        <p class="text-gray-400 mb-4">Independent TV<br>19 February, 2018</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://fb.watch/z-THwLljDL/" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/ICT Budget Discussion.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">ICT Budget Discussion</h3>
                        <p class="text-gray-400 mb-4">Independent TV<br>2018</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=10213903599998792" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Japan IT Week2.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Japan IT Week</h3>
                        <p class="text-gray-400 mb-4">Independent TV<br>2018</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/story.php?story_fbid=10213694018759392&id=1072657225&_rdr"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/4th Industrial Revolution.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">4th Industrial Revolution</h3>
                        <p class="text-gray-400 mb-4">Independent TV<br>2018</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=10215196713365818" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Digital World 2017.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Digital World 2017</h3>
                        <p class="text-gray-400 mb-4">News 24<br>06 Dec, 2017</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Digital World 20172.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Digital World 2017</h3>
                        <p class="text-gray-400 mb-4">Independent TV<br>03 December, 2017</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=mZiW37PGXiA" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Discussion on ICT Sector.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Discussion on ICT Sector</h3>
                        <p class="text-gray-400 mb-4">Channel 24<br>27 July, 2017</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.youtube.com/watch?v=1FQlo7QUfxE" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/ICT Sector Opportunities and Challenges3.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">ICT Sector : Opportunities and Challenges
                        </h3>
                        <p class="text-gray-400 mb-4">News 24<br>06 July, 2017</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Learning and Earning.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Learning and Earning</h3>
                        <p class="text-gray-400 mb-4">Independent TV<br>16 May, 2017</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=10210757719553747" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/ICT Sector Opportunities and Challenges2.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">ICT Sector : Opportunities and Challenges
                        </h3>
                        <p class="text-gray-400 mb-4">Ekattor TV<br>04 Aug, 2016</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=10208306611837586" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/ICT Sector Opportunities and Challenges.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">ICT Sector : Opportunities and Challenges
                        </h3>
                        <p class="text-gray-400 mb-4">Channel 24<br>10 June, 2016</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=10207895230913320" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Discussion on Bigganer Rajje Game.jpg') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Discussion on Bigganer Rajje Game</h3>
                        <p class="text-gray-400 mb-4">Independent TV<br>25 April, 2016</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/dream71.bangladesh/videos/572241686278345/"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
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