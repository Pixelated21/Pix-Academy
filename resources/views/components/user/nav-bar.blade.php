<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<style>
    html {
        overflow: auto;
    }
    ::-webkit-scrollbar {
        width: 5px;  /* Remove scrollbar space */
        /*background: transparent;  !* Optional: just make scrollbar invisible *!*/
    }
    /* Optional: show position indicator in red */
    ::-webkit-scrollbar-thumb {
        /*background: #ff0073;*/
        background: black   ;
    }
</style>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<header class="bg-black" x-data="{ isOpen: false }">
    <nav class="container px-6 py-4 mx-auto md:flex te md:justify-between md:items-center">
        <div class="flex items-center justify-between sna">
            <a class="text-lg font-bold text-gray-700 transition-colors duration-300 transform md:text-2xl hover:text-white"
               href="{{route("User-Home")}}"><span class="text-orange-500">Amber</span>-<span class="text-blue-600">HEART</span>
                Academy
            </a>
            <!-- Mobile menu button -->
            <div @click="isOpen = !isOpen" class="flex md:hidden">
                <button type="button" class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400"
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
             class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
            <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-blue-600"
               href="{{url("/courses")}}">Courses</a>
            <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-orange-500"
               href="{{url('/gallery')}}">Gallery</a>
            <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-blue-600"
               href="{{url('/dashboard')}}">Dashboard</a>
            <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-orange-500"
               href="{{url('/contact')}}">Contact Us</a>


            @auth
                <form action="{{url('/logout')}}" method="post">
                    @csrf
                    <button
                        class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:text-white hover:border-transparent hover:bg-red-600"
                    >Logout
                    </button>
                </form>

            @else
                <a class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:text-black hover:bg-pink-400" \
                   href="{{url('/login')}}"
                >Login
                </a>
            @endauth

        </div>
    </nav>
</header>

