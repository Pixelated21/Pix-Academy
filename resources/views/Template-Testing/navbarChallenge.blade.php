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

        <!-- component -->

        <div class="w-full">
            <div class="flex bg-white" style="height:590px;">
                <div
                    class="flex  items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                    <div>

                        <h2 class="text-3xl font-semibold mt-10 md:mt-2 text-gray-800 md:text-4xl">Web Development</h2>

                        <h2 class="font-semibold text-gray-800 md:text-xl md:mt-1">Stony Hill Academy</h2>

                        <p class="mt-2 text-sm  text-gray-500 mt-5 md:text-base ">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi consequatur corporis
                            culpa cumque dicta dolore eos eum expedita explicabo fugit laboriosam laudantium modi
                            necessitatibus odio praesentium quas quis rem repudiandae soluta, unde, velit veritatis. A
                            alias animi, atque ea eveniet expedita impedit ipsa ipsum iusto laboriosam minima nam natus
                            nobis optio placeat porro, quam qui sapiente vel voluptate? Architecto asperiores ea esse in
                            magnam, maiores necessitatibus nemo perspiciatis quibusdam voluptatibus? Adipisci alias
                            dolore doloremque, fugiat impedit incidunt laborum maxime velit. Atque autem earum enim est
                            exercitationem, expedita iure magni maiores nam neque nihil, nulla quidem rem totam velit
                            voluptate!


                        </p>

                        <div class="flex justify-around text-xs mt-5 flex-col md:flex-row lg:flex-row">
                            <div><span class="font-extrabold">Modality: </span> <span class="font-bold"> Blended</span>
                            </div>
                            <div><span class="font-extrabold ">Training Starts: </span> <span class="font-bold"> 09-02-2021</span>
                            </div>
                            <div><span class="font-extrabold">Training Ends: </span><span
                                    class="font-bold"> 08-02-2022</span></div>
                            <div><span class="font-extrabold">Award: </span><span class="font-bold"><span
                                        class="font-bold">NVQJ Award</span></span>
                            </div>
                        </div>

                        <div class=" text-xs mt-1 px-1">
                            <div><span class="font-extrabold">Telephone: </span><span
                                    class="font-bold"> +1876-845-7729</span></div>
                        </div>

                        <div class=" text-xs mt-1 px-1">
                            <div><span class="font-extrabold">Address: </span><span class="font-bold"> 234 Spanish Town Rd,Kingston</span>
                            </div>
                        </div>

                        <br>
                        <div class="text-md">
                            <span style="font-family: 'Proza Libre',sans-serif;"
                                  class="font-extrabold">Price: </span><span> $5000</span>
                    </div>

                    <div class="flex justify-center w-full  lg:justify-start mt-6">

                        <button
                            class="bg-pink-600 text-base w-full px-5 py-3 mb-3 md:m-1  shadow-sm font-medium tracking-wider text-pink-100 rounded hover:shadow-2xl hover:bg-pink-700">
                            Registered
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(30% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover object-center"
                     style="background-image: url(https://images.unsplash.com/photo-1454165205744-3b78555e5572?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80)">
                    <div class="h-full bg-black opacity-50"></div>
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
