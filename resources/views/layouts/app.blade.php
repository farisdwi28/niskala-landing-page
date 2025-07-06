<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Landing Page') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">
    <div class="flex flex-1 min-h-screen">
        <!-- Sidebar -->
        <aside class="bg-white w-64 border-r hidden md:block flex-shrink-0">
            @section('sidebar')
            <nav class="h-full flex flex-col py-8 px-4 gap-2">
                <a href="{{ route('projects.index') }}" class="block py-2 px-3 rounded hover:bg-blue-50 {{ request()->routeIs('projects.*') ? 'bg-blue-100 font-bold text-blue-700' : 'text-slate-700' }}">Proyek</a>
                <a href="{{ route('teams.index') }}" class="block py-2 px-3 rounded hover:bg-blue-50 {{ request()->routeIs('teams.*') ? 'bg-blue-100 font-bold text-blue-700' : 'text-slate-700' }}">Tim</a>
                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf
                    <button type="submit" class="w-full text-left py-2 px-3 rounded hover:bg-red-50 text-red-600">Logout</button>
                </form>
            </nav>
            @show
        </aside>
        <!-- Mobile Sidebar Toggle -->
        <div class="md:hidden fixed top-4 left-4 z-50">
            <button id="sidebar-toggle" class="bg-blue-600 text-white p-2 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
        <aside id="mobile-sidebar" class="fixed inset-y-0 left-0 w-64 bg-white border-r z-40 transform -translate-x-full transition-transform duration-200 md:hidden">
            <div class="h-full overflow-y-auto">
                @yield('sidebar')
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-8">
            @yield('content')
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const mobileSidebar = document.getElementById('mobile-sidebar');
            if (sidebarToggle && mobileSidebar) {
                sidebarToggle.addEventListener('click', function() {
                    if (mobileSidebar.classList.contains('-translate-x-full')) {
                        mobileSidebar.classList.remove('-translate-x-full');
                    } else {
                        mobileSidebar.classList.add('-translate-x-full');
                    }
                });
                // Close sidebar on outside click
                document.addEventListener('click', function(e) {
                    if (!mobileSidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                        mobileSidebar.classList.add('-translate-x-full');
                    }
                });
            }
        });
    </script>
</body>
</html> 