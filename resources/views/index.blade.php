@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
    <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">

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
    <!--End popular games-->
    <div class="flex flex-col lg:flex-row my-10">
        <div class="recently-reviewd w-full lg:w-3/4 mr-0 lg:mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewd</h2>
            <div class="recently-reviewd-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="right:-20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                            Final Fantasy VII Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <p class="mt-6 text-gray-400 hidden lg:block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi
                            soluta quo sed aut dolore dolor, quasi dolorum, placeat tempore quibusdam vel officiis quas
                            adipisci quos quis quidem voluptatum repudiandae error!</p>
                    </div>
                </div>
            </div>

            <div class="recently-reviewd-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="right:-20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                            Final Fantasy VII Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <p class="mt-6 text-gray-400 hidden lg:block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi
                            soluta quo sed aut dolore dolor, quasi dolorum, placeat tempore quibusdam vel officiis quas
                            adipisci quos quis quidem voluptatum repudiandae error!</p>
                    </div>
                </div>
            </div>

            <div class="recently-reviewd-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="right:-20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                            Final Fantasy VII Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <p class="mt-6 text-gray-400 hidden lg:block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi
                            soluta quo sed aut dolore dolor, quasi dolorum, placeat tempore quibusdam vel officiis quas
                            adipisci quos quis quidem voluptatum repudiandae error!</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="lg:w-1/4 space-y-12 mt-12 lg:mg-0">

            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
            <div class="most anticipated-container space-y-10 mt-8">

                <div class="game flex">
                    <a href="#">
                        <img src="/luigi.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Luigi's Mansion</a>
                        <div class="text-gray-400 text-sm mt-1">September 16, 2020</div>
                    </div>
                </div>

                <div class="game flex">
                    <a href="#">
                        <img src="/resident.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Resident Evil 3</a>
                        <div class="text-gray-400 text-sm mt-1">September 16, 2020</div>
                    </div>
                </div>

                <div class="game flex">
                    <a href="#">
                        <img src="/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">September 16, 2020</div>
                    </div>
                </div>

            </div>

            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Coming Soon</h2>
            <div class="coming soon-container space-y-10 mt-8">

                <div class="game flex">
                    <a href="#">
                        <img src="/avengers.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Avengers</a>
                        <div class="text-gray-400 text-sm mt-1">September 16, 2020</div>
                    </div>
                </div>

                <div class="game flex">
                    <a href="#">
                        <img src="/tlou2.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">The last of us</a>
                        <div class="text-gray-400 text-sm mt-1">September 16, 2020</div>
                    </div>
                </div>

                <div class="game flex">
                    <a href="#">
                        <img src="/animalcrossing.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Animal Csrossing</a>
                        <div class="text-gray-400 text-sm mt-1">September 16, 2020</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div><!--End container-->
@endsection