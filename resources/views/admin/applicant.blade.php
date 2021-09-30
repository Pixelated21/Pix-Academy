<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<div class=" flex h-screen">

    <div>


        <div
            class="flex flex-col top-14 left-0 w-14 bg-black h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul id="list" class="flex flex-col py-5 space-y-2">
                    <li class="px-5 mt-4 hidden md:block">
                        <div class="flex flex-col items-center h-8 ">
                            <a href="{{route("Admin-Home")}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/>
                                </svg>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>


    <div class="w-full h-full flex flex-col ">


        @if (session()->has("message"))

            <div class="w-full bg-green-300 py-4 text-2xl font-bold text-center">{{session("message")}}</div>

        @endif

        <div class="overflow-y-auto">
            <div class="bg-white">
                <div class="flex pt-2 ">
                    <div class=" mx-auto px-8">
                        <div class="flex px-10">
                            <div class="w-1/4">
                                <div class="mb-4">
                                    <img
                                        class="rounded-lg"
                                        src="{{$studentInfo[0]["media"][0]['passport_pic']}}">

                                </div>

                                <div class="mb-4">
                                    <div class="text-3xl font-medium text-grey-darkest">
                                        {{$studentInfo[0]["first_nm"]}}
                                        {{$studentInfo[0]["last_nm"]}}
                                    </div>
                                    <div class="text-grey-dark">
                                        <span class="text-md">DOB:</span>
                                        <span
                                            class="font-light">{{date("d F Y",strtotime($studentInfo[0]["dob"]))}}</span>
                                    </div>
                                </div>
                                <div class="pb-6 border-b text-sm">
                                    {{$studentInfo[0]["tele_nbr"]}}
                                </div>
                                <div class="flex items-center text-left py-4 mb-4 border-b">
                                    <div class="flex items-center mr-2">
                                        <svg class="fill-current text-grey-dark w-4 h-4" width="24" height="24"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"/>
                                        </svg>
                                    </div>
                                    <div>

                                        <p class="no-underline text-sm">
                                            {{$studentInfo[0]["users"]["email_addr"]}}
                                        </p>
                                    </div>
                                </div>
                                <div class="text-2xl text-red-600 font-bold">
                                    {{\App\Models\Course::find($application["course_id"])->course_nm}}
                                    <span class="text-lg text-black">Application</span>
                                </div>
                            </div>
                            <div class="w-3/4 ml-6 mt-2">
                                <div class="flex">
                                    <div class="w-full border px-4 py-4 mb-4 -mr-2 rounded text-sm">
                                        <div class="flex">
                                            <div class="mr-2">
                                                <span class="text-xl">Residential Information</span>
                                            </div>
                                        </div>
                                        <div class="flex text-md flex-col mt-3">
                                            <div class="mr-4 font-thin text-sm">
                                                <span
                                                    class="font-bold">Address Line 1:</span> {{$studentInfo[0]["addr_ln_1"]}}
                                            </div>
                                            <div class="mr-4 font-thin text-sm">
                                                <span
                                                    class="font-bold">Postal Zone:</span> {{$studentInfo[0]["postal_zone"]}}
                                            </div>
                                            <div class="mr-4 font-thin text-sm">
                                                <span class="font-bold">City:</span> {{$studentInfo[0]["city_nm"]}}
                                            </div>
                                            <div class="mr-4 font-thin text-sm">
                                                <span class="font-bold">Parish:</span> {{$studentInfo[0]["parish_nm"]}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="w-full border px-4 py-4 mb-4 -mr-2 rounded text-sm">
                                        <div class="flex">
                                            <div class="mr-2">
                                                <span class="text-xl">Payment Information</span>
                                            </div>
                                        </div>
                                        <div class="flex text-md flex-col mt-3">
                                            <div class="mr-4 font-thin text-sm">
                                                <span
                                                    class="font-bold">Card Holder Name:</span> {{$studentInfo[0]["payment_info"][0]["card_holder_nm"]}}
                                            </div>
                                            <div class="mr-4 font-thin text-sm">
                                                <span
                                                    class="font-bold">Billing Address:</span> {{$studentInfo[0]["payment_info"][0]["billing_addr"]}}
                                            </div>
                                            <div class="mr-4 font-thin text-sm">
                                                <span
                                                    class="font-bold">CVV:</span> {{$studentInfo[0]["payment_info"][0]["cvv"]}}
                                            </div>
                                            <div class="mr-4 font-thin text-sm">
                                                <span
                                                    class="font-bold">Expiration Month:</span> {{$studentInfo[0]["payment_info"][0]["exp_month"]}}
                                            </div>
                                            <div class="mr-4 font-thin text-sm">
                                                <span
                                                    class="font-bold">Expiration Year:</span> {{$studentInfo[0]["payment_info"][0]["exp_year"]}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="w-1/2 border px-4 py-4 mb-4
    -mr-2
rounded text-sm">
                                        <div class="flex">
                                            <div>
                                                <span class="text-xl">Tax Registration Number</span>
                                            </div>
                                        </div>
                                        <div class="flex text-sm mt-6">
                                            <div class="mr-4 font-semibold text-sm">
                                                {{$studentInfo[0]["trn_nbr"]}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 border px-4 py-4 mb-4 ml-4 rounded text-sm">

                                        <div class="flex">
                                            <div>
                                                <span class="text-xl">Qualifications</span>
                                            </div>
                                        </div>
                                        <div class="flex text-sm mt-6">
                                            <a class="w-full"
                                               download="{{($studentInfo[0]["first_nm"] ." ". $studentInfo[0]["last_nm"])}} Qualifications"
                                               href="{{$studentInfo[0]["media"][0]['passport_pic']}}">
                                                <div class="flex justify-between  w-full">
                                                    <div>
                                                        <span class="text-md font-bold">Click To Download</span>
                                                    </div>

                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                        </svg>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="mt-8 ">
                    <div class="container mx-auto px-8 ">
                        <div class="px-10 ">
                            <form method="post"
                                  action="{{route("Admin_Applicant_Action",[$application["course_applicants_id"],$application["course_id"]])}}"
                                  class="flex items-center h-full justify-around border-t py-8">
                                @csrf
                                <div class="justify-start h-10  justify-between text-xs w-2/5 flex">
                                    <button name="accepted"
                                            class="bg-green-400 rounded w-full h-full text-2xl font-semibold">Accept
                                    </button>
                                </div>

                                <div class="justify-end justify-between h-10 text-xs w-2/5 flex text-right">
                                    <button name="rejected"
                                            class="bg-red-600 rounded w-full h-full text-2xl font-semibold">Reject
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </body>
        </div>
    </div>

</div>
