<!doctype html>
<html data-theme="dark" lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="{{asset("js/profile_picture_changer.js")}}"></script>
    <script defer src="{{asset("js/sidebarToggle.js")}}"></script>
    <script defer src="{{asset("js/formControl.js")}}"></script>
    <script defer src="{{asset("js/qualification_passportImageHandler.js")}}"></script>


    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Page_Title')</title>
</head>
<body>

{{--@yield('navbar')--}}

<div>
    <div class="w-full relative mt-0 shadow-2xl bg-black">
        <div class="top h-screen w-full bg-black overflow-hidden relative">
            {{--                TODO give option to set a specific cover page or to randomize again--}}

            <img id="profile-cover" style="filter: brightness(40%) blur(3px)"
                 src="{{$student[0]["student"]["media"][0]["cover_pic"]}}" alt=""
                 class="bg w-full h-full object-cover object-center absolute z-0">

            <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">

                <form method="post" enctype="multipart/form-data" id="imageChanger" action="{{url("/ppChange")}}">
                    @csrf
                    <label>
                        <input name="profilePicture" class="hidden" id="file"
                               type="file" {{--onchange="changeImage(event)"--}}/>
                        <img id="output" src="{{$student[0]["student"]["media"][0]["profile_pic"]}}"
                             class="mb-20 h-56 w-56 object-cover rounded-full">
                    </label>
                </form>
                <h1 class="text-2xl font-semibold">{{ucwords(strtolower($student[0]["student"]["first_nm"]))}} {{ucwords(strtolower($student[0]["student"]["last_nm"]))}}

                </h1>
                <h4 class=" font-semibold">Joined Since: {{date('d F Y',strtotime(Auth::user()->created_at))}}</h4>
            </div>
        </div>
    </div>
</div>

<div class="flex bg-black h-screen w-screen">

    <div id="sideBar" class=" h-screen">
        <!-- Sidebar -->
        <x-user.profile_sidebar/>
        {{--        Sidebar--}}
    </div>

    <div class=" flex-col bg-white w-screen ">

        @yield('Content')

    </div>

</div>


</body>
</html>

