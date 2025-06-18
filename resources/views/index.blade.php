@extends('layouts.app')

@section('content')

    <section id="about" class="relative py-32 bg-slate-950 text-gray-200 overflow-hidden">
        <div class="container mx-auto px-6 md:px-12 xl:px-24">

            <!-- Header -->
            <div class="text-center mb-20" data-aos="fade-down">
                <div class="flex justify-center items-center gap-4 mb-4">
                    <div class="w-10 h-0.5 bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                    <span class="text-sm uppercase tracking-widest font-semibold text-indigo-300">About Rashad
                        Kabir</span>
                    <div class="w-10 h-0.5 bg-gradient-to-r from-purple-500 to-indigo-400"></div>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight text-white relative inline-block">
                    <span
                        class="bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 bg-clip-text text-transparent animate-text-shimmer">
                        A Visionary Tech Leader
                    </span>
                </h2>
            </div>

            <!-- Content Layout with Equal Height Columns -->
            <div class="grid md:grid-cols-2 gap-20">


                <!-- Image Section -->
                <!-- Left Column: Image + Social Icons (Left Aligned) -->
                <div class="flex flex-col items-start gap-6" data-aos="zoom-in-right">

                    <!-- Image Box -->
                    <div class="relative tilt-card group flex items-center h-[500px] md:h-[600px] max-h-[600px] w-full">
                        <div
                            class="absolute -inset-1 rounded-3xl bg-gradient-to-tr from-purple-500 via-indigo-500 to-pink-500 blur-xl opacity-30 group-hover:opacity-60 transition duration-700 group-hover:blur-2xl">
                        </div>
                        <div
                            class="relative p-4 bg-slate-900/60 backdrop-blur-md border border-slate-700 rounded-3xl shadow-2xl h-full w-full flex items-center justify-center">
                            <img src="{{ url('images/man.jpg') }}" alt="Rashad Kabir"
                                class="rounded-2xl object-cover w-full h-full" />
                        </div>
                    </div>


                    <!-- Glowing Aura Social Icons -->
                    <div class="flex gap-5 pl-4">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/adharer.alo" target="_blank"
                            class="group relative w-12 h-12 rounded-full flex items-center justify-center bg-slate-800/40 border border-slate-600 hover:border-blue-500 shadow-lg transition-all duration-500 transform hover:-translate-y-1 hover:scale-110">
                            <!-- Glowing Ring -->
                            <span
                                class="absolute -inset-1 rounded-full bg-gradient-to-tr from-blue-500 via-indigo-400 to-purple-500 opacity-20 blur-md group-hover:opacity-70 transition-all duration-500"></span>
                            <!-- Icon -->
                            <i
                                class="ri-facebook-fill text-white text-xl z-10 group-hover:text-blue-400 transition duration-300"></i>
                        </a>

                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/rashadkabir" target="_blank"
                            class="group relative w-12 h-12 rounded-full flex items-center justify-center bg-slate-800/40 border border-slate-600 hover:border-indigo-400 shadow-lg transition-all duration-500 transform hover:-translate-y-1 hover:scale-110">
                            <!-- Glowing Ring -->
                            <span
                                class="absolute -inset-1 rounded-full bg-gradient-to-tr from-indigo-400 via-blue-500 to-purple-500 opacity-20 blur-md group-hover:opacity-70 transition-all duration-500"></span>
                            <!-- Icon -->
                            <i
                                class="ri-linkedin-fill text-white text-xl z-10 group-hover:text-indigo-300 transition duration-300"></i>
                        </a>
                    </div>

                    <style>
                        @keyframes glowPulse {

                            0%,
                            100% {
                                opacity: 0.2;
                                transform: scale(1);
                            }

                            50% {
                                opacity: 0.6;
                                transform: scale(1.1);
                            }
                        }

                        .group:hover span {
                            animation: glowPulse 1.8s ease-in-out infinite;
                        }
                    </style>

                </div>





                <!-- Text Section -->
                <div class="relative z-10" data-aos="fade-left" data-aos-delay="150">
                    <div id="aboutCard"
                        class="rounded-3xl bg-slate-800/40 backdrop-blur-xl border border-indigo-500/10 p-8 shadow-xl space-y-6 transition-all duration-500 hover:shadow-indigo-500/30">

                        <!-- Collapsible Text Section -->
                        <div id="description"
                            class="text-base text-gray-300 leading-relaxed overflow-hidden transition-[max-height] duration-700 ease-in-out max-h-[600px]">
                            <p class="text-lg">
                                <strong class="text-indigo-300">Rashad Kabir</strong> is one of the leading young ICT
                                Entrepreneurs of Bangladesh. He has contributed a lot to the progression and prosperity
                                to the ICT development of Bangladesh. He has served as the Director of
                                <strong>(Bangladesh
                                    Association of Software and Information Services)</strong> from 2020-2024.
                            </p>
                            <p class="mt-4">
                                Under his leadership BASIS has established BASIS Japan Desk which is the first country
                                based focus desk in the history of ant trade body of Bangladesh. He was also the
                                convenor of <strong>BASIS Outsourcing Award</strong> 2020 and 2021. Right now Rashad is
                                serving as a
                                convener of Digital Economy and IT standing committee of <strong>Dhaka Chamber of
                                    Commerce and
                                    Industry.</strong>
                            </p>
                            <p class="mt-4">
                                Rashad is also working with the strategy planning of 5 Billion
                                Export target
                                from ICT sector set up by Bangladesh Govt.
                                Mr. Rashad started his professional career at the age of 18 by joining as the Director
                                of BCMC Foundation Ltd. At the age of 22, Rashad established his own IT Firm named
                                <strong class="text-purple-300">Dream71 Bangladesh Ltd</strong> which has
                                already turned into one of the leading ICT companies of
                                Bangladesh.
                            </p>
                            <p class="mt-4">


                            </p>

                            <!-- Extended Description (Hidden Initially) -->
                            <div id="extendedText" class="hidden mt-4 space-y-4">
                                <p>
                                    He is the pioneer of the first educational game of Bangladesh. He and his company in
                                    collaboration with Access to Information (A2i) have developed games based on science
                                    books of Classes VI to VIII. In Oct 2015, Mr. Rashad also holds the record to
                                    develop the first Cricket App of Bangladesh which is yet the only App that provides
                                    every content completely in Bangla. In June 2016, Rashad started another tech-start
                                    up named “Pocket Sales 71”, a complete sales force automation tool. Pocket Sales 71
                                    has versions for four different industries - Pharmaceuticals, FMCG, Cargo and
                                    Automotive. Pocket Sales 71 has already kept its footstep in 12+ countries including
                                    Netherlands, UK, Turkey, Kenya, UAE, Nigeria, Korea, Maldives, Cameroom, Timor
                                    Leste,Bhutan and Japan Dream71 has also established a partner company in Tokyo,
                                    Japan named “DreaminPocket”.
                                </p>
                                <p>
                                    The objective of this company is to promote and sell the products of Dream71 in
                                    Japan market and also to grab the offshore development projects. In November 2017,
                                    Rashad also signed an MoU with the Deputy Minister of Defence and National Security
                                    in Maldives H. E. Mr. Thoriq Ali Luthufi and his company “Inove Institute” in
                                    Maldives to take the footstep of Dream71 in Maldives market. Dream71 has already
                                    applied for number of ICT projects with Inove Institue in Maldives. Besides, Dream71
                                    has also two other flagship products named “People Book HR” which is a complete HR
                                    and Payroll solution with Mobile Apps and Retails and POS solution named “DreamPOS”.
                                    These products are also used in a number of countries. In Bangladesh Dream71 is also
                                    working with number of Govt. bodies like A2i, Ministry of ICT, Ministry of Foreign
                                    Affairs, Ministry of Agriculture, Public Works Department, Biman Bangladesh Ltd.
                                    Dhaka WASA, Local Govt Engineering Department (LGED), Ministry of Chittagong Hill
                                    Tracts Affaris, Bangladesh Satelitte Communication Company Ltd, Health Engineering
                                    Department, Ministry of Commerce, BSCIC, Dhaka Wasa, Bangladesh Technical Education
                                    Board, Teletalk Bangladesh Ltd, PKSF, SME Foundation, Department of Shipping,
                                    Department of Public Health Engineering Department, Bangladesh Police etc.
                                </p>
                                <p>
                                    Dream71 has also experience in working with donor agencies like UNDP, World Bank,
                                    ILO and UNICEF. Rashad has also expereince in working with UNDP Bangladesh, UNDP
                                    Turkey, UNDP Colombia and UNDP Timor Leste.
                                    Rashad also visited Bhutan in the January 2020 and met with the Honorable Prime
                                    Minister Dr Lotey Tshering there. There he discussed different collaobration
                                    opportunities in ICT sector between two countries.
                                </p>
                                <p>
                                    Rashad also opened a company named “HSD Dream71 Ltd' registered in Bangladesh, UK
                                    and Cameroon that will responsible for the promotion of Dream71's product in African
                                    market.
                                    Rashad writes regular article in the national dailies like the Prothom Alo, the
                                    Daily Star and the Business Standard. He also appears in different talk show
                                    regularly. The link of the article and the talk shows are available in the 'article'
                                    and 'TV Shows' section of this website respectively.
                                </p>
                            </div>
                        </div>

                        <!-- Toggle Button -->
                        <button id="toggleBtn"
                            class="text-sm text-indigo-400 hover:text-indigo-200 font-medium focus:outline-none transition">
                            Read More
                        </button>

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
                            description.style.maxHeight = "none";  // <-- changed here
                            toggleBtn.textContent = "Read Less";
                        } else {
                            extendedText.classList.add("hidden");
                            description.style.maxHeight = "600px";
                            toggleBtn.textContent = "Read More";
                        }
                    });

                </script>

            </div>
        </div>

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
        }, { threshold: 0.2 });

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