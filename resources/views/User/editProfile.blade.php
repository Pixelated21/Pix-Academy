@extends('layouts.profile')


@section('Content')


{{--TODO Window Snap--}}

    <section class=" bg-opacity-50 ">
        <div class="mx-auto h-full flex flex-col">

            <div id="header">
            <x-user.profile_header/>
            </div>

            <div class="md:inline-flex  bg-white space-y-4 justify-center md:space-y-0 w-full p-4 text-gray-500 items-center">

                <button id="personalInfo-Header" class="md:w-1/5  mx-auto max-w-sm mb-3  text-center text-2xl">Personal</button>
                <button id="residentialInfo-Header" class="md:w-1/5 mx-auto max-w-sm mb-3  text-center text-2xl">Residential</button>
                <button id="socialInfo-Header" class="md:w-1/5 mx-auto max-w-sm mb-3  text-center text-2xl">Social</button>
                <button id="paymentInfo-Header" class="md:w-1/5 mx-auto max-w-sm mb-3  text-center text-2xl">Payment</button>

            </div>

            <div class="bg-white dark:bg-black h-full flex flex-col items-center justify-start -mt-1  mt-0 space-y-6 0">

                <form id="residentialInfo" action="{{url('/riUpdate')}}" method="post" class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    @csrf

                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <label class="text-sm text-gray-400">Street Address</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="street_address"
                                    type="text"
                                    disabled
                                    value="{{ucwords(strtolower(Auth::user()->street_address))}}"
                                    placeholder="Street Adress"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>


{{--                        {{dd(Auth::user())}}--}}
                        <div class="md:w-full max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">District / Town</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="district_town"
                                    type="text"
                                    disabled
                                    value="{{ucwords(strtolower(Auth::user()->district_town))}}"
                                    placeholder="District / Town"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>

                        <div>
                            <label class="text-sm text-gray-400">Postal Zone</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="postal_zone"
                                    type="text"
                                    disabled
                                    value="{{(Auth::user()->postal_zone)}}"
                                    placeholder="Street Adress"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>

                        <div class="md:w-full max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">Parish</label>
                            <div class="w-full inline-flex">
                                <select
                                    name="parish"
                                    disabled
                                    type="text"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                                    <option selected>St.Catherine</option>
                                    <option>Clarendon</option>
                                    <option>St Andrew</option>
                                    <option>Saint Thomas</option>
                                    <option>Hanover</option>
                                    <option>Saint James</option>
                                    <option>Saint Elizabeth</option>
                                    <option>Westmoreland</option>
                                    <option>Saint Mary</option>
                                    <option>Saint Ann</option>
                                    <option>Portland</option>
                                    <option>Saint Thomas</option>
                                    <option>Trelawny</option>


                                </select>

                            </div>
                        </div>

                    </div>


                </form>

                <form id="personalInfo" action="{{url('/periUpdate')}}" method="post" class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    @csrf

                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <label class="text-sm text-gray-400">First Name</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="first_name"
                                    type="text"
                                    disabled
                                    value="{{ucfirst(strtolower(Auth::user()->first_name))}}"
                                    placeholder="First Name"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">Middle Name</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="middle_name"
                                    type="text"
                                    disabled
                                    value="{{ucwords(strtolower(Auth::user()->middle_name))}}"
                                    placeholder="Middle Name"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">Last Name</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="last_name"
                                    disabled
                                    type="text"
                                    value="{{ucfirst(strtolower(Auth::user()->last_name))}}"
                                    placeholder="Last Name"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>
                        <div>
                            <label class="text-sm text-gray-400 dark:text-green-800">Email</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="email"
                                    disabled
                                    value="{{(strtolower(Auth::user()->email))}}"
                                    type="text"
                                    placeholder="Email"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>
                    </div>
                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <label class="text-sm text-gray-400">Gender</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="gender"
                                    disabled
                                    type="text"
                                    value="{{Auth::user()->gender}}"
                                    placeholder="Gender"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">TRN</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="TRN"
                                    disabled
                                    value="{{Auth::user()->TRN}}"
                                    type="text"
                                    placeholder="TRN"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">DOB</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="dob"
                                    disabled
                                    value="{{Auth::user()->dob}}"
                                    type="date"
                                    placeholder="DOB"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>
                        <div>
                            <label class="text-sm text-gray-400 dark:text-green-800">Telephone Number</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="telephone"
                                    disabled
                                    type="text"
                                    value="{{Auth::user()->telephone}}"
                                    placeholder="Telephone Number"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>
                    </div>
                </form>

                <form id="paymentInfo" action="{{url('/ciUpdate')}}" method="post" class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    @csrf

                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <label class="text-sm text-gray-400">Card Holder</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="card_holder"
                                    type="text"
                                    disabled
                                    value="{{ucwords(strtolower(Auth::user()->card_holder))}}"
                                    placeholder="Card Holder"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
{{--                            TODO explode and hide certain parts of the value--}}
                            <label class="text-sm text-gray-400">Card Number</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="card_number"
                                    type="text"
                                    disabled
                                    value="{{(Auth::user()->card_number)}}"
                                    placeholder="Middle Name"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>

                        <div>
                            <label class="text-sm text-gray-400">CVV</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="cvv"
                                    disabled
                                    type="text"
                                    value="{{Auth::user()->cvv}}"
                                    placeholder="CVV"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>

                    </div>

                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div class="md:w-full max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">Expiration Year</label>
                            <div class="w-full inline-flex">
                                <select
                                    name="expiration_year"
                                    disabled
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                                    @for ($i = date("Y",strtotime(now())); $i < 2034 ; $i++)
                                        @if ($i == Auth::user()->expiration_year)
                                            <option selected value="{{$i}}">{{$i}}</option>
                                        @else
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endif
                                    @endfor

                                </select>

                            </div>
                        </div>

                        <div>
                            <label class="text-sm text-gray-400 dark:text-green-800">Expiration Month</label>
                            <div class="w-full inline-flex">
                                <select
                                    name="expiration_month"
                                    disabled
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                                    @for ($i = 1; $i <= 12 ; $i++)
                                        @if ($i < 10)
                                            <option value="{{$i}}">0{{$i}}</option>
                                        @else
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endif

                                    @endfor

                                </select>

                            </div>
                        </div>
                    </div>
                </form>

                <form id="socialInfo" action="{{url('/siUpdate')}}" method="post" class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    @csrf

                    <div class="md:w-4/5 mx-auto max-w-sm space-y-5">
                        <div>
                            <label class="text-sm text-gray-400">Whatsapp</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="whatsapp"
                                    type="text"
                                    disabled
                                    value="{{(Auth::user()->whatsapp)}}"
                                    placeholder="WhatsApp"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:outline-none ">

                            </div>
                        </div>
                        <div class="md:w-full max-w-sm mx-auto">
{{--                            TODO explode and hide certain parts of the value--}}
                            <label class="text-sm text-gray-400">Twitter</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="twitter"
                                    type="text"
                                    disabled
                                    value="{{(Auth::user()->twitter)}}"
                                    placeholder="twitter"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>

                        <div>
                            <label class="text-sm text-gray-400">Instagram</label>
                            <div class="w-full inline-flex">
                                <input
                                    name="instagram"
                                    disabled
                                    type="text"
                                    value="{{Auth::user()->instagram}}"
                                    placeholder="Instagram"
                                    class="focus:shadow-outline-pink duration-300 transition-shadow w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-500  dark:focus:border-blue-500  focus:shadow-2xl focus:outline-none ">

                            </div>
                        </div>

                    </div>

                </form>

                <div id="personalInfoBtnGroup" class="md:w-2/12  mb-3 flex justify-around gap-3  bg-white text-center md:pl-6">
                    <button id="pi-update-btn" class="text-white w-2/3 mx-auto max-w-sm rounded-md text-center bg-pink-400 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
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

                    <button id="pi-back-btn" class="text-white  w-full mx-auto max-w-sm rounded-md text-center bg-red-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-extrabold text-white mr-2"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                  stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                        <p class="font-medium">Back</p>
                    </button>

                    <button id="pi-submit-btn" class="text-white w-full  mx-auto max-w-sm rounded-md text-center bg-green-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <p class="font-medium">Submit</p>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-bold text-white ml-2"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>

                </div>

                <div id="residentialInfoBtnGroup" class="md:w-2/12  mb-3 flex justify-around gap-3  bg-white text-center md:pl-6">
                    <button id="ri-update-btn" class="text-white w-2/3 mx-auto max-w-sm rounded-md text-center bg-pink-400 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
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

                    <button id="ri-back-btn" class="text-white  w-full mx-auto max-w-sm rounded-md text-center bg-red-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-extrabold text-white mr-2"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                  stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                        <p class="font-medium">Back</p>
                    </button>

                    <button id="ri-submit-btn" class="text-white w-full  mx-auto max-w-sm rounded-md text-center bg-green-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <p class="font-medium">Submit</p>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-bold text-white ml-2"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>

                </div>

                <div id="socialInfoBtnGroup" class="md:w-2/12  mb-3 flex justify-around gap-3  bg-white text-center md:pl-6">
                    <button id="si-update-btn" class="text-white w-2/3 mx-auto max-w-sm rounded-md text-center bg-pink-400 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
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

                    <button id="si-back-btn" class="text-white  w-full mx-auto max-w-sm rounded-md text-center bg-red-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-extrabold text-white mr-2"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                  stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                        <p class="font-medium">Back</p>
                    </button>

                    <button id="si-submit-btn" class="text-white w-full  mx-auto max-w-sm rounded-md text-center bg-green-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <p class="font-medium">Submit</p>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-bold text-white ml-2"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>

                </div>

                <div id="cardInfoBtnGroup" class="md:w-2/12  mb-3 flex justify-around gap-3  bg-white text-center md:pl-6">
                    <button id="ci-update-btn" class="text-white w-2/3 mx-auto max-w-sm rounded-md text-center bg-pink-400 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
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

                    <button id="ci-back-btn" class="text-white  w-full mx-auto max-w-sm rounded-md text-center bg-red-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-extrabold text-white mr-2"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                  stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                        <p class="font-medium">Back</p>
                    </button>

                    <button id="ci-submit-btn" class="text-white w-full  mx-auto max-w-sm rounded-md text-center bg-green-500 py-2 px-4 inline-flex items-center justify-center focus:outline-none md:float-right">
                        <p class="font-medium">Submit</p>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 font-bold text-white ml-2"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>

                </div>
            </div>
        </div>
{{--        TODO ADJUST BACK TO MENU ON REFRESH--}}
    </section>


@endsection
