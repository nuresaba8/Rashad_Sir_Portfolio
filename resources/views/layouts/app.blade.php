<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rashad Kabir</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Remix Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Favicon (32x32 recommended) -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/man.jpg') }}">
    <!-- Optional: For Apple Touch Devices -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/man.jpg') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0f172a;
            color: #f8fafc;
        }

        .hero-gradient {
            background: linear-gradient(120deg, #4f46e5 0%, #818cf8 100%);
        }

        .text-gradient {
            background: linear-gradient(90deg, #e879f9 0%, #38bdf8 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            pointer-events: none;
        }

        .navbar-scrolled {
            background-color: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(8px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .slide-in {
            animation: slideIn 0.5s ease forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">
    <!-- Header/Navbar Section -->
    <header id="navbar"
        class="fixed w-full top-0 left-0 z-50 transition-all duration-300 py-4 backdrop-blur-lg bg-slate-900/80 shadow-lg shadow-black/30 border-b border-white/10">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ url('/') }}"
                    class="flex items-center gap-3 text-2xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text">
                    <img src="{{ url('images/man.jpg') }}" alt="Profile"
                        class="w-9 h-9 rounded-full border-2 border-cyan-400 shadow-md">
                    Rashad Kabir
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-6">
                    <ul class="flex gap-2 items-center">
                        <li>
                            <a href="{{ url('/') }}"
                                class="nav-link flex flex-col justify-center items-center h-[60px] px-4 py-2 rounded-lg font-semibold transition-all duration-300
                      hover:bg-slate-800 hover:ring-2 hover:ring-indigo-500/50 hover:shadow-lg
                      hover:font-bold hover:text-shadow-md text-center">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/experience') }}"
                                class="nav-link flex flex-col justify-center items-center h-[60px] px-4 py-2 rounded-lg font-semibold transition-all duration-300
                      hover:bg-slate-800 hover:ring-2 hover:ring-indigo-500/50 hover:shadow-lg
                      hover:font-bold hover:text-shadow-md text-center">
                                Experience
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/articles') }}"
                                class="nav-link flex flex-col justify-center items-center h-[60px] px-4 py-2 rounded-lg font-semibold transition-all duration-300
                      hover:bg-slate-800 hover:ring-2 hover:ring-indigo-500/50 hover:shadow-lg
                      hover:font-bold hover:text-shadow-md text-center">
                                Articles
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contribution') }}"
                                class="nav-link flex flex-col justify-center items-center h-[60px] px-4 py-2 rounded-lg font-semibold transition-all duration-300
                      hover:bg-slate-800 hover:ring-2 hover:ring-indigo-500/50 hover:shadow-lg
                      hover:font-bold hover:text-shadow-md text-center leading-tight">
                                Contribution<br>To BASIS
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/tv_shows') }}"
                                class="nav-link flex flex-col justify-center items-center h-[60px] px-4 py-2 rounded-lg font-semibold transition-all duration-300
                      hover:bg-slate-800 hover:ring-2 hover:ring-indigo-500/50 hover:shadow-lg
                      hover:font-bold hover:text-shadow-md text-center leading-tight">
                                TV<br>Shows
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/news') }}"
                                class="nav-link flex flex-col justify-center items-center h-[60px] px-4 py-2 rounded-lg font-semibold transition-all duration-300
                      hover:bg-slate-800 hover:ring-2 hover:ring-indigo-500/50 hover:shadow-lg
                      hover:font-bold hover:text-shadow-md text-center">
                                News
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/international') }}"
                                class="nav-link flex flex-col justify-center items-center h-[60px] px-4 py-2 rounded-lg font-semibold transition-all duration-300
                      hover:bg-slate-800 hover:ring-2 hover:ring-indigo-500/50 hover:shadow-lg
                      hover:font-bold hover:text-shadow-md text-center">
                                International
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/awards') }}"
                                class="nav-link flex flex-col justify-center items-center h-[60px] px-4 py-2 rounded-lg font-semibold transition-all duration-300
                      hover:bg-slate-800 hover:ring-2 hover:ring-indigo-500/50 hover:shadow-lg
                      hover:font-bold hover:text-shadow-md text-center">
                                Award
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}"
                                class="nav-link flex flex-col justify-center items-center h-[60px] px-4 py-2 rounded-lg font-semibold transition-all duration-300
                      hover:bg-slate-800 hover:ring-2 hover:ring-indigo-500/50 hover:shadow-lg
                      hover:font-bold hover:text-shadow-md text-center">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>


                <!-- Mobile Menu Button -->
                <button id="menu-btn"
                    class="md:hidden text-white text-3xl transition-transform duration-300 hover:scale-110 hover:text-cyan-400">
                    <i class="ri-menu-line"></i>
                </button>

            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu"
            class="md:hidden absolute top-full left-0 w-full bg-slate-900/95 backdrop-blur-xl border-t border-white/10 hidden animate-slide-down">
            <div class="flex flex-col px-6 py-5 space-y-3 text-center">
                <a href="{{ url('/') }}" class="nav-link-mobile">Home</a>
                <a href="{{ url('/experience') }}" class="nav-link-mobile">Experience</a>
                <a href="{{ url('/articles') }}" class="nav-link-mobile">Articles</a>
                <a href="{{ url('/contribution') }}" class="nav-link-mobile">Contribution To BASIS</a>
                <a href="{{ url('/tv_shows') }}" class="nav-link-mobile">TV Shows</a>
                <a href="{{ url('/news') }}" class="nav-link-mobile">News</a>
                <a href="{{ url('/international') }}" class="nav-link-mobile">International</a>
                <a href="{{ url('/awards') }}" class="nav-link-mobile">Award</a>
                <a href="{{ url('/contact') }}" class="nav-link-mobile">Contact</a>
            </div>
        </div>
    </header>


    <style>
        /* Desktop nav links */
        .nav-link {
            @apply text-gray-300 relative font-medium transition-all duration-300 ease-in-out;
        }

        .nav-link::after {
            content: '';
            @apply absolute left-0 -bottom-1 w-0 h-0.5 bg-gradient-to-r from-cyan-400 to-pink-500 rounded-full transition-all duration-300;
        }

        .nav-link:hover {
            @apply text-white scale-105;
            text-shadow: 0 0 6px rgba(255, 255, 255, 0.6);
        }

        .nav-link:hover::after {
            @apply w-full;
        }

        /* Mobile nav links */
        .nav-link-mobile {
            @apply text-gray-300 font-medium text-lg transition duration-300 ease-in-out;
        }

        .nav-link-mobile:hover {
            @apply text-white scale-105;
            text-shadow: 0 0 6px rgba(255, 255, 255, 0.5);
        }

        /* Optional: animate mobile nav dropdown */
        @keyframes slide-down {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-down {
            animation: slide-down 0.3s ease-in-out;
        }

        /* Navbar scroll effect */
        .navbar-scrolled {
            @apply backdrop-blur-md bg-slate-900/95 shadow-xl shadow-black/50;
        }
    </style>




    <script>
        // Sticky Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const icon = menuBtn.querySelector('i');
            icon.classList.toggle('ri-menu-line');
            icon.classList.toggle('ri-close-line');
        });
    </script>


    <!-- About Me Section -->
    <!-- Required: AOS + Tilt.js for animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
    <script>
        AOS.init();
        VanillaTilt.init(document.querySelectorAll(".tilt-card"), {
            max: 10,
            speed: 400,
            glare: true,
            "max-glare": 0.2,
        });
    </script>

    @yield('content')


    <!-- Footer Section -->
    <footer class="bg-slate-900 mt-auto border-t border-indigo-500/20 pt-0 pb-0 relative">
        <div class="container mx-auto px-4 md:px-8">

            <!-- Bottom Footer: Centered and Aligned -->
            <div class="flex items-center justify-center text-center py-4 relative">

                <!-- Copyright -->
                <div class="text-gray-400 text-sm text-center">
                    © <span id="current-year"></span> Rashad Kabir & Dream71 Bangladesh Ltd. All rights reserved.
                </div>

                <!-- Scroll To Top Button: Right Positioned -->
                <a href="#about"
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-indigo-600/20 hover:bg-indigo-600/40 text-white p-1 rounded-full shadow-md transition-all duration-300">
                    <i class="ri-arrow-up-line text-lg"></i>
                </a>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById("current-year").textContent = new Date().getFullYear();
    </script>




    <script src="{{ asset('script.js') }}"></script>



</body>

</html>