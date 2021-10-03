<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Proza+Libre:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap');
</style>
<body>

<main>

    <div>
        <x-user.nav-bar/>
    </div>

    <div >
        <!-- component -->

{{--        {{dd($courseStatusDetail)}}--}}

        <div class="w-full">
            <div class="flex bg-white h-screen" style="height:594px;">
                <div
                    class="flex  items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                    <div>

                        <h2 class="text-3xl font-semibold mt-5 md:mt-3 text-gray-800 md:text-4xl">{{$course[0]["course_nm"]}}</h2>

                        <h2 class="font-semibold text-gray-800 md:text-xl md:mt-1">{{$course[0]["institution"]["institution_nm"]}}</h2>

                        <p class="mt-2 text-sm md:h-64  text-gray-500 mt-5 md:text-base ">

                            {{$course[0]['course_desc']}}

                        </p>

                        <div class="flex justify-around text-xs mt-5 flex-col md:flex-row lg:flex-row">
                            <div><span class="font-extrabold">Modality: </span> <span class="font-bold">{{$course[0]["modality"]}}</span>
                            </div>
                            <div><span class="font-extrabold ">Training Starts: </span> <span class="font-bold">{{date("d-M-Y",strtotime($course[0]["training_start"]))}}</span>
                            </div>
                            <div><span class="font-extrabold">Training Ends: </span><span
                                    class="font-bold">{{$course[0]["training_end"]}}</span></div>
                            <div><span class="font-extrabold">Award: </span><span class="font-bold"><span
                                        class="font-bold">{{$course[0]["award_type"]}}</span></span>
                            </div>
                        </div>

                        <div class=" text-xs mt-1 px-1">
                            <div><span class="font-extrabold">Telephone: </span><span
                                    class="font-bold"> {{$course[0]["institution"]["telephone_nbr"]}}</span></div>
                        </div>

                        <div class=" text-xs mt-1 px-1">
                            <div><span class="font-extrabold">Address: </span><span class="font-bold">{{$course[0]["institution"]["address"]}}</span>
                            </div>
                        </div>

                        <br>
                        <div class="text-md">
                            <span style="font-family: 'Proza Libre',sans-serif;"

                                  class="font-extrabold">Price: </span><span>${{number_format((int)$course[0]["price"],2)}} JMD</span>
                        </div>

                        <div class="flex justify-center w-full  lg:justify-start mt-6">



                            @if (session()->missing('register_status'))

                                @if (!isset($courseStatusDetail[0]))

                                    <form class="w-full" method="post" action="{{route("On-Course-Application")}}">
                                        @csrf
                                        <button
                                            value="{{$course[0]["course_id"]}}"
                                            name="course"
                                            class="bg-orange-500  text-base w-full px-5 py-3  shadow-sm font-medium tracking-wider text-pink-100 rounded hover:shadow-2xl duration-300 hover:bg-orange-600">
                                            Apply
                                        </button>
                                    </form>

                                @else
                                     <a
                                            href="{{$courseStatusDetail[0]["link"]}}"
                                            class="{{$courseStatusDetail[0]['bg-color']}} text-center  text-base w-full px-5 py-3  shadow-sm font-medium tracking-wider duration-300 text-pink-100 rounded hover:shadow-2xl hover:{{$courseStatusDetail[0]['hover-bg']}}">
                                            {{$courseStatusDetail[0]['message']}}
                                        </a>

                                @endif


                            @elseif (session('register_status') === 'Registered Successfully')


                                <a
                                    href="{{session()->get('link')}}"
                                    class="bg-green-600 text-center text-base w-full px-5 py-3  shadow-sm font-medium tracking-wider text-pink-100 rounded hover:shadow-2xl hover:bg-green-700">
                                    {{session('register_status')}}
                                </a>

                            @else

                                <a
                                    href="{{session()->get('link')}}"
                                    class="bg-red-600 text-center text-base w-full px-5 py-3  shadow-sm font-medium tracking-wider text-pink-100 rounded hover:shadow-2xl hover:bg-red-700">
                                    {{session('register_status')}}
                                </a>

                            @endif


                        </div>
                    </div>
                </div>
                <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(30% 0, 100% 0%, 100% 100%, 0 100%)">
                    <div class="h-full object-cover object-center"
                         style="background-image: url({{$course[0]["course_img"]}}); background-position: center; background-size:cover; background-repeat: no-repeat">
                        <div class="h-full bg-black opacity-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


{{--<footer>--}}
{{--    <x-user.footer/>--}}
{{--</footer>--}}


</body>
</html>
