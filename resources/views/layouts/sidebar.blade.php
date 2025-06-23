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

<body class="min-h-screen bg-slate-900 text-white">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-800 h-screen overflow-y-auto sticky top-0 flex flex-col shadow-lg p-4 space-y-4">
            <!-- Logo -->
            <a href="{{ url('/admin/dashboard') }}" class="flex items-center gap-3 text-xl font-extrabold bg-gradient-to-r from-pink-500 to-cyan-400 text-transparent bg-clip-text mb-6">
                <img src="{{ url('images/man.jpg') }}" alt="Profile" class="w-10 h-10 rounded-full border-2 border-cyan-400 shadow-md">
                Rashad Kabir
            </a>

            <!-- Navigation Links -->
            <nav class="space-y-2">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">Dashboard</a>
                <a href="{{ url('/admin/dashboard/experiences') }}"  class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">Experience</a>
                <a href="{{ url('/admin/dashboard/articles') }}" class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">Articles</a>
                <a href="{{ url('/admin/dashboard/contributionToBasis') }}" class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">Contribution To BASIS</a>
                <a href="{{ url('/admin/dashboard/tvShows') }}" class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">TV Shows</a>
                <a href="{{ url('/admin/dashboard/news') }}" class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">News</a>
                <a href="{{ url('/admin/dashboard/internationals') }}" class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">International</a>
                <a href="{{ url('/admin/dashboard/awards') }}" class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">Awards</a>
                <a href="{{ url('/admin/dashboard/contact') }}" class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">Contact</a>
                <a href="{{ url('/admin/logout') }}" class="nav-link block px-4 py-2 rounded-md hover:bg-slate-700 transition">Logout</a>
            </nav>
        </aside>



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
        </script>


        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col">
            <main class="flex-1 p-3">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="bg-slate-900 border-t border-indigo-500/20 pt-0 pb-0">
                <div class="container mx-auto px-4 md:px-8">
                    <div class="flex items-center justify-center text-center py-4 relative">
                        <div class="text-gray-400 text-sm text-center">
                            © <span id="current-year"></span> Rashad Kabir & Dream71 Bangladesh Ltd. All rights reserved.
                        </div>
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