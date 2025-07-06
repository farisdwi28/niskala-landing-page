<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Landing Page') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">
    <header class="bg-white/80 backdrop-blur-lg border-b border-slate-200 shadow-md fixed top-0 z-50 w-full">
        <nav class="container mx-auto px-6 py-3 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 text-2xl font-extrabold text-blue-600 tracking-tight" style="font-family: 'Inter', sans-serif;">
                NISKALAID
            </a>
            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center space-x-7">
                <a href="/#about" class="nav-link nav-underline" data-section="about">About</a>
                <a href="/#projects" class="nav-link nav-underline" data-section="projects">Projects</a>
                <a href="/#team" class="nav-link nav-underline" data-section="team">Team</a>
                <!-- @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="nav-link">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
                @endauth -->
            </div>
            <!-- Hamburger for Mobile -->
            <div class="md:hidden flex items-center">
                <button id="nav-toggle" class="text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-200 p-1 rounded hover:bg-blue-50 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </nav>
        <!-- Mobile Nav -->
        <div id="mobile-nav" class="md:hidden bg-white/95 border-t border-slate-200 shadow fixed top-16 left-0 w-full z-40 hidden transition-all">
            <div class="flex flex-col py-4 px-6 space-y-2">
                <a href="/#about" class="nav-link-mobile" data-section="about">About</a>
                <a href="/#projects" class="nav-link-mobile" data-section="projects">Projects</a>
                <a href="/#team" class="nav-link-mobile" data-section="team">Team</a>
             
            </div>
        </div>
        <style>
            .nav-link {
                @apply text-slate-700 hover:text-blue-700 transition-colors font-semibold relative px-2 py-1 tracking-wide;
                font-family: 'Inter', sans-serif;
                font-weight: bold;
            }
            .nav-underline::after {
                content: '';
                @apply absolute left-0 right-0 -bottom-0.5 h-0.5 bg-blue-600 scale-x-0 transition-transform duration-200 origin-left rounded-full;
            }
            .nav-underline:hover::after, .nav-link.active.nav-underline::after {
                @apply scale-x-100;
            }
            .nav-link-mobile {
                @apply block text-slate-700 hover:text-blue-700 transition-colors font-semibold px-2 py-2 rounded tracking-wide;
                font-family: 'Inter', sans-serif;
                font-weight: bold;
            }
            .nav-link.active, .nav-link-mobile.active {
                @apply text-blue-700 font-bold;
            }
            .nav-link.active::after {
                content: '';
                @apply absolute left-0 right-0 -bottom-0.5 h-0.5 bg-blue-600 rounded-full;
                transition: width 0.2s;
            }
            header {
                border-bottom: 1.5px solid #e2e8f0;
                box-shadow: 0 2px 8px 0 rgba(30, 64, 175, 0.03);
                background: #fff;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const navToggle = document.getElementById('nav-toggle');
                const mobileNav = document.getElementById('mobile-nav');
                navToggle.addEventListener('click', function() {
                    mobileNav.classList.toggle('hidden');
                });
                // Close mobile nav on link click
                mobileNav.querySelectorAll('a,button').forEach(el => {
                    el.addEventListener('click', () => mobileNav.classList.add('hidden'));
                });

                // Scrollspy effect for nav-link
                const sections = ['about', 'projects', 'team'];
                const navLinks = document.querySelectorAll('.nav-link[data-section]');
                const mobileLinks = document.querySelectorAll('.nav-link-mobile[data-section]');
                function onScroll() {
                    let scrollPos = window.scrollY + 80;
                    let active = '';
                    for (let section of sections) {
                        const el = document.getElementById(section);
                        if (el && el.offsetTop <= scrollPos) {
                            active = section;
                        }
                    }
                    navLinks.forEach(link => {
                        link.classList.toggle('active', link.dataset.section === active);
                    });
                    mobileLinks.forEach(link => {
                        link.classList.toggle('active', link.dataset.section === active);
                    });
                }
                window.addEventListener('scroll', onScroll);
                onScroll();
            });
        </script>
    </header>
    <main class="flex-1 py-8 flex flex-col justify-center">
        @yield('content')
    </main>
    <footer class="bg-slate-800 text-white py-6 mt-auto w-full">
        <div class="container mx-auto px-6 text-center">
            <p>© {{ date('Y') }} MyPorto. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html> 