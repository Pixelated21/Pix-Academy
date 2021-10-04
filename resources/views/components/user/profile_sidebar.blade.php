<style>
    html {
        overflow: scroll;
        overflow-x: hidden;
    }
    ::-webkit-scrollbar {
        width: 3px;  /* Remove scrollbar space */
        background: black;  /* Optional: just make scrollbar invisible */
    }
    /* Optional: show position indicator in red */
    ::-webkit-scrollbar-thumb {
        /*background: #ff0073;*/
        background: white   ;
        /*color: white;*/
    }

    .active{
        background: deeppink;
    }
    .inactive{
        background: transparent;
    }

</style>

<div class="flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-black h-full text-white transition-all duration-300 border-none z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
        <ul id="list" class="flex flex-col py-5 space-y-2">
            <li class="px-5 mt-4 hidden md:block">
                <div class="flex flex-col items-center h-8 ">
                    <a class="text-lg font-extrabold text-gray-700 transition-colors duration-300 transform md:text-md hover:text-white"
                       {{--                   href="#"><span class="text-pink-600">Pix</span>-<span class="text-blue-400">Academy</span></a>--}}
                       href="{{route("User-Home")}}"><span class="text-orange-500">Amber</span>-<span class="text-blue-600">HEART</span>
                        Academy
                    </a>
                </div>
            </li>

            <li class="pt-20">
                <a href="{{url("/dashboard#header")}}" id="dashboard-btn" class="relative inactive  flex flex-row items-center h-11 focus:outline-none hover:bg-orange-600 duration-500 text-white-600 border-l-4 border-black hover:border-blue-600  pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{url("/courses")}}" class="relative inactive  flex flex-row items-center h-11 focus:outline-none hover:bg-orange-600 duration-500 text-white-600 border-l-4 border-black hover:border-blue-600  pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Apply For Course</span>
{{--                    <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>--}}
                </a>
            </li>


            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center mt-5 h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                </div>
            </li>
            <li>
                <a href="{{url('/dashboard/profile#header')}}" id="customize-profile-btn" class="relative inactive  flex flex-row items-center h-11 focus:outline-none hover:bg-orange-600 duration-500 text-white-600 border-l-4 border-black hover:border-blue-600  pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Customize Profile</span>
                </a>
            </li>

            <li>
                <form method="post" action="{{route("logout")}}"  class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-red-600 dark:hover:bg-gray-600 text-white-600 duration-500 hover:text-white-800 dark:hover:border-gray-800 pr-6">
                    @csrf
                    <button class="inline-flex w-full h-full  justify-start items-center ml-4">
                <span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
</svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>

<script>
let dashboard_btn = $("#dashboard-btn");
let profile_customize_btn = $("#customize-profile-btn");
console.log($("#list"));

function activeTab() {
    profile_customize_btn[0].classList.replace("inactive","active")
}
</script>
