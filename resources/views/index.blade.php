<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home Page</title>

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body>

    {{-- Header Start --}}
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="/" class="font-bold text-lg text-primary-500 block py-6">Fachrizal</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark-900 dark:shadow-slate-300 lg:dark:bg-transparent">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home"
                                    class="text-base text-dark-900 py-2 mx-8 flex group-hover:text-primary-500 dark:text-white">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base text-dark-900 py-2 mx-8 flex group-hover:text-primary-500 dark:text-white">About
                                    Me</a>
                            </li>
                            <li class="group">
                                <a href="#portofolio"
                                    class="text-base text-dark-900 py-2 mx-8 flex group-hover:text-primary-500 dark:text-white">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#clients"
                                    class="text-base text-dark-900 py-2 mx-8 flex group-hover:text-primary-500 dark:text-white">Clients</a>
                            </li>
                            <li class="group">
                                <a href="#blog"
                                    class="text-base text-dark-900 py-2 mx-8 flex group-hover:text-primary-500 dark:text-white">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#contact"
                                    class="text-base text-dark-900 py-2 mx-8 flex group-hover:text-primary-500 dark:text-white">Contact</a>
                            </li>
                            <li class="flex items-center pl-8 mt-3 lg:mt-0">
                                <div class="flex">
                                    <span class="mr-2 text-sm text-slate-500">light</span>
                                    <input type="checkbox" class="hidden" id="dark-toggle">
                                    <label for="dark-toggle">
                                        <div
                                            class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                            <div
                                                class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out">
                                            </div>
                                        </div>
                                    </label>
                                    <span class="ml-2 text-sm text-slate-500">dark</span>
                                </div>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    {{-- Header End --}}

    {{-- Hero Section Start --}}
    <section id="home" class="pt-36 dark:bg-dark-900">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary-500 md:text-xl">Halo Semua 🐼, saya<span
                            class="block font-bold text-dark-900 text-4xl mt-1 lg:text-5xl dark:text-white">Fachrizal
                            Fazza
                            Ashari</span></h1>
                    <h2 class="font-medium text-slate-500 text-lg mb-5 lg:text-2xl">College Student at Informatics
                        Engineering</h2>
                    <p class="font-medium text-slate-500 mb-10 leading-relaxed">Driven by a passion for technology and
                        innovation, I am dedicated to expanding my knowledge in
                        coding, software development, and data analysis. I strive to leverage my skills to solve
                        real-world problems and make a <span
                            class="text-dark-900 font-semibold dark:text-white">positive impact in the
                            tech industry.</span></p>

                    <a href="#"
                        class="text-base font-semibold text-white bg-primary-500 py-3 px-8 rounded-full hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">Hubungi
                        Saya</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-5 lg:mt-9 lg:right-0">
                        <img src="img/fachrizal.png" alt="fachrizal fazza ashari"
                            class="max-w-full mx-auto relative z-10">
                        <span class="absolute bottom-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                                <path fill="#8b5cf6"
                                    d="M39.3,-61.9C50.9,-53.7,60.3,-42.8,63.4,-30.5C66.6,-18.3,63.5,-4.8,58.6,6.3C53.8,17.5,47.2,26.3,41.1,38.4C35,50.4,29.4,65.7,19.9,69C10.5,72.2,-2.8,63.6,-14.1,56.4C-25.4,49.3,-34.7,43.7,-44.2,36.3C-53.6,28.9,-63.3,19.7,-69.3,7.2C-75.3,-5.2,-77.8,-20.9,-70.9,-30.9C-64,-40.8,-47.8,-45,-34.5,-52.5C-21.1,-59.9,-10.5,-70.6,1.7,-73.2C13.8,-75.7,27.7,-70.2,39.3,-61.9Z"
                                    transform="translate(100 100) scale(1.2)" />
                            </svg>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- About Section Start --}}
    <section id="about" class="pt-36 pb-32 dark:bg-dark-900">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary-500 text-lg mb-3">About Me</h4>
                    <h2 class="font-bold text-dark-900 text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">Lorem ipsum
                        dolor sit, amet
                        consectetur.</h2>
                    <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg">Lorem ipsum dolor sit amet
                        consectetur,
                        adipisicing elit. Nihil, delectus? Praesentium dolorum
                        deleniti ipsa!</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark-900 text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-white">Let's be
                        friends</h3>
                    <p class="font-medium text-base text-slate-500 mb-6">Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Laborum eaque molestiae dicta iste
                        tempora eligendi rem ducimus tempore.</p>
                    <div class="flex items-center">
                        {{-- Youtube --}}
                        <a href="https://www.youtube.com" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>YouTube</title>
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        {{-- Instagram --}}
                        <a href="https://www.instagram.com" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path
                                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                            </svg>
                        </a>
                        {{-- Facebook --}}
                        <a href="https://www.facebook.com" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Facebook</title>
                                <path
                                    d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
                            </svg>
                        </a>
                        {{-- LinkedIn --}}
                        <a href="https://www.linkedin.com/in/fachrizal-fazza-ashari-54a28724b/" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>LinkedIn</title>
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        {{-- Github --}}
                        <a href="https://github.com/Nilfgard13/" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>GitHub</title>
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- About Section End --}}

    {{-- Portofolio Section Start --}}
    <section id="portofolio" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary-500 mb-2">Portfolio</h4>
                    <h2 class="font-bold text-dark-900 text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Latest
                        Project</h2>
                    <p class="font-medium text-md text-slate-500 md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Explicabo, ipsam possimus expedita
                        assumenda libero ipsum deleniti temporibus voluptatem modi sed!</p>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/portfolio/gambar1.png" alt="gambar1" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark-900 mt-5 mb-3 dark:text-white">Landing Page Fachrizal
                        Fazza Ashari 1
                    </h3>
                    <p class="font-medium text-base text-slate-500">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. At sint molestiae voluptas.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/portfolio/gambar1.png" alt="gambar1" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark-900 mt-5 mb-3 dark:text-white">Landing Page Fachrizal
                        Fazza Ashari 2
                    </h3>
                    <p class="font-medium text-base text-slate-500">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. At sint molestiae voluptas.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/portfolio/gambar1.png" alt="gambar1" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark-900 mt-5 mb-3 dark:text-white">Landing Page Fachrizal
                        Fazza Ashari 3
                    </h3>
                    <p class="font-medium text-base text-slate-500">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. At sint molestiae voluptas.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/portfolio/gambar1.png" alt="gambar1" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark-900 mt-5 mb-3 dark:text-white">Landing Page Fachrizal
                        Fazza Ashari 4
                    </h3>
                    <p class="font-medium text-base text-slate-500">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. At sint molestiae voluptas.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Portofolio Section End --}}

    {{-- My Project Repository Start --}}
    <section id="clients" class="pt-36 pb-32 bg-slate-700 dark:bg-slate-300-300">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary-500 mb-2">Clients</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark-900">All of my
                        projects</h2>
                    <p class="font-medium text-md text-slate-500 md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Aut eum voluptatem architecto!</p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="#"
                        class="text-base font-semibold text-white bg-primary-500 py-3 px-9 rounded-full hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out lg:px-14 md:px-10">Hubungi
                        Saya</a>
                </div>
            </div>
        </div>
    </section>
    {{-- My Project Repository End --}}

    {{-- Blog Section Start --}}
    <section id="blog" class="pt-36 pb-32 bg-slate-100 dark:bg-dark-900">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary-500 mb-2">Blog</h4>
                    <h2 class="font-bold text-dark-900 text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">My Latest
                        Write</h2>
                    <p class="font-medium text-md text-slate-500 md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Totam, obcaecati accusamus! Similique, error!</p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                        <img src="img/wallpaper.jpg" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#"
                                    class="block mb-3 font-semibold text-xl text-dark-900 hover:text-primary-500 truncate dark:text-white">Tips
                                    Belajar Programming 1</a></h3>
                            <p class="font-medium text-base text-slate-500 mb-6">Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Quod, magni.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary-500 py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                        <img src="img/wallpaper.jpg" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#"
                                    class="block mb-3 font-semibold text-xl text-dark-900 hover:text-primary-500 truncate dark:text-white">Tips
                                    Belajar Programming 2</a></h3>
                            <p class="font-medium text-base text-slate-500 mb-6">Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Quod, magni.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary-500 py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                        <img src="img/wallpaper.jpg" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#"
                                    class="block mb-3 font-semibold text-xl text-dark-900 hover:text-primary-500 truncate dark:text-white">Tips
                                    Belajar Programming 3</a></h3>
                            <p class="font-medium text-base text-slate-500 mb-6">Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Quod, magni.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary-500 py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Blog Section End --}}

    {{-- Contact Section Start --}}
    <section id="contact" class="pt-36 pb-32 bg-slate-200 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary-500 mb-2">Contact</h4>
                    <h2 class="font-bold text-dark-900 text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Contact
                        Me</h2>
                    <p class="font-medium text-md text-slate-500 md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Quas, aperiam!</p>
                </div>
            </div>

            <form>
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base text-primary-500">Nama</label>
                        <input type="text" id="name"
                            class="w-full bg-slate-300 text-dark-900 p-3 rounded-md focus:outline-none focus:ring-primary-500 focus:ring-1 focus:border-primary-500 ">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base text-primary-500">Email</label>
                        <input type="email" id="email"
                            class="w-full bg-slate-300 text-dark-900 p-3 rounded-md focus:outline-none focus:ring-primary-500 focus:ring-1 focus:border-primary-500 ">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base text-primary-500">Message</label>
                        <textarea type="email" id="message"
                            class="w-full bg-slate-300 text-dark-900 p-3 rounded-md focus:outline-none focus:ring-primary-500 focus:ring-1 focus:border-primary-500 h-32"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <button
                            class="text-base font-semibold text-white bg-primary-500 py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- Contact Section End --}}

    {{-- Footer Start --}}
    <footer class="bg-dark-900 pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">Fachrizal</h2>
                    <h3 class="font-bold text-2xl mb-2">Contact Me</h3>
                    <p>risfa328@gmail.com</p>
                    <p>Jl.Raya Kandangan</p>
                    <p>Kab. Blitar</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Category Writing</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#"
                                class="inline-block text-base text-secondary hover:text-primary-500 mb-3">Programming</a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-block text-base text-secondary hover:text-primary-500 mb-3">Technology</a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-block text-base text-secondary hover:text-primary-500 mb-3">Life
                                Style</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Link</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home"
                                class="inline-block text-base text-secondary hover:text-primary-500 mb-3">Home</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="inline-block text-base text-secondary hover:text-primary-500 mb-3">About Me</a>
                        </li>
                        <li>
                            <a href="#portfolio"
                                class="inline-block text-base text-secondary hover:text-primary-500 mb-3">Portfolio</a>
                        </li>
                        <li>
                            <a href="#clients"
                                class="inline-block text-base text-secondary hover:text-primary-500 mb-3">Clients</a>
                        </li>
                        <li>
                            <a href="#blog"
                                class="inline-block text-base text-secondary hover:text-primary-500 mb-3">Blog</a>
                        </li>
                        <li>
                            <a href="#contact"
                                class="inline-block text-base text-secondary hover:text-primary-500 mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    {{-- Youtube --}}
                    <a href="https://www.youtube.com" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="https://www.instagram.com" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path
                                d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                        </svg>
                    </a>
                    {{-- Facebook --}}
                    <a href="https://www.facebook.com" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Facebook</title>
                            <path
                                d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
                        </svg>
                    </a>
                    {{-- LinkedIn --}}
                    <a href="https://www.linkedin.com/in/fachrizal-fazza-ashari-54a28724b/" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn</title>
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    {{-- Github --}}
                    <a href="https://github.com/Nilfgard13/" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>GitHub</title>
                            <path
                                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                    </a>
                </div>

                <p class="font-medium text-xs text-slate-500 text-center">Made by <a href="http://instagram.com"
                        target="_blank" class="font-bold text-primary-500">Fachrizal Fazza Ashari</a>, Using <a
                        href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind
                        CSS.</a></p>
            </div>
        </div>
    </footer>
    {{-- Footer End --}}

    {{-- Back to top Start --}}
    <a href="#home" id="to-top"
        class="hidden fixed z-[9999] bottom-4 right-4 p-4 h-14 w-14 rounded-full bg-primary-500 justify-center items-center hover:animate-pulse">
        <span class="block h-5 w-5 border-t-2 border-l-2 rotate-45 mt-2"></span>
    </a>
    {{-- Back to top End --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.onscroll = function() {
                const header = document.querySelector('header');
                const fixedNav = header.offsetTop;
                const toTop = document.querySelector('#to-top');

                if (window.pageYOffset > fixedNav) {
                    header.classList.add('navbar-fixed');
                    toTop.classList.remove('hidden');
                    toTop.classList.add('flex');
                } else {
                    header.classList.remove('navbar-fixed');
                    toTop.classList.remove('flex');
                    toTop.classList.add('hidden');
                }
            }



            const hamburger = document.querySelector('#hamburger');
            const navMenu = document.querySelector('#nav-menu');
            if (hamburger) {
                hamburger.addEventListener('click', function() {
                    hamburger.classList.toggle('hamburger-active');
                    navMenu.classList.toggle('hidden');
                });
            }

            //klik out of hamburger
            window.addEventListener('click', function(e) {
                if (e.target != hamburger && e.target != navMenu) {
                    hamburger.classList.remove('hamburger-active');
                    navMenu.classList.add('hidden');
                }
            });

            //Darkmode toggle
            const darkToggle = document.querySelector('#dark-toggle');
            const html = document.querySelector('html');

            darkToggle.addEventListener('click', function() {
                if (darkToggle.checked) {
                    html.classList.add('dark');
                    localStorage.theme = 'dark';
                } else {
                    html.classList.remove('dark');
                    localStorage.theme = 'light';
                }
            });

            //pindahkan posisi toggle sesuai mode
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
                darkToggle.checked = true;
            } else {
                darkToggle.checked = false;
            }

        });
    </script>
</body>

</html>
