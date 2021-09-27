@extends('layouts.profile')



@section('Content')

    <section class=" bg-opacity-50 ">

        <div class="mx-auto h-screen flex flex-col">

            <div id="header">
                <x-user.profile_header/>
            </div>



                <div class="flex items-center h-full overflow-y-scroll bg-cool-gray-300 justify-center">
                    <div class="col-span-12 h-full w-full">
                        <div class="overflow-auto h-full lg:overflow-visible w-full">

                            @if (isset($applications))


                            <table class="table text-gray-400 border-separate bg-cool-gray-300   space-y-6 w-full text-sm">
                                <thead class="bg-gray-800 sticky top-0 z-50 text-gray-500">

                                <tr class="bg-black ">

                                    <th class="p-3 text-center">Course</th>
                                    <th class="p-3 text-center">Modality</th>
                                    <th class="p-3 text-center">Price</th>
                                    <th class="p-3 text-center">Status</th>
                                    <th class="p-3 text-center">Action</th>



                                </tr>

                                </thead>
                                <tbody>



                                @foreach($applications as $application)

                                <tr class="bg-gray-800">
                                    <td class=" h-36">
                                        <div class="flex relative h-full w-full align-items-center">
                                            <img style="filter: brightness(40%) grayscale(10%) blur(2px)" class="bg rounded-l-xl w-full h-full object-cover object-center absolute z-0" src="{{\App\Models\Course::find($application["course_id"])->course_img}}" alt="unsplash image">
                                            <div class="w-full items-center flex flex-col justify-center relative">
                                                <div class="text-2xl text-center md:text-3xl text-white">{{\App\Models\Course::find($application["course_id"])->course_nm}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3 text-center">
                                        {{\App\Models\Course::find($application["course_id"])->modality}}
                                    </td>
                                    <td class="p-3 text-center font-bold">
                                        ${{number_format((int)(\App\Models\Course::find($application["course_id"])->price))}} JMD
                                    </td>
                                    <td class="p-3 text-center">
                                        @if ($application["status"] === "Pending")

                                        <span class="bg-yellow-400 text-gray-50 font-bold rounded-md px-3 py-2">
                                                {{$application["status"]}}
                                        </span>

                                            @elseif ($application["status"] === "Rejected")

                                            <span class="bg-red-600  text-gray-50 font-bold rounded-md px-2 py-2">
                                                {{$application["status"]}}
                                             </span>

                                        @else
                                            <span class="bg-green-500 text-gray-50 font-bold rounded-md px-2 py-2">
                                                {{$application["status"]}}
                                        </span>


                                        @endif

                                    </td>
                                    <td class="p-3 text-center ">

                                        @if ($application["status"] === 'Rejected')

                                        @elseif ($application["status"] === 'Pending')

                                            <button disabled  class="text-gray-400 opacity-50 cursor-default hover:text-gray-100 mr-2">
                                                <span class="bg-pink-500 text-gray-50 rounded-md px-2 py-2">Make Payment</span>
                                            </button>

                                        @elseif($application["payment_status"] === 'Not Paid' && $application["status"] === 'Accepted' )

                                            <a  class="text-gray-400 hover:text-gray-100 mr-2">
                                                <span class="bg-pink-500 cursor-pointer text-gray-50 rounded-md px-2 py-2">Make Payment</span>
                                            </a>

                                        @else
                                            <a  class="text-gray-400 hover:text-gray-100 mr-2">
                                                <span class="bg-green-500 text-gray-50 rounded-md font-bold px-6 py-2">Paid</span>
                                            </a>
                                        @endif


                                    </td>
                                </tr>

                                @endforeach

                                </tbody>
                            </table>

                            @else
                                    <div class="flex relative h-full w-full align-items-center">
                                        <img class="bg  w-full h-full object-cover object-center absolute z-0" src="https://source.unsplash.com/random" alt="unsplash image">
                                        <div class="w-full items-center flex flex-col justify-center relative">
                                            <div class="text-2xl text-center md:text-6xl text-white">No Activity</div>
                                        </div>
                                    </div>
                            @endif
                        </div>
                    </div>
                </div>
                <style>
                    .table {
                        border-spacing: 0 15px;
                    }

                    i {
                        font-size: 1rem !important;
                    }

                    .table tr {
                        border-radius: 20px;

                    }

                    .table th{
                        border-bottom: 1px solid white;
                    }

                    /*tr td:nth-child(n+5),*/
                    /*tr th:nth-child(n+5) {*/
                    /*    border-radius: 0 .625rem .625rem 0;*/
                    /*}*/

                    /*tr td:nth-child(1),*/
                    /*tr th:nth-child(1) {*/
                    /*    border-radius: .625rem 0 0 .625rem;*/
                    /*}*/
                </style>

            </div>
    </section>
@endsection

