<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="{{asset("js/adminFormControl.js")}}"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>


<div class=" flex h-screen border border-black">

    <div>
        <x-admin.admin_sidebar/>
    </div>


    <div class="w-full h-full flex flex-col ">

        <div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
                <div
                    class="bg-black cursor-pointer hover:bg-gray-800 duration-300 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-pink-600 dark:border-gray-600 text-white font-medium group">
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{$studentCount}}</p>
                        <p>Students</p>
                    </div>
                </div>
                <div
                    id="course_card_btn"
                    class="bg-black cursor-pointer hover:bg-gray-800 duration-300  dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-pink-600 dark:border-gray-600 text-white font-medium group">
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p style="color: #FBE5F1" class="text-2xl">
                            {{$courseCount}}
                        </p>
                        <p>Courses</p>
                    </div>
                </div>
                <div
                    id="institution_card_btn"
                    class="bg-black cursor-pointer hover:bg-gray-800 duration-300  dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-pink-600 dark:border-gray-600 text-white font-medium group">
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{$institutionCount}}</p>
                        <p>Institution</p>
                    </div>
                </div>
                <div
                    id="applicant_card_btn"
                    class="bg-black cursor-pointer hover:bg-gray-800 duration-300 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-pink-600 dark:border-gray-600 text-white font-medium group">
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-right cursor-pointer">
                        <p class="text-2xl">{{$applicationCount}}</p>
                        <p>Applications</p>
                    </div>
                </div>
            </div>
        </div>
        @if (session()->has("message"))

        <div class="w-full bg-green-300 py-4 text-2xl font-bold text-center">{{session("message")}}</div>

        @endif

        <div class="overflow-y-auto">
            @yield('content')
        </div>
    </div>

</div>


</body>
</html>
