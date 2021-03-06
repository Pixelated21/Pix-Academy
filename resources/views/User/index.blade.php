{{--TODO add multi language--}}
    <!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amber-Heart Academy</title>
</head>
<style>
    html {
        overflow: scroll;
        overflow-x: hidden;
    }

    ::-webkit-scrollbar {
        background-clip: padding-box;
        width: 5px; /* Remove scrollbar space */
        background: #ffffff; /* Optional: just make scrollbar invisible */
    }

    /* Optional: show position indicator in red */
    ::-webkit-scrollbar-thumb {
        /*background: #ff0073;*/

        background: black;


    }

    ::selection{
        color: orangered;
    }


    @keyframes scrolldown {
        0% {
            transform: translateY(20%) rotate(45deg);
            opacity: 0.7;
        }
        50% {
            transform: translateY(0%) rotate(45deg);
            opacity: 0.2;
        }
        100% {
            transform: translateY(20%) rotate(45deg);
            opacity: 0.7;
        }
    }
</style>
<body>
<div>
    <header class="bg-black" x-data="{ isOpen: false }">
{{--                        <video--}}
{{--                            autoplay--}}
{{--                            muted--}}
{{--                            loop--}}
{{--                            preload="auto"--}}
{{--                            class="absolute object-cover" style="filter: grayscale(0.3) contrast(1.5) opacity(0.1) blur(2px);">--}}
{{--                            <source src="{{"/media/pix-academy.mp4"}}" type="video/mp4"/>--}}
{{--                        </video>--}}

        <nav
            class="container relative  sticky z-50 w-screen top-0 px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center  justify-between">
                <a class="text-lg font-bold text-gray-700 transition-colors duration-300 transform md:text-2xl hover:text-white"
                   {{--                   href="#"><span class="text-pink-600">Pix</span>-<span class="text-blue-400">Academy</span></a>--}}
                   href="{{route("User-Home")}}"><span class="text-orange-500">Amber</span>-<span class="text-blue-600">HEART</span>
                    Academy
                </a>

                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button"
                            class="text-gray-200  text-red-300 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                            aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'"
                 class="flex-col mt-2 text-re space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-blue-600"
                   href="{{url("/courses")}}">Courses</a>
                <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-orange-500"
                   href="{{url('/gallery')}}">Gallery</a>
                <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-blue-600"
                   href="{{url('/dashboard')}}">Dashboard</a>
                <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-orange-500"
                   href="{{url('/contact')}}">Contact Us</a>


                @if(Auth::check())
                    <form action="{{url('/logout')}}" method="post">
                        @csrf
                        <button
                            class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:text-white hover:border-transparent hover:bg-red-600"
                        >Logout
                        </button>
                    </form>

                @else
                    <a class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition duration-300 transform border rounded hover:border-transparent hover:text-white hover:scale-1 hover:bg-orange-500"
                       href="{{url('/login')}}"
                    >Login
                    </a>
                @endif
            </div>
        </nav>

        <section class="flex items-center relative justify-center" style="height: 92vh;">
            <div class="text-center flex flex-col gap-y-8">
                {{--                <p class="text-xl font-medium tracking-wider text-white">Welcome To <span class="text-pink-600">Pix</span>-<span class="text-blue-400">Academy</span>--}}
                <p class="text-6xl font-medium tracking-wider text-white"><span
                        class="text-orange-500">AMBER</span>-<span class="text-blue-600">HEART</span>
                Academy
{{--                    <span class="text-yellow-400">Ac</span><span--}}
{{--                        class="text-green-400">ade</span><span class="text-gray-600">my</span>--}}
{{--                </p>--}}
                <div class="flex flex-col">
                    <h2 class="mt-6 text-3xl font-bold hover:text-white text-gray-300 md:text-2xl">Start learning from,
                        <br>
{{--                        <p class="text-sky">Jamaica's best institution</p>--}}
                        <span class="text-yellow-400">Jam</span><span class="text-green-400">ai</span><span
                            class="text-gray-700">ca's</span> best institution...</h2>

                    <div class="flex justify-center mt-8">
                        {{--        TODO Animated Scroll To Section--}}
                        <a class="px-8 py-2 text-lg font-medium text-white  duration-500 bg-orange-700 hover:scale-105 rounded  bg-gradient-to-l hover:from-blue-600 hover:to-orange-600"
                           href="{{url('/courses')}}">Apply Now</a>
                    </div>
                </div>

            </div>
        </section>

        {{--        Scroll Bar--}}

        {{--        TODO Animated Scroll To Section--}}
        <div class="flex justify-center items-center ">

            <Div style="width: 2em; height: 2em; background-color: transparent; z-index: 80;
            bottom: 25px; position: absolute; border-width: 0 0.25em 0.25em 0; border-style: solid; border-color: #504444; animation: scrolldown 1.5s ease-in-out infinite 0.20s;"></Div>

            <Div style="width: 2em; height: 2em; background-color: transparent; z-index: 80;
            bottom: 40px; position: absolute; border-width: 0 0.25em 0.25em 0; border-style: solid; border-color: green; animation: scrolldown 1.5s ease-in-out infinite 0.15s;"></Div>

            <Div style="width: 2em; height: 2em; background-color: transparent; z-index: 80;
            bottom: 55px; position: absolute; border-width: 0 0.25em 0.25em 0; border-style: solid; border-color: yellow; animation: scrolldown 1.5s ease-in-out infinite 0.10s;"></Div>

        </div>

        {{--        ---}}
    </header>

    <section class="bg-white duration-300 transform hover:scale-105">


        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2">

                    <h2 class="text-5xl font-bold text-gray-800">Guaranteed Jobs!! <br> For All Successful Graduates</h2>
                    <p class="max-w-md mt-4 text-gray-600 font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dignissimos dolorum, excepturi harum ipsa officia praesentium tempore voluptatem? Accusantium
                        alias beatae corporis deserunt eos, excepturi impedit iste iusto mollitia nesciunt odio officiis
                        optio possimus quasi ratione reiciendis repellendus similique sunt tempore unde, vel vero vitae.
                        Optio porro quidem quisquam rem voluptatibus!</p>
                </div>

                <div class="mt-8 md:mt-0 md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md transform rotate-2">
                            <img class="object-cover border-4 border-orange-500 object-center w-full rounded-md shadow" style="height: 500px;"
                                 src={{url('/public/homepage/Graduation.jpg')}}>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white duration-300 transform hover:scale-105 hover:scale-105 ">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover border-4 border-blue-500 object-center w-full rounded-md shadow" style="height: 500px;"
                                 src="{{url('/public/homepage/enginering.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="mt-8 md:mt-0 md:w-1/2 transform duration-300 ">
                    <h3 class="text-4xl font-bold text-gray-800">Lorem ipsum dolor sit amet, consectetur</h3>
                    <p class="max-w-md mt-4 font-semibold text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                        amet aspernatur explicabo sequi tenetur? Deserunt dicta, nostrum officia perspiciatis temporibus
                        vero? Atque cum cumque dolores eaque ex explicabo illo inventore laboriosam, libero mollitia
                        obcaecati perspiciatis provident reprehenderit suscipit unde. At laudantium natus saepe. Amet
                        distinctio magnam quo voluptate. Numquam, sint!</p>
                    {{--                    <a href="#" class="block mt-8 text-indigo-700 underline">Experienced team</a>--}}
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <h2 class="text-5xl font-semibold text-gray-800">Explore Top Courses</h2>

            {{--            Cards--}}

            <section class="text-gray-600 body-font">
                <div class="container px-5 py-14 mx-auto">
                    <div class="flex flex-wrap -m-4">

                        @foreach($topCourses as $topCourse)

                            <a href="{{'/courses/'.$topCourse->course_id}}">
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="hover:shadow-2xl duration-300 transform  hover:scale-105 hover:border-blue-600  h-full border-2 border-orange-600 border-opacity-60 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                         src="{{$topCourse->course_img}}" alt="blog">
                                    <div class="p-6">
                                        <h1 class="title-font text-xl font-bold text-gray-800 mb-3">{{$topCourse->course_nm}}</h1>
                                        <p class="leading-relaxed text-gray-600 font-medium truncate mb-3">
                                            {{$topCourse->course_desc}}
                                        </p>
                                        <div class="flex items-center flex-wrap ">
                                            <a></a>
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                     stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                Views </svg>{{$topCourse->views}}
              </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                Enrolled {{$topCourse->amt_enrolled}}
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>

                        @endforeach

                    </div>
                </div>
            </section>
            {{--            Cards End--}}

            <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-2">
                <div class="flex space-x-4">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 50 50" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M47.6268 23.7062C48.2466 24.4484 48.2466 25.5277 47.6268 26.2699L44.4812 30.0372C43.803 30.8493 43.4742 31.8971 43.5669 32.9512L44.0044 37.9287C44.0912 38.9165 43.4411 39.8188 42.4765 40.0491L38.0619 41.1031C36.9808 41.3612 36.0559 42.0575 35.5089 43.025L33.2053 47.099C32.6961 47.9995 31.5844 48.3631 30.6415 47.9375L26.6498 46.1358C25.6003 45.6621 24.3976 45.6636 23.3493 46.14L19.3597 47.9531C18.4161 48.3819 17.3014 48.0189 16.7912 47.1168L14.4911 43.0489C13.9441 42.0814 13.0192 41.3851 11.9381 41.127L7.52286 40.0728C6.55849 39.8426 5.90838 38.9406 5.99496 37.9529L6.43346 32.9505C6.52583 31.8968 6.19706 30.8494 5.5191 30.0375L2.37029 26.2665C1.75138 25.5253 1.75043 24.4477 2.36803 23.7054L5.52362 19.9127C6.1988 19.1012 6.52582 18.0557 6.43339 17.0041L5.99624 12.0308C5.90922 11.0408 6.56225 10.1372 7.52946 9.90904L11.9298 8.87123C13.0153 8.61522 13.9446 7.91765 14.4935 6.94684L16.7947 2.87709C17.3039 1.97664 18.4156 1.61302 19.3585 2.03858L23.3544 3.8422C24.4007 4.31444 25.5993 4.31444 26.6456 3.8422L30.6415 2.03858C31.5844 1.61301 32.6961 1.97663 33.2053 2.87709L35.5089 6.95112C36.0559 7.9186 36.9808 8.61486 38.0619 8.87297L42.4765 9.92701C43.4411 10.1573 44.0912 11.0596 44.0044 12.0474L43.5669 17.0249C43.4742 18.079 43.803 19.1268 44.4812 19.939L47.6268 23.7062ZM25 37.9326C26.8075 37.9326 28.2727 36.4674 28.2727 34.6599V34.4275C28.2727 32.6201 26.8075 31.1548 25 31.1548C23.1925 31.1548 21.7273 32.6201 21.7273 34.4275V34.6599C21.7273 36.4674 23.1925 37.9326 25 37.9326ZM25 28.377C26.8075 28.377 28.2727 26.9117 28.2727 25.1042V15.3162C28.2727 13.5087 26.8075 12.0435 25 12.0435C23.1925 12.0435 21.7273 13.5087 21.7273 15.3162V25.1042C21.7273 26.9117 23.1925 28.377 25 28.377Z"
                            stroke="currentColor" stroke-width="2"/>
                    </svg>

                    <div>
                        <h4 class="text-xl font-medium text-gray-800">Design concept</h4>
                        <p class="max-w-lg mt-4 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Autem corporis, debitis ea eveniet incidunt nisi nobis quas rerum temporibus vero. Accusamus
                            assumenda aut consequatur deleniti earum eligendi et in ipsum itaque maxime non porro
                            praesentium quibusdam quis quisquam ratione repellendus, reprehenderit repudiandae saepe
                            temporibus unde ut illum, voluptas.</p>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 50 50" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 25C1 11.8023 11.8023 1 25 1C38.1977 1 49 11.8023 49 25C49 38.1977 38.1977 49 25 49C11.8023 49 1 38.1977 1 25ZM33.36 35.3573C34.7228 36.1959 36.5074 35.771 37.346 34.4082C38.1913 33.0346 37.7522 31.2351 36.3692 30.4053L28.221 25.5164C27.6186 25.155 27.25 24.504 27.25 23.8014V14.375C27.25 12.7872 25.9628 11.5 24.375 11.5C22.7872 11.5 21.5 12.7872 21.5 14.375V25.8236C21.5 27.2127 22.2206 28.5023 23.4036 29.2302L33.36 35.3573Z"
                            stroke="currentColor" stroke-width="2"/>
                    </svg>

                    <div>
                        <h4 class="text-xl font-medium text-gray-800">Developing websites</h4>
                        <p class="max-w-lg mt-4 text-gray-600  ">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Animi autem consequuntur earum harum id, illo magnam nesciunt officiis porro quaerat
                            quis quo quos rem tempore velit. Ad eaque eius enim, esse excepturi fugit harum non odio
                            optio pariatur quam quas quibusdam ratione, reiciendis tempore! Ipsa iusto labore nihil
                            tempora voluptate!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white ">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="px-8 py-12 bg-black rounded-md md:px-20 md:flex md:items-center md:justify-between">
                <div>
                    <h3 class="text-2xl font-semibold text-white">Enabling transformation</h3>
                    <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam
                        ac
                        volutpat, viverra magna risus aliquam massa.</p>
                </div>

                <a class="px-8 py-2  text-lg font-medium md:mt-0  text-white transition-colors duration-300 transform bg-orange-600 rounded hover:bg-orange-500"
                   href="{{route("About-Us")}}">About Us</a>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="md:flex md:justify-between">
                <h2 class="text-5xl font-semibold text-gray-800">Newly Added Courses <br></h2>
                {{--                <a href="#" class="block mt-6 text-indigo-700 underline md:mt-0">Experienced team</a>--}}
            </div>

            <div class="grid gap-8 mt-20 md:grid-cols-2 lg:grid-cols-3">
                @foreach($newCourses as $newCourse)
{{--{{$newCourse}}--}}

                    <a href="{{'/courses/'.$newCourse->course_id}}" class="px-6 py-8 overflow-hidden bg-white border border-orange-600 duration-300 transform hover:scale-110 hover:border-blue-600 hover:shadow-2xl rounded-md shadow-md">
                        <h2 class="text-xl font-bold text-gray-800">{{$newCourse->course_nm}}</h2>
                        <p class="max-w-md mt-4 mb-6 font-semibold truncate  text-gray-600">{{$newCourse->course_desc}}</p>
                        <p class="flex text-sm font-bold text-gray-500 justify-end">{{\Carbon\Carbon::parse($newCourse->created_at)->diffForHumans()}}</p>
                    </a>

                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white ">
        <div class="max-w-full py-16  mx-auto text-center">
            <h2 class="text-5xl  font-bold text-gray-800">With Over A 99% Success Rate</h2>
            <p class="max-w-lg font-semibold mx-auto mt-10 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit
                esse
                cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia
                deserunt mollit anim id est laborum.</p>

            <img class=" w-screen object-cover object-center mt-16  shadow-md h-80"
                 src="{{url('public/homepage/fmc-group-career.jpg')}}">
        </div>
    </section>



    <footer class=" bg-white ">
        <x-user.footer/>
    </footer>
</div>

</body>
</html>
