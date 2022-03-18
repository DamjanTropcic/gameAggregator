@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
        <div class="flex-none">
            <img src="/ff7.jpg" alt="cover">
        </div>
        <div class="lg:ml-12 lg:mr-64">

            <h2 class="font-semibold text-4xl leading-tight mt-1">Final Fantasy VII Remake</h2>
            <div class="text-gray-400">
                <span>Adventure, RPG</span>
                &middot;
                <span>Square Enix</span>
                &middot;
                <span>Playstation 4</span>
            </div>

            <div class="flex flex-wrap items-center mt-8">

                <div class="flex items-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                    </div>
                    <div class="ml-4 xs">Member <br> Score</div>
                </div>

                <div class="flex items-center ml-12">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">70%</div>
                    </div>
                    <div class="ml-4 xs">Critic <br> Score</div>
                </div>

                <div class="flex items-center space-x-4 mt-4 lg:mt-0 lg:ml-12">
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="" class="hover:text-gray-400">A</a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="" class="hover:text-gray-400">B</a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="" class="hover:text-gray-400">C</a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="" class="hover:text-gray-400">D</a>
                    </div>
                </div>

            </div>

            <p class="mt-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam expedita alias, praesentium
                harum corrupti sint totam autem? Quidem eligendi odio praesentium pariatur ipsa ipsum laudantium
                aliquid. Veniam nisi quidem officia, velit eaque similique consequatur aperiam quis enim et aliquam
                repellat.
            </p>

            <div class="mt-12">
                <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                    <?xml version="1.0"?>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                    </svg>
                   <span class="ml-2">Play Trailer</span>
                </button>
            </div>
        </div>
    </div><!--end game details-->

    <div class="images-container border-b border-gray-800 pb-12 mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">

            <div>
                <a href="#">
                    <img src="/screenshot1.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="/screenshot2.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="/screenshot3.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="/screenshot4.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="/screenshot5.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="/screenshot6.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>

        </div>
    </div><!--end images container-->

    <div class="similar games-container mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 pb-16">

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
    
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
    
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Cyberpunk 2077
                </a>
                <div class="text-gray-400 mt-1">Playstation 4, PC</div>
            </div>
    
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/doom.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
    
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    DOOM
                </a>
                <div class="text-gray-400 mt-1">Playstation 4, PC, Nintendo Switch</div>
            </div>
    
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/alyx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Half life: Alyx
                </a>
                <div class="text-gray-400 mt-1">PC (VR)</div>
            </div>
        </div>
    </div><!--end similar games-->
</div>
@endsection