<link rel="stylesheet" href="{{url('css/app.css')}}">

{{--<button class="btn-sm btn ">Testing</button>--}}
            <div class="absolute bg-gradient-to-b from-pink-600 to-white inset-0 z-0"></div>







{{--<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>--}}
{{--<style>--}}
{{--    .star {--}}
{{--        position: absolute;--}}
{{--        width: 2px;--}}
{{--        height: 2px;--}}
{{--        border-radius: 5px;--}}
{{--    }--}}

{{--    .box span {--}}
{{--        width: 20px;--}}
{{--        height: 20px;--}}
{{--        display: block;--}}
{{--        border-right: 2px solid #fff;--}}
{{--        border-bottom: 2px solid #fff;--}}
{{--        transform: rotate(45deg);--}}
{{--        margin: -10px;--}}
{{--        animation: animate 2s infinite;--}}
{{--    }--}}

{{--    .box span:nth-child(2) {--}}
{{--        animation-delay: -0.2s;--}}
{{--    }--}}

{{--    .box span:nth-child(3) {--}}
{{--        animation-delay: -0.4s;--}}
{{--    }--}}

{{--    @keyframes animate {--}}
{{--        0% {--}}
{{--            opacity: 0;--}}
{{--        }--}}
{{--        50% {--}}
{{--            opacity: 1;--}}
{{--            transform: rotate(45deg) translate(10px, 10px);--}}
{{--        }--}}
{{--        100% {--}}
{{--            opacity: 0;--}}
{{--        }--}}
{{--    }--}}

{{--    @keyframes twinkle {--}}
{{--        0% {--}}
{{--            transform: scale(1, 1);--}}
{{--            background: rgba(255, 255, 255, 0);--}}
{{--            animation-timing-function: linear;--}}
{{--        }--}}
{{--        40% {--}}
{{--            transform: scale(0.8, 0.8);--}}
{{--            background: rgba(255, 255, 255, 1);--}}
{{--            animation-timing-function: ease-out;--}}
{{--        }--}}
{{--        80% {--}}
{{--            background: rgba(255, 255, 255, 0);--}}
{{--            transform: scale(1, 1);--}}
{{--        }--}}
{{--        100% {--}}
{{--            background: rgba(255, 255, 255, 0);--}}
{{--            transform: scale(1, 1);--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}

{{--<section--}}
{{--    class="homescreen m-0 flex flex-col  justify-center bg-black  text-white "--}}
{{-->--}}
{{--    <nav>--}}
{{--        <ul class="flex justify-between text-xl py-8 px-8 md:px-48 ">--}}
{{--            <li>--}}
{{--                LOGO--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="https://github.com/Icesofty" target="_blank" rel="noopener noreferrer">Made with 💚 by IceSofty</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}

{{--    <h1 class="text-6xl  my-auto mx-auto  md:mx-48 ">--}}
{{--        Delightful <br />--}}
{{--        <span class="text-teal-400">Web Templates.</span>--}}
{{--    </h1>--}}
{{--</section>--}}
{{--<script>--}}
{{--    for (var i = 0; i < 100; i++) {--}}
{{--        var star =--}}
{{--            '<div class="star m-0" style="animation: twinkle ' +--}}
{{--            (Math.random() * 5 + 5) +--}}
{{--            's linear ' +--}}
{{--            (Math.random() * 1 + 1) +--}}
{{--            's infinite; top: ' +--}}
{{--            Math.random() * $(window).height() +--}}
{{--            'px; left: ' +--}}
{{--            Math.random() * $(window).width() +--}}
{{--            'px;"></div>';--}}
{{--        $('.homescreen').append(star);--}}
{{--    }--}}

{{--</script>--}}


{{--<div class="flex flex-col    justify-center">--}}
{{--    <div>--}}
{{--<nav id="header" class="fixed bg-black text-white w-full z-20 top-0">--}}
{{--    <div id="progress" class="h-1 z-40 top-0"--}}
{{--         style="background:linear-gradient(to right, #fcbe00 var(--scroll), transparent 0);"></div>--}}
{{--    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">--}}
{{--        <div class="block lg:hidden pl-8 p-2">--}}
{{--            <a class="text-yellow-300 font-bold text-base no-underline hover:no-underline" href="#">--}}
{{--                TechFest--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="block lg:hidden pr-4">--}}
{{--            <button id="nav-toggle" class="flex items-center px-3 py-2 text-yellow-300 border-gray-600 focus:outline-none">--}}
{{--                <svg fill="text-yellow-300" viewBox="0 0 20 20" class="w-6 h-6 fill-current">--}}
{{--                    <title>Menu</title>--}}
{{--                    <path fill-rule="evenodd"--}}
{{--                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"--}}
{{--                          clip-rule="evenodd"></path>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--        <div class="w-full flex-grow p-4 lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-black md:bg-transparent z-20"--}}
{{--             id="nav-content">--}}
{{--            <ul class="list-reset lg:flex justify-center flex-1 items-center">--}}
{{--                <li class="mr-3">--}}
{{--                    <a class="border-b-0 md:border-b-4 border-yellow-300 inline-block py-2 px-4 text-yellow-300 font-bold"--}}
{{--                       href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="mr-3">--}}
{{--                    <a class="inline-block hover:text-yellow-300 hover:text-underline py-2 px-4" href="#">Events</a>--}}
{{--                </li>--}}
{{--                <li class="mr-3">--}}
{{--                    <a class="inline-block hover:text-yellow-300 hover:text-underline py-2 px-4" href="#">Team</a>--}}
{{--                </li>--}}
{{--                <li class="mr-3">--}}
{{--                    <a class="inline-block hover:text-yellow-300 hover:text-underline py-2 px-4" href="#">About</a>--}}
{{--                </li>--}}
{{--                <li class="mr-3">--}}
{{--                    <a class="inline-block hover:text-yellow-300 hover:text-underline py-2 px-4" href="#">Contact</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--    </div>--}}
{{--    <div style="height: 200vh">--}}

{{--    </div>--}}



{{--</div>--}}

{{--<script>--}}
{{--    var h = document.documentElement,--}}
{{--        b = document.body,--}}
{{--        st = 'scrollTop',--}}
{{--        sh = 'scrollHeight',--}}
{{--        progress = document.querySelector('#progress'),--}}
{{--        scroll;--}}
{{--    var scrollpos = window.scrollY;--}}
{{--    var header = document.getElementById("header");--}}
{{--    var navcontent = document.getElementById("nav-content");--}}

{{--    document.addEventListener('scroll', function () {--}}
{{--        scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;--}}
{{--        progress.style.setProperty('--scroll', scroll + '%');--}}
{{--        scrollpos = window.scrollY;--}}

{{--        if (scrollpos > 10) {--}}
{{--            header.classList.add("bg-black");--}}
{{--            navcontent.classList.remove("bg-black");--}}
{{--            navcontent.classList.add("bg-black");--}}
{{--        } else {--}}
{{--            header.classList.remove("bg-black");--}}
{{--            navcontent.classList.remove("bg-black");--}}
{{--            navcontent.classList.add("bg-black");--}}

{{--        }--}}

{{--    });--}}

{{--    document.getElementById('nav-toggle').onclick = function () {--}}
{{--        document.getElementById("nav-content").classList.toggle("hidden");--}}
{{--    }--}}
{{--</script>--}}
