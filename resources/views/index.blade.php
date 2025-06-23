@extends('layouts.app')

@section('content')

<section id="about" class="relative py-32 bg-slate-950 text-gray-200 overflow-hidden">
    <div class="container mx-auto px-6 md:px-12 xl:px-24">

        <!-- Header -->
        <div class="text-center mb-20" data-aos="fade-down">
            <div class="flex justify-center items-center gap-4 mb-4">
                <div class="w-10 h-0.5 bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                <span class="text-sm uppercase tracking-widest font-semibold text-indigo-300">
                    About {{ $profile->name }}
                </span>
                <div class="w-10 h-0.5 bg-gradient-to-r from-purple-500 to-indigo-400"></div>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight text-white relative inline-block">
                <span class="bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 bg-clip-text text-transparent animate-text-shimmer">
                    {{ $profile->designation }}
                </span>
            </h2>
        </div>

        <!-- Content Layout -->
        <div class="grid md:grid-cols-2 gap-20">
            <!-- Image Section -->
            <div class="flex flex-col items-start gap-6" data-aos="zoom-in-right">
                <div class="relative tilt-card group flex items-center h-[500px] md:h-[600px] max-h-[600px] w-full">
                    <div class="absolute -inset-1 rounded-3xl bg-gradient-to-tr from-purple-500 via-indigo-500 to-pink-500 blur-xl opacity-30 group-hover:opacity-60 transition duration-700 group-hover:blur-2xl"></div>
                    <div class="relative p-4 bg-slate-900/60 backdrop-blur-md border border-slate-700 rounded-3xl shadow-2xl h-full w-full flex items-center justify-center">
                        <img src="{{ asset($profile->image_path) }}" alt="{{ $profile->name }}" class="rounded-2xl object-cover w-full h-full" />
                    </div>
                </div>

                <!-- Social Icons -->
                <div class="flex gap-5 pl-4">
                    @if($profile->facebook_link)
                    <a href="{{ $profile->facebook_link }}" target="_blank"
                        class="group relative w-12 h-12 rounded-full flex items-center justify-center bg-slate-800/40 border border-slate-600 hover:border-blue-500 shadow-lg transition-all duration-500 transform hover:-translate-y-1 hover:scale-110">
                        <span class="absolute -inset-1 rounded-full bg-gradient-to-tr from-blue-500 via-indigo-400 to-purple-500 opacity-20 blur-md group-hover:opacity-70 transition-all duration-500"></span>
                        <i class="ri-facebook-fill text-white text-xl z-10 group-hover:text-blue-400 transition duration-300"></i>
                    </a>
                    @endif

                    @if($profile->linkedin_link)
                    <a href="{{ $profile->linkedin_link }}" target="_blank"
                        class="group relative w-12 h-12 rounded-full flex items-center justify-center bg-slate-800/40 border border-slate-600 hover:border-indigo-400 shadow-lg transition-all duration-500 transform hover:-translate-y-1 hover:scale-110">
                        <span class="absolute -inset-1 rounded-full bg-gradient-to-tr from-indigo-400 via-blue-500 to-purple-500 opacity-20 blur-md group-hover:opacity-70 transition-all duration-500"></span>
                        <i class="ri-linkedin-fill text-white text-xl z-10 group-hover:text-indigo-300 transition duration-300"></i>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Text Section -->
            <div class="relative z-10" data-aos="fade-left" data-aos-delay="150">
                <div id="aboutCard"
                    class="rounded-3xl bg-slate-800/40 backdrop-blur-xl border border-indigo-500/10 p-8 shadow-xl space-y-6 transition-all duration-500 hover:shadow-indigo-500/30">

                    <!-- Short Description -->
                    <div id="description"
                        class="text-gray-300 leading-relaxed overflow-hidden transition-[max-height] duration-700 ease-in-out max-h-[600px]">
                        @foreach(preg_split('/\r\n\r\n|\n\n|\r\r/', $profile->short_description) as $index => $para)
                        @php
                        // Escape text first to prevent XSS, then replace keywords with highlighted strong tags
                        $escaped = e($para);

                        // Replace keywords with strong tags + Tailwind classes
                        $formatted = str_replace([
                        'Rashad Kabir',
                        '(Bangladesh Association of Software and Information Services)',
                        'BASIS Outsourcing Award',
                        'Dhaka Chamber of Commerce and Industry',
                        'Dream71 Bangladesh Ltd'
                        ], [
                        '<strong class="text-indigo-300">Rashad Kabir</strong>',
                        '<strong>(Bangladesh Association of Software and Information Services)</strong>',
                        '<strong>BASIS Outsourcing Award</strong>',
                        '<strong>Dhaka Chamber of Commerce and Industry</strong>',
                        '<strong class="text-purple-300">Dream71 Bangladesh Ltd</strong>'
                        ], $escaped);

                        // Decide paragraph class based on index
                        if ($index === 0) {
                        $paraClass = 'text-lg mt-4';
                        } elseif ($index === 1 || $index === 2) {
                        $paraClass = 'mt-4';
                        } else {
                        $paraClass = 'mt-4';
                        }
                        @endphp
                        <p class="{{ $paraClass }}">{!! $formatted !!}</p>
                        @endforeach
                    </div>


                    <!-- Full description can be handled similarly -->
                    <div id="extendedText" class="hidden mt-4 space-y-4">
                        @foreach(preg_split('/\r\n\r\n|\n\n|\r\r/', $profile->full_description) as $para)
                        @php
                        $escaped = e($para);
                        $formatted = str_replace([
                        'Rashad Kabir',
                        '(Bangladesh Association of Software and Information Services)',
                        'BASIS Outsourcing Award',
                        'Dhaka Chamber of Commerce and Industry',
                        'Dream71 Bangladesh Ltd'
                        ], [
                        '<strong class="text-indigo-300">Rashad Kabir</strong>',
                        '<strong>(Bangladesh Association of Software and Information Services)</strong>',
                        '<strong>BASIS Outsourcing Award</strong>',
                        '<strong>Dhaka Chamber of Commerce and Industry</strong>',
                        '<strong class="text-purple-300">Dream71 Bangladesh Ltd</strong>'
                        ], $escaped);
                        @endphp
                        <p class="mt-4">{!! $formatted !!}</p>
                        @endforeach
                    </div>




                    <!-- Toggle Button -->
                    <button id="toggleBtn"
                        class="text-sm text-indigo-400 hover:text-indigo-200 font-medium focus:outline-none transition">
                        Read More
                    </button>

                </div>
            </div>
        </div>
    </div>

    <script>
        const toggleBtn = document.getElementById("toggleBtn");
        const description = document.getElementById("description");
        const extendedText = document.getElementById("extendedText");

        let expanded = false;

        toggleBtn.addEventListener("click", () => {
            expanded = !expanded;
            if (expanded) {
                extendedText.classList.remove("hidden");
                description.style.maxHeight = "none";
                toggleBtn.textContent = "Read Less";
            } else {
                extendedText.classList.add("hidden");
                description.style.maxHeight = "600px";
                toggleBtn.textContent = "Read More";
            }
        });
    </script>



    <!-- Floating Glowing Blobs -->
    <div
        class="absolute -z-10 top-1/3 left-1/5 w-80 h-80 bg-purple-500/10 rounded-full blur-[100px] animate-pulse-slow">
    </div>
    <div
        class="absolute -z-10 bottom-1/4 right-1/4 w-96 h-96 bg-pink-500/10 rounded-full blur-[120px] animate-pulse-slow">
    </div>

    <style>
        .animate-text-shimmer {
            background-size: 200% auto;
            animation: shimmer 3s linear infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: 0% center;
            }

            100% {
                background-position: 200% center;
            }
        }

        .animate-pulse-slow {
            animation: pulse-slow 6s ease-in-out infinite;
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.3;
                transform: scale(1);
            }

            50% {
                opacity: 0.6;
                transform: scale(1.1);
            }
        }
    </style>
</section>



<script>
    // Animation for About Section
    const aboutSection = document.getElementById('about');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate skill items sequentially
                const skillItems = document.querySelectorAll('.skill-item');
                skillItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('scale-in');
                    }, 100 * index);
                });

                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    if (aboutSection) {
        observer.observe(aboutSection);
    }

    // Add animation styles
    const styleElement = document.createElement('style');
    styleElement.textContent = `
        .skill-item {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease-out;
        }
        
        .skill-item.scale-in {
            opacity: 1;
            transform: translateY(0);
        }
    `;
</script>


@endsection