@extends('layouts.profile')


@section('Content')


    {{--TODO Window Snap--}}

    <section class=" bg-opacity-50 ">
        <div class="mx-auto h-full flex flex-col">

            <div id="header">
                <x-user.profile_header/>
            </div>

            <div
                class="md:inline-flex flex-col md:flex-row  bg-white space-y-4 justify-center md:space-y-0 w-full p-4 text-gray-500 items-center">

                <button id="personalInfo-Header" class="md:w-1/5  mx-auto max-w-sm mb-3  text-center text-2xl">
                    Personal
                </button>
                <button id="residentialInfo-Header" class="md:w-1/5 mx-auto max-w-sm mb-3  text-center text-2xl">
                    Residential
                </button>
                <button id="QualificationInfo-Header" class="md:w-1/5 mx-auto max-w-sm mb-3  text-center text-2xl">
                    Qualifications
                </button>
                <button id="paymentInfo-Header" class="md:w-1/5 mx-auto max-w-sm mb-3  text-center text-2xl">Payment
                </button>

            </div>

            <div class="bg-white dark:bg-black h-full flex flex-col items-center justify-start -mt-1  mt-0 space-y-6 0">

                <form id="residentialInfo" action="{{url('/riUpdate')}}" method="post"
                      class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    @csrf

                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Address Line 1 </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('street_address'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="street_address"
                                    type="text"
                                    disabled
                                    autocomplete="false"
                                    value="{{$student[0]["student"]["addr_ln_1"]}}"
                                    placeholder="Street Address"
                                    class="@error('street_address') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>


                        {{--                        {{dd(Auth::user())}}--}}
                        <div class="md:w-full max-w-sm mx-auto">
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">City </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('city_nm'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="city_nm"
                                    type="text"
                                    disabled
                                    autocomplete="false"
                                    value="{{$student[0]["student"]["city_nm"]}}"
                                    placeholder="City"
                                    class="@error('city_nm') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>

                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Postal Zone </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('postal_zone'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="postal_zone"
                                    type="text"
                                    disabled
                                    autocomplete="false"
                                    value="{{$student[0]["student"]["postal_zone"]}}"
                                    placeholder="Postal Zone"
                                    class="@error('postal_zone') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>

                        <div class="md:w-full max-w-sm mx-auto">
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Parish </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('parish'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <select
                                    name="parish"
                                    disabled
                                    class="@error('parish') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">
                                    <option selected disabled>Select A Parish</option>

                                    <option @if($student[0]['student']["parish_nm"] === "St.Catherine" ) selected @endif value="St.Catherine">St.Catherine</option>
                                    <option @if($student[0]['student']["parish_nm"] === "Clarendon" ) selected @endif value="Clarendon">Clarendon</option>
                                    <option @if($student[0]['student']["parish_nm"] === "St.Andrew" ) selected @endif value="St.Andrew">St.Andrew</option>
                                    <option @if($student[0]['student']["parish_nm"] === "St.Thomas" ) selected @endif value="St.Thomas">St.Thomas</option>
                                    <option @if($student[0]['student']["parish_nm"] === "Hanover" ) selected @endif value="Hanover">Hanover</option>
                                    <option @if($student[0]['student']["parish_nm"] === "St.James" ) selected @endif value="St.James">St.James</option>
                                    <option @if($student[0]['student']["parish_nm"] === "St.Elizabeth" ) selected @endif value="St.Elizabeth">St.Elizabeth</option>
                                    <option @if($student[0]['student']["parish_nm"] === "Westmoreland" ) selected @endif value="Westmoreland">Westmoreland</option>
                                    <option @if($student[0]['student']["parish_nm"] === "St.Mary" ) selected @endif value="St.Mary">St.Mary</option>
                                    <option @if($student[0]['student']["parish_nm"] === "St.Ann" ) selected @endif value="St.Ann">St.Ann</option>
                                    <option @if($student[0]['student']["parish_nm"] === "Portland" ) selected @endif value="Portland">Portland</option>
                                    <option @if($student[0]['student']["parish_nm"] === "Trelawny" ) selected @endif value="Trelawny">Trelawny</option>
                                    <option @if($student[0]['student']["parish_nm"] === "Manchester" ) selected @endif value="Manchester">Manchester</option>
                                    <option @if($student[0]['student']["parish_nm"] === "Kingston" ) selected @endif value="Kingston">Kingston</option>


                                </select>

                            </div>
                        </div>

                    </div>


                </form>

                <form id="personalInfo" action="{{url('/periUpdate')}}" method="post"
                      class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    @csrf

                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">First Name </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('first_name'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="first_name"
                                    type="text"
                                    disabled
                                    autocomplete="false"
                                    value="{{ucwords(strtolower($student[0]["student"]["first_nm"]))}}"
                                    placeholder="First Name"
                                    class=" @error('first_name') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Middle Name </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('middle_name'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="middle_name"
                                    type="text"
                                    disabled
                                    autocomplete="false"
                                    value="{{ucwords(strtolower($student[0]["student"]["middle_nm"]))}}"
                                    placeholder="Middle Name"
                                    class="@error('middle_name') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Last Name </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('last_name'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="last_name"
                                    disabled
                                    autocomplete="false"
                                    type="text"
                                    value="{{ucwords(strtolower($student[0]["student"]["last_nm"]))}}"
                                    placeholder="Last Name"
                                    class="@error('last_name') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Email Address </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('email'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="email"
                                    disabled
                                    autocomplete="false"
                                    value="{{strtolower($student[0]["email_addr"])}}"
                                    type="text"
                                    placeholder="Email"
                                    class=" @error('email') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                    </div>
                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Gender </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('gender'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <select
                                    name="gender"
                                    disabled
                                    class=" @error('gender') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                                    <option @if($student[0]['student']["gender"] === "Male" ) selected @endif value="Male">Male</option>
                                    <option @if($student[0]['student']["gender"] === "Female" ) selected @endif value="Female">Female</option>
                                    <option @if($student[0]['student']["gender"] === "Other" ) selected @endif value="Other">Other</option>

                                </select>
                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">TRN </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('TRN'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="TRN"
                                    disabled
                                    autocomplete="false"
                                    value="{{($student[0]["student"]["trn_nbr"])}}"
                                    type="text"
                                    placeholder="TRN"
                                    class="  @error('TRN') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">DOB </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('dob'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="dob"
                                    disabled
                                    autocomplete="false"
                                    value="{{($student[0]["student"]["dob"])}}"
                                    type="date"
                                    placeholder="DOB"
                                    class=" @error('dob') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Telephone Number </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('telephone'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="telephone"
                                    disabled
                                    autocomplete="false"
                                    type="text"
                                    value="{{($student[0]["student"]["tele_nbr"])}}"
                                    placeholder="Telephone Number"
                                    class=" @error('telephone') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                    </div>
                </form>

                <form id="paymentInfo" action="{{url('/ciUpdate')}}" method="post"
                      class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    @csrf

                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Card Holder Name</label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('card_holder_nm'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="card_holder_nm"
                                    type="text"
                                    autocomplete="false"
                                    value="{{$student[0]["student"]["payment_info"][0]["card_holder_nm"]}}"
                                    disabled
                                    placeholder="Card Holder"
                                    class=" @error('card_holder_nm') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Card Number </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('card_number'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="card_number"
                                    type="text"
                                    disabled
                                    autocomplete="false"
                                    value="{{$student[0]["student"]["payment_info"][0]["card_nbr"]}}"
                                    placeholder="Card Number"
                                    class=" @error('card_number') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>

                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Billing Address </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('billing_addr'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="billing_addr"
                                    disabled
                                    autocomplete="false"
                                    type="text"
                                    value="{{$student[0]["student"]["payment_info"][0]["billing_addr"]}}"
                                    placeholder="Billing Address"
                                    class=" @error('billing_addr') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>


                    </div>

                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">CVV </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('cvv'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <input
                                    name="cvv"
                                    disabled
                                    autocomplete="false"
                                    type="number"
                                    value="{{$student[0]["student"]["payment_info"][0]["cvv"]}}"
                                    placeholder="CVV"
                                    class=" @error('cvv') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>

                        <div class="md:w-full max-w-sm mx-auto">
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Expiration Year </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('expiration_year'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <select
                                    name="expiration_year"
                                    disabled
                                    class=" @error('expiration_year') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                                    <option disabled selected>Select A Year</option>


                                @for ($i = date("Y",strtotime(now())); $i < 2034 ; $i++)
                                        @if ($i == $student[0]["student"]["payment_info"][0]["exp_year"])
                                            <option selected value="{{$i}}">{{$i}}</option>
                                        @else
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endif
                                    @endfor

                                </select>

                            </div>
                        </div>

                        <div>
                            <div class="flex items-center gap-5">
                                <label class="text-sm text-gray-400">Expiration Month </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('expiration_month'){{$message}}@enderror</p>
                                @endif
                            </div>
                            <div class="w-full inline-flex">
                                <select
                                    name="expiration_month"
                                    disabled
                                    class=" @error('expiration_month') border-red-600 @enderror focus:shadow-outline-orange duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500  dark:focus:border-blue-500  focus:outline-none ">

                                    <option disabled selected>Select A Month</option>

                                @for ($i = 1; $i <= 12 ; $i++)
                                        @if ($i < 10)
                                            @if ($student[0]["student"]["payment_info"][0]["exp_month"] == $i)
                                                <option selected value="{{$i}}">0{{$i}}</option>
                                            @else
                                                <option value="{{$i}}">0{{$i}}</option>
                                            @endif
                                        @else
                                            @if ($student[0]["student"]["payment_info"][0]["exp_month"] == $i)
                                                <option selected  value="{{$i}}">{{$i}}</option>
                                            @else
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endif
                                        @endif

                                    @endfor

                                </select>

                            </div>
                        </div>
                    </div>
                </form>

                <div id="qualificationInfo"
                     class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    @csrf

                    <div class="grid-cols-1 md:grid-cols-2 gap-10 grid w-full ">

                        <div class=" text-center">

                            <form method="post" enctype="multipart/form-data" id="qualImageChanger"
                                  action="{{route("Qualifications-Update")}}">
                                @csrf
                                <img id="qualOutput"
                                     src="


                                         /public/media/addDocument.jpg



                                    " class="mb-2 h-72 w-full object-contain border border-black rounded-t-2xl ">
                                <label>
                                    <p id="qual_name">
                                        {{$student[0]["student"]["media"][0]["qualification_pic"]}}
                                    </p>
                                    <span class="h-full">
                                        <div class="bg-orange-500 hover:bg-orange-400 duration-300 rounded-b-2xl text-white text-2xl py-5">Add Qualification Documents </div>
                                    <input id="qualDocInput" name="qualDoc" class=" hidden"  {{--accept="image/*"--}} type="file"
                                           onchange="submit()"/>
                                    </span>
                                </label>
                                    @if (session()->has('errors'))
                                        <p class="text-xs text-red-600 text-gray-400">@error('qualImg'){{$message}}@enderror</p>
                                    @endif
                            </form>

                        </div>

                        <div class="text-center">

                            <form method="post" enctype="multipart/form-data" id="passImageChanger"
                                  action="{{route("Passport-Update")}}">
                                @csrf
                                <img id="passportOutput"
                                     src="@if (empty($student[0]["student"]["media"][0]["passport_pic"]))

                                         /public/media/addFile.png

                                     @else

                                            {{$student[0]["student"]["media"][0]["passport_pic"]}}

                                     @endif" class="mb-2 h-72 w-full object-cover border border-black rounded-t-2xl ">
                                <label>
                                    <p id="passport_name">{{$student[0]["student"]["media"][0]["passport_pic"]}}</p>
                                    <span class="h-full">
                                        <div class="bg-orange-500 hover:bg-orange-400 duration-300 rounded-b-2xl text-white text-2xl py-5">Add Passport Size Picture</div>
                                    <input name="passportImg" class=" hidden" id="passportImgInput" accept="image/*" type="file"
                                           onchange="submit()"/>
                                    </span>
                                </label>
                                @if (session()->has('errors'))
                                    <p class="text-xs text-red-600 text-gray-400">@error('passportImg'){{$message}}@enderror</p>
                                @endif
                            </form>
                        </div>


                    </div>

                </div>

                <div id="personalInfoBtnGroup"
                     class="md:w-2/12  mb-3 flex justify-around gap-3  bg-white text-center md:pl-6">
                    <button id="pi-update-btn"
                            class="text-white w-2/3 mx-auto max-w-sm rounded-md text-center bg-orange-500 duration-300 hover:bg-orange-400 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg
                            fill="none"
                            class="w-4 text-white mr-2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                            />
                        </svg>
                        Update
                    </button>

                    <button id="pi-back-btn"
                            class="text-white  w-full mx-auto max-w-sm rounded-md text-center bg-red-600 duration-300 hover:bg-red-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-extrabold text-white mr-2"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 19l-7-7 7-7"/>
                        </svg>
                        <p class="font-medium">Back</p>
                    </button>

                    <button id="pi-submit-btn"
                            class="text-white w-full  mx-auto max-w-sm rounded-md text-center bg-blue-600 duration-300 hover:bg-blue-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <p class="font-medium">Submit</p>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-bold text-white ml-2"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"/>
                            <path fill-rule="evenodd"
                                  d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>

                </div>

                <div id="residentialInfoBtnGroup"
                     class="md:w-2/12  mb-3 flex justify-around gap-3  bg-white text-center md:pl-6">
                    <button id="ri-update-btn"
                            class="text-white w-2/3 mx-auto max-w-sm rounded-md text-center bg-orange-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg
                            fill="none"
                            class="w-4 text-white mr-2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                            />
                        </svg>
                        Update
                    </button>

                    <button id="ri-back-btn"
                            class="text-white  w-full mx-auto max-w-sm rounded-md text-center bg-red-600 duration-300 hover:bg-red-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-extrabold text-white mr-2"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 19l-7-7 7-7"/>
                        </svg>
                        <p class="font-medium">Back</p>
                    </button>

                    <button id="ri-submit-btn"
                            class="text-white w-full  mx-auto max-w-sm rounded-md text-center bg-blue-600 duration-300 hover:bg-blue-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <p class="font-medium">Submit</p>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-bold text-white ml-2"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"/>
                            <path fill-rule="evenodd"
                                  d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>

                </div>


                <div id="cardInfoBtnGroup"
                     class="md:w-2/12  mb-3 flex justify-around gap-3  bg-white text-center md:pl-6">
                    <button id="ci-update-btn"
                            class="text-white w-2/3 mx-auto max-w-sm rounded-md text-center bg-orange-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg
                            fill="none"
                            class="w-4 text-white mr-2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                            />
                        </svg>
                        Update
                    </button>

                    <button id="ci-back-btn"
                            class="text-white  w-full mx-auto max-w-sm rounded-md text-center bg-red-600 duration-300 hover:bg-red-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-extrabold text-white mr-2"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 19l-7-7 7-7"/>
                        </svg>
                        <p class="font-medium">Back</p>
                    </button>

                    <button id="ci-submit-btn"
                            class="text-white w-full  mx-auto max-w-sm rounded-md text-center bg-blue-600 duration-300 hover:bg-blue-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <p class="font-medium">Submit</p>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-bold text-white ml-2"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"/>
                            <path fill-rule="evenodd"
                                  d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>

                </div>
            </div>
        </div>
    </section>


@endsection
