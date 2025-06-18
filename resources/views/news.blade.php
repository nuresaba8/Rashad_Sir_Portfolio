@extends('layouts.app')

@section('content')

<!-- Featured Projects Section -->
<section id="news-coverage" class="pt-28 py-20 bg-slate-900">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient">News Coverage</span>
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
                        <img src="{{ url('images/Freelancers to get 4pc.jpg') }}" alt="Freelancers Incentive"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Freelancers to get 4pc incentive for
                            software export</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>There is good news for about
                            six lakh freelancers in the country as they now will
                            get a 4 per cent incentive against export of software or IT-enabled services.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/economy/banks/news/freelancers-get-4pc-incentive-software-export-2950991?fbclid=IwAR1AcKGp2FI9Juo3PieoelAPTTgWD10scdGgKJCmBSbmuKhdxrl4JCseJEo"
                            target="_blank"
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
                        <img src="{{ url('images/Computer services export crosses.jpg') }}" alt="Computer Services Export"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Computer services export crosses $300m
                            BASIS says actual amount is much higher</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>Computer services export
                            from Bangladesh has crossed the $300-million mark as the
                            coronavirus pandemic turbocharged the global demand for data processing,
                            hosting, and consultancy services.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/economy/news/computer-services-export-crosses-300m-basis-says-actual-amount-much-higher-2209121?fbclid=IwAR3Xp-eAZuZ6Has2oz0X8rNRZstD8OTsQmcUJlNWQLbFsdccC9-VlR6AHDc"
                            target="_blank"
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
                        <img src="{{ url('images/BASIS launches seventh edition of outsourcing award.jpg') }}"
                            alt="BASIS Outsourcing Award"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">BASIS launches seventh edition of
                            outsourcing award</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>The seventh edition of BASIS
                            Outsourcing Award was launched yesterday aiming at
                            bringing more youths into freelancing and creating skilled manpower to achieve a
                            $5 billion export target from software, IT-enabled services and digital devices
                            by 2025.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/organisation-news/news/basis-launches-seventh-edition-outsourcing-award-2208181?fbclid=IwAR1ksIkq25_tNH6vUewoRNLtLpf6TOwG_ynV8XHtqmXLn9SOpCSSfCBHr1w"
                            target="_blank"
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
                        <img src="{{ url('images/7th time for basis.jpg') }}" alt="BASIS Outsourcing Award 2021"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">সপ্তমবারের মতো শুরু হচ্ছে বেসিস আউটসোর্সিং
                            অ্যাওয়ার্ড</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>দেশে আউটসোর্সিং নিয়ে কাজ করা
                            ব্যক্তি ও প্রতিষ্ঠানকে স্বীকৃতি দিতে বাংলাদেশ
                            অ্যাসোসিয়েশন অব সফটওয়্যার অ্যান্ড ইনফরমেশন সার্ভিসেস (বেসিস) আউটসোর্সিং
                            অ্যাওয়ার্ড ২০২১ শুরু করতে যাচ্ছে। আজ বুধবার রাজধানীর কারওয়ান বাজারে বেসিস
                            কার্যালয়ে বেসিস আউটসোর্সিং অ্যাওয়ার্ড ২০২১–এর বিষয়ে এক সংবাদ সম্মেলন হয়। ব্যাংক
                            এশিয়া ও মাস্টারকার্ডের সহযোগিতায় এ পুরস্কার দেবে বেসিস।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.prothomalo.com/education/science-tech/%E0%A6%B8%E0%A6%AA%E0%A7%8D%E0%A6%A4%E0%A6%AE%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%87%E0%A6%B0-%E0%A6%AE%E0%A6%A4%E0%A7%8B-%E0%A6%B6%E0%A7%81%E0%A6%B0%E0%A7%81-%E0%A6%B9%E0%A6%9A%E0%A7%8D%E0%A6%9B%E0%A7%87-%E0%A6%AC%E0%A7%87%E0%A6%B8%E0%A6%BF%E0%A6%B8-%E0%A6%86%E0%A6%89%E0%A6%9F%E0%A6%B8%E0%A7%8B%E0%A6%B0%E0%A7%8D%E0%A6%B8%E0%A6%BF%E0%A6%82-%E0%A6%85%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%93%E0%A7%9F%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%A1?fbclid=IwAR16SdyO6ivPC0SYxYsRQVkCVTCpcfHozuYhQcPLgTFxR4AoKyzHWGcE2D4"
                            target="_blank"
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
                        <img src="{{ url('images/Japanese invester.jpg') }}" alt="Japanese Investors"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">জাপানি বিনিয়োগকারীদের জন্য গন্তব্যস্থল
                            বাংলাদেশ আইসিটি</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>বাংলাদেশের দ্রুতগতির
                            আইটি/আইটিইএস সেক্টর জাপানি আইসিটি উদ্যোক্তা এবং
                            বিনিয়োগকারীদের জন্য নতুন সম্ভাবনার দ্বার খুলে দিতে প্রস্তুত। জাপানি
                            বিনিয়োগকারীরা আসিয়ান দেশগুলোতে বিনিয়োগ করলে জাপানের সরকার থেকে যেভাবে আর্থিক এবং
                            অনার্থিক প্রণোদনা পেয়ে থাকেন, সেই পদ্ধতি অনুসরণ করে জাপানি আইসিটি উদ্যোক্তারা
                            প্রণোদনাপ্রাপ্ত হলে বাংলাদেশের তথ্যপ্রযুক্তি ও পরিষেবা খাতে জাপানি বিনিয়োগ
                            উল্লেখযোগ্যভাবে বৃদ্ধি পাবে। সম্প্রতি জাপান এক্সটারনাল ট্রেড অর্গানাইজেশনের
                            সঙ্গে বেসিসের আয়োজিত ওয়েবিনারে এ মন্তব্য করেন বেসিসের জ্যেষ্ঠ সহ-সভাপতি ফারহানা
                            এ রহমান।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.jugantor.com/todays-paper/it-world/472105/%E0%A6%9C%E0%A6%BE%E0%A6%AA%E0%A6%BE%E0%A6%A8%E0%A6%BF-%E0%A6%AC%E0%A6%BF%E0%A6%A8%E0%A6%BF%E0%A7%9F%E0%A7%8B%E0%A6%97%E0%A6%95%E0%A6%BE%E0%A6%B0%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0-%E0%A6%9C%E0%A6%A8%E0%A7%8D%E0%A6%AF-%E0%A6%97%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A6%B2-%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6-%E0%A6%86%E0%A6%87%E0%A6%B8%E0%A6%BF%E0%A6%9F%E0%A6%BF?fbclid=IwAR0dTCaUV8d36w9nMB7-fSwbJmm_mim8Mg4tmFJq_wIVwuqLjvuFhH0ut5I"
                            target="_blank"
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
                        <img src="{{ url('images/online marketplace making.jpg') }}" alt="Online Marketplace"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">অনলাইন মার্কেটপ্লেস তৈরির জন্য ড্রিম ৭১–এর
                            সঙ্গে বিসিকের চুক্তি</h3>
                        <p class="text-gray-400 mb-4">News 24<br>Jan 26, 2020<br>অনলাইন মার্কেটিং প্ল্যাটফর্ম তৈরির
                            লক্ষ্যে পরামর্শক সংস্থা ড্রিম ৭১ বাংলাদেশ
                            লিমিটেডের সঙ্গে চুক্তি করেছে বাংলাদেশ ক্ষুদ্র ও কুটির শিল্প করপোরেশন (বিসিক)। এই
                            অনলাইন মার্কেটিং প্ল্যাটফর্মে সারা দেশের ক্ষুদ্র, কুটির ও মাঝারি শিল্প
                            উদ্যোক্তারা তাঁদের উৎপাদিত পণ্য বিপণনের সুযোগ পাবেন।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.prothomalo.com/business/corporate/%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8-%E0%A6%AE%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%95%E0%A7%87%E0%A6%9F%E0%A6%AA%E0%A7%8D%E0%A6%B2%E0%A7%87%E0%A6%B8-%E0%A6%A4%E0%A7%88%E0%A6%B0%E0%A6%BF%E0%A6%B0-%E0%A6%9C%E0%A6%A8%E0%A7%8D%E0%A6%AF-%E0%A6%A1%E0%A7%8D%E0%A6%B0%E0%A6%BF%E0%A6%AE-%E0%A7%AD%E0%A7%A7%E0%A6%8F%E0%A6%B0-%E0%A6%B8%E0%A6%99%E0%A7%8D%E0%A6%97%E0%A7%87-%E0%A6%AC%E0%A6%BF%E0%A6%B8%E0%A6%BF%E0%A6%95%E0%A7%87%E0%A6%B0-%E0%A6%9A%E0%A7%81%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A6%BF?fbclid=IwAR0kHElFWDfagIrqEkHCW3rYm7O7cUpPpQGXuulkmn3SYqw9Vc5GquzXc7Q"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 7 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Bangladesh ICT sector a.jpg') }}" alt="ICT Sector for Japanese Investors"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Bangladesh ICT sector a rewarding
                            destination for Japanese investors, entrepreneurs</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>Highlighting Bangladesh ICT
                            sector as a rewarding destination for Japanese
                            investors and entrepreneurs, Bangladesh Association of Software and Information
                            Services (BASIS) Senior Vice President Farhana A Rahman said that the sector is
                            ready to offer to the Japanese ICT entrepreneurs and investors.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.tbsnews.net/tech/bangladesh-ict-sector-rewarding-destination-japanese-investors-entrepreneurs-309523"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 8 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Computer services export on the rise.jpg') }}" alt="Computer Services Export Rise"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Computer services export on the rise</h3>
                        <p class="text-gray-400 mb-4">News 24<br>Jan 26, 2020<br>Computer services export from
                            Bangladesh is rising in sync with global demand for
                            data processing, hosting and consultancy services as many people are working
                            from home while companies are outsourcing amidst the lingering coronavirus
                            pandemic.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/export/news/computer-services-export-the-rise-2148806?fbclid=IwAR2TQt5ODUIL7mzOn-RkN_xCmJv_85wFVov6K4OiGpBffSlmusfW-g8b6Gk"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 9 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Tech heroes triumph.jpg') }}" alt="Tech Heroes"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Tech heroes triumph in the time of
                            pandemic</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>Five firms and two
                            individuals were
                            awarded at the 5th The Daily Star ICT Awards yesterday for elevating the industry to a
                            new height defying all odds and even distressing times like the coronavirus pandemic,
                            creating a solid footing and establishing a footprint in global markets.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/dream71-help-bhutan-digitalise-citizen-service-1858990?fbclid=IwAR1kSF4orvLPJHQqCQacK_H0P-YGkUs5rNnYhA4lUFzP0mMkMg55rHYSDxY"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 10 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/bangladesh bhutan making.jpg') }}" alt="Digital Bhutan"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">‘ডিজিটাল ভুটান’ বিনির্মাণ কাজে বাংলাদেশি
                            প্রযুক্তি প্রতিষ্ঠান</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>ডিজিটাল ভুটান বিনির্মাণে
                            কাজের সুযোগ পেয়েছে বাংলাদেশের প্রযুক্তি প্রতিষ্ঠান ড্রিম
                            ৭১। সফটওয়্যার ও তথ্যপ্রযুক্তির বিভিন্ন ক্ষেত্রে কাজ করবে তারা।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/watch/?v=175479543728170" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 11 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Recovery uneven.jpg') }}" alt="Uneven Recovery"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Recovery uneven</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>Businesses are experiencing
                            an uneven recovery from the pandemic-induced slowdown
                            as larger firms are bouncing back strongly thanks to the easy access to the
                            stimulus packages while the smaller ones are still mired in the crisis.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/recovery-uneven-2021517?fbclid=IwAR229naifYNlNrMNef4SDyIRj2T0TtIXBJH80b2A_avgdjZPIz56EIZ5xaM"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 12 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/UNDP Software Make.jpg') }}" alt="UNDP Software"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">ইউএনডিপির সফটওয়্যার বানাবে বাংলাদেশের
                            ড্রিম 71</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>একটি ছোট্ট সুখবর। এর আগে
                            ই�ユএনডিপি বাংলাদেশ এবং ইউএনডিপি পূর্ব তিমুরের সাথে কাজ
                            করার অভিজ্ঞতা হয়েছিলো। এবার কাজ করার সুযোগ হলো ইউএনডিপি তুরস্কের সাথে…</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/adharer.alo/posts/10221145897491703" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 13 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Dreams going beyond borders.jpg') }}" alt="Dreams Beyond Borders"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Dreams going beyond borders</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>Software and mobile
                            application developer Dream71 Bangladesh Ltd has won an
                            international tender to build a mobile application for the parliament of East
                            Timor.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/dreams-going-beyond-borders-2013309?fbclid=IwAR3gw3nB0lrYcbUD5Sy4uY0UOkklzW0LtyPUVcsEkH2683cPjVbXNssr1Uw"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 14 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/East Taimur.jpg') }}" alt="East Timor Parliament Software"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">পূর্ব-তিমুরের পার্লামেন্টের সফটওয়্যার
                            বানাবে বাংলাদেশ</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>বাংলাদেশের শীর্ষস্থানীয়
                            সফটওয়্যার এবং মোবাইল অ্যাপ্লিকেশন নির্মাতা প্রতিষ্ঠান
                            ড্রিম৭১ বাংলাদেশ লিমিটেড আবারো সাফল্য পেয়েছে প্রশান্ত মহাসাগরীয় দেশ পূর্ব
                            তিমুরে। এবার তারা সফটওয়্যার তৈরি করবে পূর্ব তিমুরের পার্লামেন্টের জন্য।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.jugantor.com/tech/374942?fbclid=IwAR0fqtHEIb_-lGEDtfzQBeY1gXuln5l-FM5DZ62E0TdNguJv3iGt9c_rWIs"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 15 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Pandemic buoys demand.jpg') }}" alt="Automation Demand"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Pandemic buoys demand for automation among
                            local businesses</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>The pandemic taught the
                            manufacturing sector that there is no alternative to
                            automation in the days ahead, said Rashad Kabir, managing director of Dream71
                            Bangladesh Ltd.
                            “I see a good prospect for the global IT industry from next year,” he added.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/adharer.alo/posts/10220362886316913" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 16 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Africa a potential market.jpg') }}" alt="Africa Software Market"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Africa a potential market for software
                            companies</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>Africa could be a
                            prospective market for Bangladesh’s software companies as the
                            demand for locally developed IT solutions is increasing gradually in the world’s
                            second-largest continent, entrepreneurs say.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/africa-potential-market-software-companies-1834543?fbclid=IwAR20raDP1ZcaeptI4tOYnRXTcw21ILl3DNe-DZLSYodzhh-WneCzJgO7En0"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 17 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Recognising excellence.jpg') }}" alt="Outsourcing Excellence"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Recognising excellence in outsourcing</h3>
                        <p class="text-gray-400 mb-4">Daily Sun<br>Jan 26, 2020<br>Bangladesh Association of
                            Software and Information Services (BASIS) has
                            recognised the excellence of tech outsourcing works at individual and
                            organizational level recently.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.daily-sun.com/printversion/details/514059/Recognising-excellence-in-outsourcing?fbclid=IwAR1HZ6bjVO9PG4MStRYR5AdHQ-2K5P2a7ErE6_MutUV8XaBsWD0nQXvBzfc"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 18 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/East Taimur Development.jpg') }}" alt="East Timor Software Development"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">পূর্ব তিমুরে সফটওয়্যার ডেভেলপমেন্টের কাজ
                            করবে বাংলাদেশ</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>দেশের শীর্ষস্থানীয়
                            সফটওয়্যার,
                            মোবাইল অ্যাপ্লিকেশন এবং গেম ডেভেলপমেন্ট কোম্পানি ড্রিম৭১ বাংলাদেশ লিমিটেড এবার দক্ষিণ
                            পূর্ব এশিয়ার প্রশান্ত মহাসাগরীয় দ্বীপ রাষ্ট্র পূর্ব তিমুরের সফটওয়্যার ডেভেলপমেন্টের কাজ
                            করবে। পূর্ব তিমুর ইউএনডিপির একটি আন্তর্জাতিক দরপত্রে কারিগরি এবং আর্থিক প্রস্তাবের
                            মূল্যায়নের ভিত্তিতে প্রকল্পটি জিতে ড্রিম৭১।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/dream71-help-bhutan-digitalise-citizen-service-1858990?fbclid=IwAR1kSF4orvLPJHQqCQacK_H0P-YGkUs5rNnYhA4lUFzP0mMkMg55rHYSDxY"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 19 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Japan, the land of rising.jpg') }}" alt="Japan ICT Sector"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Japan, the land of rising promise for
                            Bangladesh's ICT sector</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>Japan — ever at the
                            forefront of science and technology thanks to its culture of
                            intensive mathematics education and reverence for engineers.

                            So it is a marvel then that Bangladesh's fledgeling ICT players are slowly
                            carving a space for themselves in that market over the decade, spearheaded by
                            Mahboob Zaman during his time as the president of Bangladesh Association of
                            Software and Information Services (BASIS).</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/japan-the-land-rising-promise-bangladeshs-ict-sector-1922789?fbclid=IwAR1cQNiOImK_llFCmmz-ggTjS8qKhl2PPbys2dPOr0Vh_jZhHRwMPSXPwEM"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 20 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Dream71 to develop video game.jpg') }}" alt="East Timor Video Game"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Dream71 to develop video game for East
                            Timor children</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>Local software giant Dream71
                            Bangladesh is set to develop two educational
                            videogames for East Timor, a Southeast Asian nation situated in the Pacific, a
                            development that can be viewed as yet another feather in the cap to the
                            country's budding ICT sector.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/dream71-develop-video-game-east-timor-children-1914105?fbclid=IwAR3rPR8y7HYVPPNgJUE17vNdvam4e-gzkvJrF1My2j1ClNDKQn-Oom6Y_yw"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 21 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/ICT Field 5 Billion.jpg') }}" alt="ICT Export Seminar"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">তথ্যপ্রযুক্তিতে ৫ বিলিয়ন আয় নিয়ে সেমিনার
                        </h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>সরকারি তথ্য অনুযায়ী, দেশের
                            সফটওয়্যার ও তথ্যপ্রযুক্তি সেবা খাতে রপ্তানি এক বিলিয়ন ডলার ছাড়িয়েছে। ২০২১ সাল নাগাদ তথ্য
                            প্রযুক্তি খাত থেকে সরকার ৫ বিলিয়ন ডলার আয়ের লক্ষ্যমাত্রা নির্ধারণ করেছে। এ লক্ষ্য কীভাবে
                            অর্জন করা যাবে তা নিয়ে গতকাল শনিবার রাজধানীর বসুন্ধরা আন্তর্জাতিক সম্মেলন কেন্দ্রে এক
                            সেমিনার অনুষ্ঠিত হয়। সেমিনারে দেশের সফটওয়্যার খাতের কয়েকটি বড় প্রতিষ্ঠানের প্রতিনিধিরা
                            উপস্থিত ছিলেন।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.prothomalo.com/education/science-tech/%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%AF%E0%A7%81%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A7%AB-%E0%A6%AC%E0%A6%BF%E0%A6%B2%E0%A6%BF%E0%A7%9F%E0%A6%A8-%E0%A6%86%E0%A7%9F-%E0%A6%A8%E0%A6%BF%E0%A7%9F%E0%A7%87-%E0%A6%B8%E0%A7%87%E0%A6%AE%E0%A6%BF%E0%A6%A8%E0%A6%BE%E0%A6%B0"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 22 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/BASIS Director Says.jpg') }}" alt="Digital Service Tax"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">বেসিসের পরিচালক রাশাদ কবির বলেন, ‘ডিজিটাল
                            সেবার ওপর বাড়তি ট্যাক্স অবশ্যই এই
                            খাতের গতিধারার ওপর নেতিবাচক প্রভাব ফেলবে।’</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>‘আমরা প্রত্যাশা করি সরকার
                            যেন এটি তুলে নেয়। কারণ, করোনার কারণে মানুষ আগের চেয়ে
                            অনেক বেশি ডিজিটাল সেবার ওপর নির্ভর করছে। এই মানুষদের খরচ অনেক বেড়ে যাবে,’ বলেন
                            রাশাদ কবির।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.facebook.com/adharer.alo/posts/10219802375344489" target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 23 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Local App Market.jpg') }}" alt="Local App Market"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">স্থানীয় অ্যাপের বাজারে সম্ভাবনাময় বাংলাদেশ
                        </h3>
                        <p class="text-gray-400 mb-4">প্রথম আলো<br>Jan 26, 2020<br>এখন আর অ্যাপ তৈরি করতে
                            বিদেশনির্ভর থাকতে হচ্ছে না। দেশের অ্যাপ নির্মাতা
                            প্রতিষ্ঠানগুলোর হাতেই তৈরি হচ্ছে জনপ্রিয় সব অ্যাপ। এ খাতের উদ্যোক্তারা বলছেন,
                            স্থানীয় অ্যাপের বাজার এক হাজার কোটি টাকা পার হয়ে গেছে। আগে দেশের বিভিন্ন
                            প্রতিষ্ঠান যেখানে ভারতসহ বাইরের দেশ থেকে অ্যাপ তৈরি করে আনত, সেখানে এখন দেশীয়
                            প্রতিষ্ঠানের ওপরেই ভরসা বাড়ছে। দেশের উদ্যোক্তাদের হাতেই তৈরি হচ্ছে জনপ্রিয়
                            বিভিন্ন অ্যাপ সেবা।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.prothomalo.com/education/science-tech/%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A6%BE%E0%A6%A8%E0%A7%80%E0%A7%9F-%E0%A6%85%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AA%E0%A7%87%E0%A6%B0-%E0%A6%AC%E0%A6%BE%E0%A6%9C%E0%A6%BE%E0%A6%B0%E0%A7%87-%E0%A6%B8%E0%A6%AE%E0%A7%8D%E0%A6%AD%E0%A6%BE%E0%A6%AC%E0%A6%A8%E0%A6%BE%E0%A6%AE%E0%A7%9F-%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 24 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Bhutan PM.jpg') }}" alt="Bhutan PM Meeting"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">ভুটানের প্রধানমন্ত্রীর সঙ্গে ড্রিম৭১ এমডি
                            রাশাদ কবিরের বৈঠক</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>ভুটানের প্রধানমন্ত্রী ডাঃ
                            লোটে শেরিং এর সঙ্গে ড্রিম৭১-এর ব্যবস্থাপনা পরিচালক (এমডি) রাশাদ কবিরের এক বৈঠক অনুষ্ঠিত
                            হয়েছে। আজ বৃহস্পতিবার ভুটানের প্রধানমন্ত্রীর কার্যালয়ে এই বৈঠক অনুষ্ঠিত হয়।</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/dream71-help-bhutan-digitalise-citizen-service-1858990?fbclid=IwAR1kSF4orvLPJHQqCQacK_H0P-YGkUs5rNnYhA4lUFzP0mMkMg55rHYSDxY"
                            target="_blank"
                            class="inline-block text-indigo-400 hover:text-indigo-300 font-medium text-sm transition-colors duration-300 flex items-center gap-1">
                            Open The Article <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 25 -->
            <div class="project-card group" data-category="ui">
                <div
                    class="relative overflow-hidden rounded-xl bg-slate-800 border border-slate-700 h-full transform transition-all duration-500 hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="overflow-hidden relative">
                        <img src="{{ url('images/Dream71 to help Bhutan digitalise.jpg') }}" alt="Bhutan Digitalisation"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Dream71 to help Bhutan digitalise citizen
                            service</h3>
                        <p class="text-gray-400 mb-4">The Daily Star<br>Jan 26, 2020<br>The Bhutanese government has
                            sought the Bangladeshi software development company
                            Dream71’s support in formulating plans for digitalising services, in yet another
                            pat on the back for the country’s information and communications technology
                            industry.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/dream71-help-bhutan-digitalise-citizen-service-1858990?fbclid=IwAR1kSF4orvLPJHQqCQacK_H0P-YGkUs5rNnYhA4lUFzP0mMkMg55rHYSDxY"
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