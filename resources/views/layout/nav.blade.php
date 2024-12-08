<?php require "../resources/views/layout/html_header.blade.php"; ?>
<nav class="bg-gray-800 p-2">
    <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center">
        <div class="text-white font-bold text-2xl mb-4 lg:mb-0 hover:text-orange-600 hover:cursor-pointer">Projecte PHP
        </div>

        <div class="lg:hidden">
            <button class="text-white focus:outline-none">
                <svg class="h-6 w-6"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"
                    ></path>
                </svg>
            </button>
        </div>

        <div class="lg:flex flex-col lg:flex-row lg:space-x-4 lg:mt-0 mt-4 flex flex-col items-center text-lg">
            <a href="/" class="text-white  px-4 py-2 hover:text-orange-600 ">Home</a>
            <a href="/films" class="text-white  px-4 py-2  hover:text-orange-600">Pel·licules</a>
            <a href="/actors" class="text-white  px-4 py-2  hover:text-orange-600">Actors</a>

        </div>
    </div>

</nav>


