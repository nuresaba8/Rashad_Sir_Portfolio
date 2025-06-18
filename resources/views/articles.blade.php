@extends('layouts.app')

@section('content')


<!-- Featured Projects Section -->
<section id="projects" class="pt-28 py-20 bg-slate-900">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient">Published Articles</span>
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
                        <img src="{{ url('images/In Budget ICT Sactor.png') }}" alt="E-commerce Platform"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">বাজেটে আইসিটি খাত: প্রাপ্তি আছে,
                            অপ্রাপ্তিও</h3>
                        <p class="text-gray-400 mb-4">২০২৪-২৫ অর্থবছরের জাতীয় বাজেট বোধ হয় ছিল আইসিটি বা
                            তথ্যপ্রযুক্তি খাতের উদ্যোক্তাদের জন্য এযাবৎকালের সবচেয়ে দুশ্চিন্তার বাজেট। কারণ,
                            দীর্ঘদিন ধরে চলে আসা সরকারের দীর্ঘদিনের কর অব্যাহতির মেয়াদ শেষ হচ্ছে ৩০ জুন। এরই মধ্যে
                            খবর বেরিয়েছিল যে এই কর অব্যাহতি সুবিধা আর বাড়ছে না, কারণ ছিল আইএমএফের চাপ। তিন মাস ধরে
                            এই খাতের নেতারা সরকারের বিভিন্ন পর্যায়ে তদবির শুরু করেন।</p>

                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.prothomalo.com/opinion/column/ehyjvud9zy" target="_blank"
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
                        <img src="{{ url('images/ICT Sactor Probability.png') }}" alt="Fitness Tracking App"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">আইসিটি খাত: অপার সম্ভাবনা, নাকি সম্ভাবনার
                            অপমৃত্যু?</h3>
                        <p class="text-gray-400 mb-4">২০০৮ সালের ১২ ডিসেম্বর প্রধানমন্ত্রী শেখ হাসিনা যখন ডিজিটাল
                            বাংলাদেশের রূপকল্প ঘোষণা করেন, তখন থেকেই দেশের আইসিটি তথা তথ্যপ্রযুক্তি খাতের বড় রকমের
                            একটি বিপ্লব আমরা দেখতে পাই। ২০০৮ সালে দেশের তথ্যপ্রযুক্তি খাত থেকে যেখানে রপ্তানি আয় ছিল
                            মাত্র ছিল ২৬ মিলিয়ন ডলার, সেটি ২০২৪ সালে এসে দাঁড়িয়েছে প্রায় ১ দশমিক ৪ বিলিয়ন ডলারে।
                            ২০০৮ সালের মাত্র ৫০ হাজারের আশপাশে কর্মসংস্থানের জোগান দেওয়া এই ইন্ডাস্ট্রি এখন
                            কর্মসংস্থান দিচ্ছে প্রায় ২০ লাখ মানুষের।</p>

                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.prothomalo.com/opinion/column/8glx4qc9af" target="_blank"
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
                        <img src="{{ url('images/article-ph-1.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">VAT on software: Will it impact the vision
                            of Smart Bangladesh 2041?</h3>
                        <p class="text-gray-400 mb-4">The country’s information technology sector will serve as the
                            main raw material for building a smart Bangladesh. The more the government supports this
                            sector at the policy level, the faster the dream of Smart Bangladesh will be fulfilled
                        </p>

                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.tbsnews.net/thoughts/vat-software-will-it-impact-vision-smart-bangladesh-2041-643026"
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
                        <img src="{{ url('images/article-ph-2.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>

                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">সফটওয়্যারে ভ্যাট আরোপ করে স্মার্ট বাংলাদেশ
                            কীভাবে সম্ভব?</h3>
                        <p class="text-gray-400 mb-4">২০০৮ সালের ১২ ডিসেম্বর প্রধানমন্ত্রী শেখ হাসিনা যখন ডিজিটাল
                            বাংলাদেশের রূপকল্প ঘোষণা করেন, তখন থেকেই এই খাতের বিকাশের জন্য সরকার নানা রকম সুবিধা
                            দিয়ে আসছে। বিগত দশকে এই খাতের উত্তোরত্তর প্রসার দেখে সেটি যে কেউই সহজে বুঝতে পারবে।</p>

                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.prothomalo.com/opinion/column/zwp5q16k5o" target="_blank"
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
                        <img src="{{ url('images/article-ph-3.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Road to Smart Bangladesh</h3>
                        <p class="text-gray-400 mb-4">When Prime Minister Sheikh Hasina declared the vision of
                            "Digital Bangladesh", there were very few people who believed it would eventually come
                            true. But after one decade, it is no longer a dream, it's now a reality.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/economy/news/road-smart-bangladesh-3254121?fbclid=IwAR3v616e0Ck9t9KI4Vf5-Jbh9-R4_DNhGOf3uIs-gLOV5v5e6L3Y0LBcgBU"
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
                        <img src="{{ url('images/article-ph-4.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Impact of artificial intelligence: Threat
                            or new opportunity?</h3>
                        <p class="text-gray-400 mb-4">It is now abundantly evident in the post-Covid era that things
                            will no longer be like before and adoption of technology and embracing automation is a
                            must for the survival in the new normal world.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/impact-artificial-intelligence-threat-or-new-opportunity-3132461"
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
                        <img src="{{ url('images/article-ph-5.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Bangladesh: your next outsourcing
                            destination</h3>
                        <p class="text-gray-400 mb-4">When Prime Minister Sheikh Hasina declared the vision of
                            Digital Bangladesh on December 12, 2008, the ICT industry experienced its rebirth.
                            Later, the government declared December 12 as Digital Bangladesh Day.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/economy/news/bangladesh-your-next-outsourcing-destination-2937426?fbclid=IwAR18zgcNIEs4ukE6TjuVK9ow1_FI0_rIQPbG-PAnR9yJ9V2lIbJGWIJmyEQ"
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
                        <img src="{{ url('images/Can Bangladesh challenge Vietnam in Japan’s ICT.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Can Bangladesh challenge Vietnam in
                            Japan’s ICT market? ( Daily Star Oct 13,2020)</h3>
                        <p class="text-gray-400 mb-4">Starting in the early 90’s, Bangladesh’s IT industry was
                            reborn in 2009, when Prime Minister Sheikh Hasina declared the Digital Bangladesh
                            programme on December 12 in 2008.</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/can-bangladesh-challenge-vietnam-japans-ict-market-1977097"
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
                        <img src="{{ url('images/ICT sector should get ready for the fourth.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">ICT sector should get ready for the fourth
                            industrial revolution (Daily Star March 18,2020)</h3>
                        <p class="text-gray-400 mb-4">There is no doubt that we have completed a long journey
                            towards the implementation of the Digital Bangladesh vision and our industry has also
                            become much more stable while some IT companies are doing really</p>
                    </div>

                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/ict-sector-should-get-ready-the-fourth-industrial-revolution-1882297"
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
                        <img src="{{ url('images/Government support is the crying need.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Government support is the crying need of
                            the ICT sector now ( Daily Star April 19,2020)</h3>
                        <p class="text-gray-400 mb-4">This year started with quite disturbing news for the whole
                            world. The coronavirus pandemic that started from China did not remain confined to that
                            country, but rapidly spread outside, starting from </p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/government-support-the-crying-need-the-ict-sector-now-1894456"
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
                        <img src="{{ url('images/Rise of digital economy can Bangladesh take.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Rise of digital economy: can Bangladesh
                            take the lead? ( Daily Star February 25,2021)</h3>
                        <p class="text-gray-400 mb-4">Every single country in the world has been affected by the
                            storm of Covid-19. Till date, the deadly virus has infected over 100 million people and
                            killed 2.5 million in 219 countries.</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/rise-digital-economy-can-bangladesh-take-the-lead-2050749?fbclid=IwAR3TNL0sbcuZnjb7_bUyxSRUfyl3Wn8MtV1EqZLE56cLaEgt0Mkd5zmNmhg"
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
                        <img src="{{ url('images/Time to welcome new strategy in ICT sector.png') }}" alt="Dashboard UI Kit"
                            class="w-full h-64 object-cover object-center transition-transform duration-700 group-hover:scale-105">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-white">Time to welcome new strategy in ICT sector
                            ( Daily Star June 27,2021)</h3>
                        <p class="text-gray-400 mb-4">The budget declared for 2021-22 financial year is one of the
                            most significant budgets in the history of Bangladesh.

                            Not only because of its importance as the 50th anniversary of Bangladesh, but also the
                            budget is declared at a time when the business and economy is struggling to get back
                            into its normal shape.</p>
                    </div>
                    <!-- View Case Study Button -->
                    <div class="p-6 pt-0">
                        <a href="https://www.thedailystar.net/business/news/time-welcome-new-strategy-ict-sector-2119317?fbclid=IwAR1JkddnLEJPAnkjmy0TSbf-MOkQ1GhIfmkYmd4nBcXQO5cuGXclAxoLNS4"
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