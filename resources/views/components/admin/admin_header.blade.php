<div class=" border border-white  bg-black bg-opacity-100 rounded-t">

    <div class=" mx-auto md:w-full md:mx-0 ">

        <div class="flex justify-between items-center">
            <div class="inline-flex  items-center space-x-4">
                <img
                    class="w-10 h-10 object-cover z-0 rounded-full"
                    alt="User avatar"
                    src="{{Auth::user()->profile_picture}}"
                />

                <h1 class="text-gray-200 text-2xl subpixel-antialiased">{{ucfirst(strtolower(Auth::user()->first_name))}} {{ucfirst(strtolower(Auth::user()->last_name))}}</h1>
            </div>

            <div>
                <button id="sideBarToggle">
                    <svg id="hideSideBar" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                    <svg id="showSideBar" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>

    </div>


</div>
