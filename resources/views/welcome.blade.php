@extends('layouts.guest')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Modern Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- AOS Animate On Scroll CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100 min-h-screen font-sans text-slate-800 antialiased relative overflow-x-hidden">
    <!-- Background shapes global -->
    <div class="fixed top-0 right-0 w-96 h-96 bg-blue-200 opacity-30 rounded-full blur-3xl pointer-events-none z-0"></div>
    <div class="fixed bottom-0 left-0 w-96 h-96 bg-blue-100 opacity-20 rounded-full blur-2xl pointer-events-none z-0"></div>
    <main class="relative z-10">
        <!-- Hero Section -->
        <section class="px-2 py-32 bg-white md:px-0" id="hero">
            <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
                <div class="flex flex-wrap items-center sm:-mx-3">
                    <div class="w-full md:w-1/2 md:px-3">
                        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight tracking-tight text-blue-900">
                                BUILDING <span class="text-blue-500 shimmer">INNOVATIVE</span> DIGITAL SOLUTIONS
                            </h1>
                            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It's never been easier to build beautiful websites that convey your message and tell your story.</p>
                            <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                            <a href="#projects" class="bg-blue-600 text-white font-semibold px-8 py-3 rounded shadow hover:bg-blue-700 transition">View Projects</a>
                                </a>
                                <a href="#_" class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                            <img src="https://images.unsplash.com/photo-1498049860654-af1a5c566876?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="hero" class="bg-white text-slate-900 relative overflow-hidden border-b border-slate-100">
                <div class="container mx-auto px-6 py-24 flex flex-col items-center gap-8 text-center">
                    <img src="{{ asset('assets/NID.png') }}" alt="Logo" class="w-64 h-64 md:w-40 md:h-40 object-contain rounded-full mb-6" />
                    <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight tracking-tight text-blue-900">BUILDING <span class="text-blue-500 shimmer">INNOVATIVE</span> DIGITAL SOLUTIONS</h1>
                    <p class="text-lg md:text-xl text-slate-500 font-light max-w-2xl mb-8">We Think. We Build. We Impact. Beyond The Code! </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#projects" class="bg-blue-600 text-white font-semibold px-8 py-3 rounded shadow hover:bg-blue-700 transition">View Projects</a>
                        <a href="#team" class="border border-blue-600 text-blue-600 font-semibold px-8 py-3 rounded hover:bg-blue-50 transition">Our Team</a>
                    </div>
                    <div class="absolute -top-16 -left-16 w-60 h-60 bg-blue-100 rounded-full opacity-20 blur-2xl"></div>
                </div>
            </section> -->

        <!-- About Section -->
        <!-- <section id="about" class="py-32 w-full bg-gradient-to-br from-blue-50 via-white to-blue-100 flex flex-col items-center justify-center" data-aos="fade-up">
            <div class="flex flex-col items-center mb-8">
                <span class="inline-block w-16 h-16 rounded-full bg-gradient-to-br from-blue-200 to-blue-400 flex items-center justify-center mb-4 shadow-sm">
                    <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 2v20m10-10H2" />
                    </svg>
                </span>
                <h2 class="text-5xl md:text-6xl font-serif font-bold text-blue-900 mb-2 tracking-tight">About Us</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-400 via-blue-200 to-blue-400 rounded-full mb-2"></div>
            </div>
            <div class="max-w-3xl mx-auto px-6 text-center">
                <p class="text-xl text-slate-700 leading-relaxed font-light">We believe in bringing great ideas to life.<br><br>At <span class="font-semibold text-blue-700">NISKALAID</span>, we do more than code. We build solutions, forge partnerships, and deliver impact—from sleek corporate websites to robust digitalization systems.<br><span class='text-blue-500 text-2xl font-semibold block my-6'>🚀 We Think. We Build. We Impact. Beyond The Code! 🚀</span></p>
            </div>
        </section> -->
        <section id="about">
            <div class="py-24 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <div class="lg:text-center">
                        <h2
                            class="font-heading mb-4 bg-orange-100 text-orange-800 px-4 py-2 rounded-lg md:w-64 md:mx-auto text-xs font-semibold tracking-widest text-black uppercase title-font">
                            Why choose us?
                        </h2>
                        <p class="font-heading mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                            We know tech, we know finance. We are fintech experts.
                        </p>
                        <p class="mt-4 max-w-2xl text-lg text-gray-500 lg:mx-auto">
                            We know how to handle taxation for all the
                            countried we operate in. We care for our customers and help them manage cashflows.
                        </p>
                    </div>

                    <div class="mt-10">
                        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                        <img src="https://www.svgrepo.com/show/503163/api-settings.svg">
                                    </div>
                                    <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">Powerful API</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                    blanditiis ratione.
                                </dd>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                        <img src="https://www.svgrepo.com/show/503138/webpack.svg">
                                    </div>
                                    <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">Easy to integrate
                                        SDK
                                    </p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500"> Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                    blanditiis ratione.
                                </dd>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                        <img src="https://www.svgrepo.com/show/511771/dashboard-671.svg">

                                    </div>
                                    <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">Low Transaction Cost
                                    </p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500"> Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                    blanditiis ratione.
                                </dd>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                        <img src="https://www.svgrepo.com/show/76267/free-commercial-label.svg">

                                    </div>
                                    <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">Powerful Dashboard
                                    </p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500"> Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                    blanditiis ratione.
                                </dd>
                            </div>
                        </dl>
                    </div>

                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="bg-white py-24" id="projects">
            <div class="flex flex-col gap-8 py-12 2xl:py-16 max-w-screen-2xl m-auto w-full px-3 sm:px-8 lg:px-16 xl:px-32">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Our Lastest Project</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6 rounded-full"></div>
                    <p class="text-gray-600 text-lg">We're a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
                </div>
                <div class="grid w-full grid-flow-row gap-x-0 gap-y-6 sm:max-md:justify-items-center md:grid-cols-2 md:justify-items-start md:gap-6 lg:grid-cols-3">
                    @forelse ($projects as $project)
                    <div class="flex max-w-lg flex-col items-start gap-6 overflow-hidden rounded-xl border border-slate-200">
                        <div class="flex w-full items-center justify-center bg-cover bg-center">
                            <img src="{{ $project->image ?? asset('assets/NID.png') }}" alt="{{ $project->title }}" class="w-full h-56 object-cover object-center rounded-t-xl">
                        </div>
                        <div class="flex flex-col items-start gap-4 px-4 py-6 md:gap-6 md:px-8">
                            <p class="text-2xl font-semibold tracking-tight">{{ $project->title }}</p>
                            <p class="text-base text-slate-500">{{ $project->description }}</p>
                            @if ($project->url)
                            <a href="{{ $project->url }}" target="_blank" class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out text-blue-700 hover:text-blue-950 self-end p-0">
                                <div>View Project</div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1D4ED8" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg" class="size-6 stroke-inherit ml-2">
                                    <path d="M11 16L15 12L11 8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-slate-500 col-span-full">No projects have been added yet.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="bg-white" id="team">
            <div class="py-20 px-4">
                <div class="container mx-auto max-w-7xl">
                    <!-- Section Header -->
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Meet Our Talented Team</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6 rounded-full"></div>
                        <p class="text-gray-600 text-lg">We're a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
                    </div>

                    <!-- Team Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        @forelse ($teamMembers as $member)
                        <div class="group">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="{{ $member->photo ?? asset('assets/NID.png') }}" alt="Team member" class="w-full aspect-[3/4] object-cover object-center transform group-hover:scale-105 transition duration-300 ease-in-out">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center p-6">
                                    <div class="flex space-x-4">
                                        @if($member->linkedin)
                                        <a href="{{ $member->linkedin }}" target="_blank" class="bg-white text-indigo-600 p-2 rounded-full hover:bg-indigo-600 hover:text-white transition-colors duration-200" title="LinkedIn">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        @endif
                                        @if($member->github)
                                        <a href="{{ $member->github }}" target="_blank" class="bg-white text-indigo-600 p-2 rounded-full hover:bg-indigo-600 hover:text-white transition-colors duration-200" title="GitHub">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        @endif
                                        @if($member->instagram)
                                        <a href="{{ $member->instagram }}" target="_blank" class="bg-white text-indigo-600 p-2 rounded-full hover:bg-indigo-600 hover:text-white transition-colors duration-200" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-bold text-gray-800">{{ $member->name }}</h3>
                                <p class="text-indigo-600 font-medium">{{ $member->position }}</p>
                                <p class="text-gray-600 mt-2">{{ $member->bio }}</p>
                            </div>
                        </div>
                        @empty
                        <p class="text-center text-slate-500 col-span-full">No team members have been added yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>
<!-- AOS Animate On Scroll JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        once: false,
        duration: 900,
        easing: 'ease-out-cubic'
    });
</script>

</html>
@endsection