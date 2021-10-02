<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<main class="h-screen">

    <div class="sticky z-50 top-0">
        <x-user.nav-bar/>
    </div>

    <div>
        <!-- component -->
        <div class="p-10 text-gray-700 font-sans quicksand">
            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 m-5 mb-10 gap-4 ">


                @foreach($courses as $course)
                <div class="bg-white overflow-hidden hover:bg-orange-100 border border-gray-200 p-5 rounded">
                    <img src="{{ $course->course_img }}"
                         class="h-10 w-full mr-2 object-cover object-center filter rounded-t  brightness-50" />
                    <div class="m-2  text-justify text-sm">

                        <div class="flex justify-between items-center">
                            <h2 class="font-bold text-lg mb-5 h-3">{{ $course->course_nm }} </h2>
                            <p class="text-right text-xs"></p>


                        </div>
                        <div>
                            <h2 class="font-bold text-xs mb-5">Stony Hill Academy </h2>
                        </div>
                        <p class="text-xs">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </div>
                    <div class="w-full flex items-center justify-between mt-4">
                        <div class="text-xs font-medium te flex w-full space-x-2">
                            <p>Duration: {{\Carbon\Carbon::parse(strtotime($course->training_end))->diffInDays()}} Days</p>
                            <p>Modality: {{$course->modality}}</p>

                        </div>
                        <a href="{{url("/courses/$course->course_id")}}"
                           class="text-orange-500 font-bold hover:text-blue-600 duration-300 inline-flex  items-center md:mb-2 lg:mb-0">Apply
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>

</main>

<footer>
    <x-user.footer/>
</footer>


</body>
</html>
