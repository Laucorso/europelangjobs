<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
        .item-list {
            color: #fff;
            font-size: 50px;
            display: table-cell;
            width: 65px;
            text-align: center;
        }

        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 1,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24
        }
        .hiring-solutions-text {
            font-weight: 700;
            color: #0c3866;
            font-size: 18px;
        }

    </style>
    <body class="font-sans antialiased">
        <div class="h-50" style="padding-top:150px;min-height:650px;background-image:url('https://www.europelanguagejobs.com/statics/images/header/companies.png');background-position:50%;">
            <div class="margin-0 pt-5" style="padding-bottom:80px;">
                <div class="flex flex-row gap-8" style="padding-bottom:70px;">
                    <div class="" style="max-width:50%;padding-right:100px;padding-left:100px;">
                        <p class="text-xl font-semibold text-white">
                            Find the perfect employee in our database of more than 25,000 new multilingual candidates each month.
                        </p>
                        <button class="rounded-full py-4 mt-8 bg-white uppercase text-sky-600 font-semibold" style="position:relative;padding-left:75px;padding-right:75px;">Post a Job</button>
                    </div>
                    <div style="max-width:50%;padding-right:100px;padding-left:100px;">
                        <div class="items-list flex items-center mb-6">
                            <span class="material-symbols-outlined text-white" style="font-weight:700px; font-size: 4em; fill: currentColor;">
                                group
                            </span>
                            <div class="flex flex-col text-white px-6">
                                <p class="text-2xl" style="font-weight:bold;">+ 2,500</p>
                                <p class="text-xl">companies posting in more than 48 countries</p>
                            </div>
                        </div>
                        <div class="items-list flex items-center mb-6">
                            <span class="material-symbols-outlined text-white" style="font-weight:700px; font-size: 4em; fill: currentColor;">
                                pace
                            </span>
                            <div class="flex flex-col text-white px-6">
                                <p class="text-2xl" style="font-weight:bold;">Post with ease</p>
                                <p class="text-xl">Publish a job advert in just 2 minutes</p>
                            </div>
                        </div>
                        <div class="items-list flex items-center mb-6">
                            <span class="material-symbols-outlined text-white" style="font-weight:700px; font-size: 4em; fill: currentColor;">
                                draft
                            </span>
                            <div class="flex flex-col text-white px-6">
                                <p class="text-2xl" style="font-weight:bold;">+ 50,000</p>
                                <p class="text-xl">candidate applications per month</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="" style="padding-left:50px;padding-right:50px;">
                    <div id="default-carousel" class="relative" data-carousel="static" style="">
                        <!-- Carousel wrapper -->
                        <div class="overflow-hidden relative opacity-75 h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96" style="height:130px;">
                            <!-- Item 1 -->
                            <div class="hidden duration-700" data-carousel-item>
                                <div class="flex">
                                    <div class="w-1/2">
                                        <img src="https://static.europelanguagejobs.com/contents/banners/top-companies-posting-foundever-portugal-610-9042.svg" class="block" alt="...">
                                    </div>
                                    <div class="w-1/2">
                                        <img src="https://static.europelanguagejobs.com/contents/banners/logo-ttec-611-874.svg" class="block" alt="...">
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item >
                                <div class="flex flex-col">
                                    <div class="w-1/2">
                                        <img src="https://static.europelanguagejobs.com/contents/banners/top-companies-posting-foundever-portugal-610-9042.svg" class="block" alt="...">
                                    </div>
                                    <div class="w-1/2">
                                        <img src="https://static.europelanguagejobs.com/contents/banners/logo-ttec-611-874.svg" class="block" alt="...">
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item >
                                <div class="flex flex-col">
                                    <div class="w-1/2">
                                        <img src="https://static.europelanguagejobs.com/contents/banners/top-companies-posting-foundever-portugal-610-9042.svg" class="block" alt="...">
                                    </div>
                                    <div class="w-1/2">
                                        <img src="https://static.europelanguagejobs.com/contents/banners/logo-ttec-611-874.svg" class="block" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>
                    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                </div>

            </div>
        </div>
        <div class="w-full mt-8 mb-8">
            <p class="text-2xl flex justify-center text-sky-700">ELJ's <span class="font-semibold"> hiring solutions</span></p>

            <div class="flex flex-row items-center justify-center gap-4 pr-4 pl-4 mt-8">
                <div class="flex flex-col items-center w-40">
                    <img src="https://www.europelanguagejobs.com/statics/images/job-posting.svg">
                    <p class="text-2xl uppercase font-semibold mt-2 hiring-solutions-text" style="font-size:22px">Job Posting</p>
                </div>
                <div class="flex flex-col items-center w-40">
                    <img src="	https://www.europelanguagejobs.com/statics/images/cv-search.svg">
                    <p class="text-2xl uppercase font-semibold mt-2 hiring-solutions-text" style="font-size:22px">CV Posting</p>
                </div>
                <div class="flex flex-col items-center w-40 text-center">
                    <img class="mt-8"src="	https://www.europelanguagejobs.com/statics/images/exposure-features.svg">
                    <p class="text-2xl uppercase font-semibold mt-2 hiring-solutions-text" style="font-size:22px">Website Visibility</p>
                </div>
                <div class="flex flex-col items-center text-center w-40">
                    <img class="mt-8" src="https://www.europelanguagejobs.com/statics/images/outreach-features.svg">
                    <p class="text-2xl uppercase font-semibold mt-2 hiring-solutions-text" style="font-size:22px">Outreach Features</p>
                </div>
            </div>
        </div>
        <div class="bg-sky-700 h-36 gap-8 flex flex-row items-center justify-center">
            <p class="text-white" style="font-size:22px;font-weight:700px;">Find more about our basic and personalized hiring solutions</p>
            <button class="uppercase font-semibold rounded-full py-4 bg-white text-sky-600" style="padding-left:75px;padding-right:75px;">learn more</button>
        </div>

        <div class="w-full mt-8 mb-8 flex flex-col items-center justify-center">
            <p class="text-2xl flex justify-center text-sky-700"><span class="font-semibold">Tell us about</span><span class="">&nbsp; your needs</span></p>

            <div class="flex flex-row items-center justify-center bg-gray-200 mt-8 w-2/6" style="padding:70px;width:900px;">
                <div class="flex flex-col" style="margin-right:100px;">
                    <!-- Contenido de la tarjeta -->
                    <div class="flex flex-row gap-4 my-4">
                        <span class="material-symbols-outlined text-gray-400" style="font-weight:700px; font-size: 2em; fill: currentColor;">
                            group
                        </span>
                        <input type="text" placeholder="Your Name"class="border-0 border-b bg-gray-200">
                    </div>
                    <div class="flex flex-row gap-4 my-4">
                        <span class="material-symbols-outlined text-gray-400" style="font-weight:700px; font-size: 2em; fill: currentColor;">
                            group
                        </span>
                        <input type="text" placeholder="Company Name"class="border-0 border-b bg-gray-200">
                    </div>
                    <div class="flex flex-row gap-4 my-4">
                        <span class="material-symbols-outlined text-gray-400" style="font-weight:700px; font-size: 2em; fill: currentColor;">
                            group
                        </span>
                        <input type="text" placeholder="Email"class="border-0 border-b bg-gray-200">
                    </div>
                </div>      
                <div class="flex flex-col">
                    <h2 class="text-gray-400 mb-2">Your message</h2>
                    <textarea class="border-0 border-b bg-gray-200"> </textarea>
                    <div class="mt-2 mb-2">
                        <input type="radio" class="rounded-0">I accept the legal conditions
                    </div>
                    <button class="bg-gray-600 rounded-full py-2 px-4 text-white">Send Message</button>
                </div>          
            </div>
        </div>
        <div class="bg-sky-700 h-36 gap-8 flex flex-row items-center justify-center">
            <p class="text-white" style="font-size:30px;font-weight:700px;">Together, your hires, our goal!</p>
        </div>
        <div>
            <footer class="bg-white py-8 m-5 border-t-2 border-b-2 flex justify-between" style="color: #0c3866;">
                <div class="container grid grid-cols-5 flex-wrap">
                    <!-- Columna 1 -->
                    <div class="col-span-2">
                        <div class="w-3/4">
                        <img height="" width="100" src="https://www.europelanguagejobs.com/statics/images/logo-elj-no-bg.png">
                        <p>Europe Language Jobs - the job board for expat jobs abroad</p>
                        <p> 
                            We help expats find jobs in Europe using their
                            native language and gain international experience
                            by working in a foreign country.</p>
                        </div>
                    </div>
            
                    <!-- Columna 2 -->
                    <div class="w-full">
                        <div>
                            <h3 class="text-lg font-semibold mb-4">FOR JOB SEEKERS</h3>
                            <ul>
                                <li class="py-2">Find a job</li>
                                <li class="py-2">Create an account</li>
                                <li class="py-2">Career advice</li>
                            </ul>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-lg font-semibold mb-4">STAY CONNECTED</h3>
                            <div class="flex flex-row gap-2 mr-4">
                                <a>
                                    <img src="https://static-00.iconduck.com/assets.00/linkedin-icon-1024x1024-net2o24e.png" style="width:200px;">
                                </a>
                                <a>
                                    <img src="https://static-00.iconduck.com/assets.00/linkedin-icon-1024x1024-net2o24e.png" style="width:200px;">
                                </a>
                                <a>
                                    <img src="https://static-00.iconduck.com/assets.00/linkedin-icon-1024x1024-net2o24e.png" style="width:200px;">
                                </a>
                                <a>
                                    <img src="https://static-00.iconduck.com/assets.00/linkedin-icon-1024x1024-net2o24e.png" style="width:200px;">
                                </a>
                                <a>
                                    <img src="https://static-00.iconduck.com/assets.00/linkedin-icon-1024x1024-net2o24e.png" style="width:200px;">
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <!-- Columna 4 -->
                    <div class="w-full">
                        <div>
                            <h3 class="text-lg font-semibold mb-4">FOR EMPLOYERS</h3>
                            <ul>
                                <li class="py-2">Post a job</li>
                                <li class="py-2">Create an account</li>
                                <li class="py-2">Hiring solutions</li>
                            </ul>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-lg font-semibold mb-4">DOWNLOAD THE APP</h3>
                            <ul>
                                <li class="py-2">Post a job</li>
                                <li class="py-2">Create an account</li>
                                <li class="py-2">Hiring solutions</li>
                            </ul>
                        </div>

                    </div>
                    <div class="w-full">
                        <h3 class="text-lg font-semibold mb-4">EUROPE LANGUAGE JOBS</h3>
                        <ul>
                            <li class="py-2">About us</li>
                            <li class="py-2">FAQ</li>
                            <li class="py-2">Legal conditions</li>
                            <li class="py-2">Cookies policy</li>
                            <li class="py-2">Contact us</li>
                        </ul>
                    </div>
                </div>
            
            </footer>
            
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </body>
</html>
