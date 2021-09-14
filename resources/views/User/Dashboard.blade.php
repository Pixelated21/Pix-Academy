@extends('layouts.profile')



@section('Content')

    <section class=" bg-opacity-50 ">

        <div class="mx-auto h-screen flex flex-col">

            <div id="header">
                <x-user.profile_header/>
            </div>


            <div class="bg-black dark:bg-black h-full flex flex-col items-center justify-center   space-y-6 0">

                <div class="bg-black h-full  flex flex-col jus w-full">
                    <!-- component -->
                    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>


                    <section
                        class="h-full w-full bg-white flex flex-col-reverse sm:flex-row min-h-0 min-w-0 overflow-hidden">

                        <main class="sm:h-full w-full flex-1 flex flex-col min-h-0 min-w-0 overflow-auto">

                            <section class="flex-1 pt-3 md:p-6 lg:mb-0 lg:min-h-0 lg:min-w-0">

                                <div class="flex flex-col flex-between lg:flex-row h-full w-full">

                                    <div
                                        class=" justify-center h-full  w-full  px-3 flex flex-row lg:flex-col flex-wrap lg:flex-nowrap">

                                        <!-- control content left -->

                                        <div class="bg-red-200 w-full h-52 min-h-0 min-w-0 mb-4">
                                            <div class="w-full h-full ">
                                                <div
                                                    class="widget h-full w-full p-6 bg-white border border-black dark:bg-gray-900 dark:border-gray-800">
                                                    <div class="flex  flex-row items-center justify-between">
                                                        <div class="flex  flex-col">
                                                            <div class="text-xs uppercase font-light text-gray-500">
                                                                No New Activity
                                                            </div>

                                                        </div>
                                                        <a href="#">
                                                            <svg class="stroke-current text-gray-500" fill="none"
                                                                 height="24" stroke="currentColor"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 stroke-width="2" viewbox="0 0 24 24" width="24"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                                </path>
                                                                <polyline points="15 3 21 3 21 9">
                                                                </polyline>
                                                                <line x1="10" x2="21" y1="14" y2="3">
                                                                </line>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-red-200 w-full h-52 min-h-0 min-w-0 mb-4">
                                            <div class="w-full h-full">
                                                <div
                                                    class=" h-full w-full bg-white border border-black dark:bg-gray-900 dark:border-gray-800">
                                                    <div class="flex flex-row h-full items-center justify-between">

                                                        <div class="w-1/3   h-full">
                                                            <div class="h-full w-full">
                                                                <img class="object-cover object-center h-full w-full "
                                                                     src="https://source.unsplash.com/random">
                                                            </div>
                                                        </div>

                                                        <div class="text-black h-full w-2/3 flex-col flex ">

                                                            <div>
                                                                <h1 class="text-2xl text-center bg-gray-200 border-b border-black">
                                                                    Web Development</h1>
                                                            </div>

                                                            <div class=" h-full flex justify-center items-center">
                                                                <div class="flex justify-around flex-col h-full w-full">
                                                                    <div>
                                                                        <div class="flex justify-around"><h1>
                                                                                Duration</h1>
                                                                            <h1>Modality</h1>
                                                                            <h1>Lovely</h1></div>

                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipisicing elit.
                                                                        Aperiam consectetur ducimus libero. Aliquam
                                                                        dicta,
                                                                        inventore qui quibusdam rem sequi.
                                                                        Accusamus adipisci dolorem eaque et inventore
                                                                        libero nisi quos, sunt tenetur!
                                                                    </div>

                                                                    {{--                                                                                <p>Action</p>--}}
                                                                </div>


                                                                <div
                                                                    class=" h-full flex justify-center w-5 items-center bg-yellow-300 ">
                                                                    <p class="transform rotate-90  text-center">
                                                                        Pending</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </section>
                        </main>
                    </section>

                    <style>
                        @import url("https://fonts.googleapis.com/css2?family=Nunito&display=swap");

                        body {
                            font-family: "Nunito", sans-serif;
                        }

                        main {
                            font-size: clamp(0.9rem, 3vw, 1rem);
                        }

                        #page-icon img {
                            -webkit-animation: cssfilter 3s infinite;
                        }


                        @-webkit-keyframes cssfilter {
                            0%, 100% {
                                filter: invert(75%) drop-shadow(0px 0px 2px blue)
                            }

                            50% {
                                filter: invert(0%) drop-shadow(0px 0px 1px teal);
                            }
                        }
                    </style>
                </div>

            </div>
        </div>
    </section>
@endsection

