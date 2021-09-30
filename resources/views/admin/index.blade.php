@extends('layouts.admin.admin')

@section('content')

    <div
        class=" flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

        <div>

            <div id="dashboard-view" class="flex  p-4 gap-4">

                <!-- Social Traffic -->
                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0 border-0">
                        <div class="flex flex-wrap items-center px-4 py-2">
                            <div class="relative w-full max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Courses
                                    Capacity</h3>
                            </div>


                            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                <button id="view_all_course-btn" style="background-color: #A86C8E"
                                        class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="button">View all
                                </button>
                            </div>
                        </div>
                        <div class="block w-full">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                <tr>
                                    <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Course
                                    </th>
                                    <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Student
                                    </th>
                                    <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">
                                        Capacity
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                @forelse($courses as $course)
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$course["course_nm"]}}</th>
                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            {{($course["amt_enrolled"])}}</td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                @if($course["amt_enrolled"])
                                                    <span class="mr-2">{{floor(($course["amt_enrolled"]/ $course["capacity"]) * 100)}}%</span>
                                                    <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-pink-200">
                                                            <div
                                                                style="width: {{floor(($course["amt_enrolled"]/ $course["capacity"]) * 100)}}%"
                                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-600"></div>
                                                        </div>
                                                    </div>
                                                @else
                                                    {{--                                                    <span class="mr-2">0</span>--}}
                                                    <div class="relative w-full">
                                                        <div class="overflow-hidden h-2 text-xs flex rounded bg-200">
                                                            <div style="width: 0"
                                                                 class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    None
                                @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->

                <!-- Recent Activities -->
                <div
                    class="relative  flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0 border-0">
                        <div class="flex flex-wrap items-center px-4 py-2">
                            <div class="relative w-full max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Recent
                                    Activities</h3>
                            </div>
                            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                <button id="view_all_user_activity" style="background-color: #A86C8E"
                                        class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="button">See all
                                </button>
                            </div>
                        </div>
                        <div class="block w-full">
                            <div
                                class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-bold text-center">
                                Latest
                            </div>
                            <ul class="my-1">
                                @forelse($usersActivityCard as $userActivityCard)
                                <li class="flex px-4">
                                    <div class=" rounded-full flex-shrink-0  my-2 mr-3">
                                        <span>
                                            <img class="rounded-full w-10 h-10 object-fit object-center" src="{{$userActivityCard["student"]['media'][0]['profile_pic']}}">
                                        </span>
                                    </div>


                                        <div
                                        class="flex-grow flex items-center border-b border-gray-100 dark:border-gray-400 text-sm text-gray-600 dark:text-gray-100 py-2">

                                        <div class="flex-grow flex  justify-between items-center">

                                            <div class="self-center  font-medium">
                                                <a class="font-bold text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                   href="#0" style="outline: none;">{{$userActivityCard["student"]["first_nm"]}} {{$userActivityCard["student"]["last_nm"]}}</a> did a {{($userActivityCard["activity_type"])}}

                                            </div>


                                        </div>

                                    </div>

                                    <div class="justify-center text-sm font-bold items-center flex">
                                        {{\Carbon\Carbon::parse($userActivityCard["created_at"],"Jamaica")->diffForHumans()}}
                                    </div>

                                </li>
                                @empty

                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ./Recent Activities -->
            </div>

            <div id="applicant-view" class="grid grid-cols-1 hidden lg:grid-cols-1 p-4 gap-4">

                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0  border-0">
                        <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow   flex-1">
                                <h3 class="font-semibold text-base  text-2xl text-center text-gray-900  dark:text-gray-50">
                                    Applicants</h3>
                            </div>

                        </div>
                        <div class="block w-full">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead class="top-15 sticky">
                                <tr>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        First Name
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Last Name
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Telephone Number
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">
                                        Course
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">
                                        Action
                                    </th>
                                </tr>
                                </thead>

                                <tbody>


                                @forelse($applicants as $applicant)
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>
                                        <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            {{$applicant['student'][0]['last_nm']}}</td>
                                        <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex justify-center items-center">
                                                <span
                                                    class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>
                                            </div>
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{\App\Models\Course::find($applicant['course_id'])->course_nm}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            <form method="post" action="{{route("View-Applicant",[$applicant["course_applicants_id"],$applicant['student'][0]['users']['user_id']])}}">
                                                @csrf
                                                <button class="py-2 bg-pink-400 px-4 font-bold rounded">View</button>
                                            </form>

                                        </td>


                                    </tr>
                                @empty

                                @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->

                <!-- Recent Activities -->
                <!-- ./Recent Activities -->
            </div>

            <div id="course-view" class="grid grid-cols-1 hidden lg:grid-cols-1 p-4 gap-4">

                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0  border-0">
                        <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow   flex-1">
                                <div
                                    class="font-semibold z-50 flex gap-10 justify-around text-base text-2xl text-center text-gray-900  dark:text-gray-50">
                                    <button id="show-course-btn"
                                            class="bg-red-400  duration-300 font-bold rounded py-2 h-full w-1/2">Course
                                    </button>
                                    <button id="add-course-btn"
                                            class="bg-pink-400 duration-300 font-bold rounded py-2 h-full w-1/2">Add
                                        Course
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="block w-full">
                            <table id="show-course-view" class="items-center  w-full bg-transparent border-collapse">
                                <thead class="top-20 sticky">
                                <tr>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Course
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Price
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Training
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Format
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Award
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Enrolled
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Capacity
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Views
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Start
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                        End
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                        Status
                                    </th>
                                </tr>
                                </thead>

                                <tbody>

                                @forelse ($coursesInfo as $courseInfo)


                                    <tr>

                                        <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$courseInfo["course_nm"]}}</td>
                                        <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            ${{number_format($courseInfo["price"])}}</td>
                                        <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex justify-center items-center">
                                                <span
                                                    class="mr-2 font-bold text-center">{{$courseInfo["training_type"]}}</span>
                                            </div>
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseInfo["modality"]}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseInfo["award_type"]}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseInfo["amt_enrolled"]}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseInfo["capacity"]}}

                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseInfo["views"]}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseInfo["training_start"]}}

                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseInfo["training_end"]}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$courseInfo["status"]}}
                                        </td>


                                    </tr>
                                @empty
                                    <tr>

                                        <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$courseInfo["course_nm"]}}</td>
                                        <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            N/A
                                        </td>
                                        <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex justify-center items-center">
                                                <span class="mr-2 font-bold text-center">N/A</span>
                                            </div>
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A

                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A

                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            N/A
                                        </td>


                                    </tr>
                                @endforelse


                                </tbody>
                            </table>

                            <div id="add-course-view" class="h-full hidden">

                                <!-- component -->
                                <form method="post" action="" class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                                    <div class="-mx-3 md:flex mb-6">
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-course_start">
                                                Course Starts
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-course_start" type="date">
                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-course_end">
                                                Course Ends
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-course_end" type="date">
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-6">
                                        <div class="md:w-full px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-course_name">
                                                Course Name
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-course_name" type="text">
                                        </div>
                                    </div>
                                    <div class="-mx-3  md:flex mb-10">
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                                Price
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" placeholder="Albuquerque">
                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                                                Format
                                            </label>
                                            <div>
                                                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                                                    <option>Full Time</option>
                                                    <option>Part-Time</option>
                                                    <option>Assessment Only</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                                                Training Type
                                            </label>
                                            <div>
                                                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                                                    <option>Institution</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-2">
                                        <div class="md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                                                Modality
                                            </label>
                                            <div>
                                                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                                                    <option>Face To Face</option>
                                                    <option>Blended</option>
                                                    <option>Walk-In</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                                                Institution
                                            </label>
                                            <div>
                                                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                                                    <option selected disabled>Select Institution</option>

                                                @forelse ($institutionsInfo as $institutions)
                                                        <option>{{$institutions["institution_nm"]}}</option>
                                                    @empty
                                                        <option selected disabled>No Available Institutions</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-capacity">
                                                Capacity
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-capacity" type="text" placeholder="Enter Capacity">
                                        </div>
                                    </div>

                                    <div class=" mt-5 w-full flex justify-center items-center">
                                            <input type="file" name="file">
                                    </div>

                                    <div class=" mt-10 border border-black w-full md:flex mb-6">
                                        <input type="text">
                                    </div>

                                    <button class="bg-blue-400 text-2xl font-bold py-3 rounded" type="submit">Create Course</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->
            {{--                    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">--}}
            {{--                        <div class="rounded-t mb-0 px-0  border-0">--}}
            {{--                            <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">--}}
            {{--                                <div class="relative w-full max-w-full flex-grow   flex-1">--}}
            {{--                                    <h3 class="font-semibold text-base  text-2xl text-center text-gray-900  dark:text-gray-50">Courses</h3>--}}
            {{--                                </div>--}}

            {{--                            </div>--}}
            {{--                            <div class="block w-full">--}}
            {{--                                <table class="items-center w-full bg-transparent border-collapse">--}}
            {{--                                    <thead class="top-15 sticky">--}}
            {{--                                    <tr>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Course Name</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Institution</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Award Type</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">Action</th>--}}
            {{--                                    </tr>--}}
            {{--                                    </thead>--}}

            {{--                                    <tbody>--}}


            {{--                                    @foreach($applicants as $applicant)--}}
            {{--                                        <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>    <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>--}}

            {{--                                    @endforeach--}}

            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            <!-- Recent Activities -->
                <!-- ./Recent Activities -->
            </div>

            <div id="institution-view" class="grid grid-cols-1 hidden lg:grid-cols-1 p-4 gap-4">

                <!-- Social Traffic -->
                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0  border-0">
                        <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow   flex-1">
                                <div
                                    class="font-semibold flex gap-10 justify-around text-base text-2xl text-center text-gray-900  dark:text-gray-50">
                                    <button id="show-institution-btn" class="bg-red-400 font-bold rounded py-2 h-full w-1/2">
                                        Institution
                                    </button>
                                    <button id="add-institution-btn" class="bg-pink-400 font-bold rounded py-2 h-full w-1/2">
                                        Add Institution
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="block w-full">
                            <table id="show-institution-view" class="items-center w-full bg-transparent border-collapse">
                                <thead class="top-20 sticky">
                                <tr>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Institution Name
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Telephone
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Address
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Courses
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Date Added
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($institutionsInfo as $institutionInfo)
                                    <tr>


                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$institutionInfo["institution_nm"]}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$institutionInfo["telephone_nbr"]}}
                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{$institutionInfo["address"]}}

                                        </td>

                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{count($institutionInfo["course"])}}
                                        </td>


                                        <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                            {{\Carbon\Carbon::parse($institutionInfo["created_at"],"Jamaica")->diffForHumans()}}
                                        </td>


                                    </tr>
                                @empty

                                @endforelse


                                </tbody>
                            </table>


                                <div id="add-institution-view" class="h-full  hidden">

                                    <!-- component -->
                                    <form method="post" action="{{route("Add Institution")}}" class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                                        @csrf
                                        <div class="-mx-3 md:flex mb-6">
                                            <div class="md:w-full px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-institution_name">
                                                    Institution Name
                                                </label>
                                                <input name="inst_nm" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-institution_name" type="text">
                                            </div>
                                        </div>
                                        <div class="-mx-3 md:flex mb-6">

                                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-Institution_Address">
                                                    Institution Address
                                                </label>
                                                <input name="inst_addr" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-Institution_Address" type="text">
                                            </div>
                                            <div class="md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-telephone_nbr">
                                                    Telephone Number
                                                </label>
                                                <input name="inst_tele_nbr" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-telephone_nbr" type="text">
                                            </div>
                                        </div>


                                        <button class="bg-pink-400 text-2xl font-bold py-3 rounded" type="submit">Create Institution</button>

                                    </form>

                                </div>


                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->
            {{--                    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">--}}
            {{--                        <div class="rounded-t mb-0 px-0  border-0">--}}
            {{--                            <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">--}}
            {{--                                <div class="relative w-full max-w-full flex-grow   flex-1">--}}
            {{--                                    <h3 class="font-semibold text-base  text-2xl text-center text-gray-900  dark:text-gray-50">Courses</h3>--}}
            {{--                                </div>--}}

            {{--                            </div>--}}
            {{--                            <div class="block w-full">--}}
            {{--                                <table class="items-center w-full bg-transparent border-collapse">--}}
            {{--                                    <thead class="top-15 sticky">--}}
            {{--                                    <tr>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Course Name</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Institution</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Award Type</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">Action</th>--}}
            {{--                                    </tr>--}}
            {{--                                    </thead>--}}

            {{--                                    <tbody>--}}


            {{--                                    @foreach($applicants as $applicant)--}}
            {{--                                        <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>    <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>--}}

            {{--                                    @endforeach--}}

            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            <!-- Recent Activities -->
                <!-- ./Recent Activities -->
            </div>

            <div id="user-activity-view" class="grid grid-cols-1 hidden lg:grid-cols-1 p-4 gap-4">

                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0  border-0">
                        <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow flex-1">
                                <div
                                    class="font-semibold flex gap-10 justify-around text-base text-2xl text-center text-gray-900  dark:text-gray-50">
                                    <div class="bg-red-400 font-bold rounded py-2 h-full w-full">User Activity</div>
                                </div>
                            </div>

                        </div>

                        <div class="block w-full">
                            <table id="show-course-view" class="items-center w-full bg-transparent border-collapse">
                                <thead class="top-20 sticky">
                                <tr>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        ID
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        First Name
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Last Name
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        User Email
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Activity Type
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Date
                                    </th>

                                </tr>
                                </thead>

                                <tbody>

                        @forelse($usersActivity as $userActivity)
                                <tr>

                                    <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        {{$userActivity["user_activity_id"]}}
                                    </td>
                                    <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$userActivity["student"]["first_nm"]}}
                                    </td>
                                    <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$userActivity["student"]["last_nm"]}}
                                    </td>
                                    <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$userActivity["student"]['users']["email_addr"]}}

                                    </td>
                                    <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex justify-center items-center">
                                            <span class="mr-2 font-bold text-center">{{($userActivity["activity_type"])}}</span>
                                        </div>
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                        {{\Carbon\Carbon::parse($userActivity["created_at"],"Jamaica")->diffForHumans()}}
                                    </td>


                                </tr>

                            @empty

                            <tr>

                                <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    N/A
                                </td>
                                <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    N/A
                                </td>
                                <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex justify-center items-center">
                                        <span class="mr-2 font-bold text-center">
                                            N/A
                                        </span>
                                    </div>
                                </td>

                                <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    N/A
                                </td>


                            </tr>

                        @endforelse


                                </tbody>
                            </table>

                            <div id="add-course-view" class="h-full">

                                <form>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->
            {{--                    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">--}}
            {{--                        <div class="rounded-t mb-0 px-0  border-0">--}}
            {{--                            <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">--}}
            {{--                                <div class="relative w-full max-w-full flex-grow   flex-1">--}}
            {{--                                    <h3 class="font-semibold text-base  text-2xl text-center text-gray-900  dark:text-gray-50">Courses</h3>--}}
            {{--                                </div>--}}

            {{--                            </div>--}}
            {{--                            <div class="block w-full">--}}
            {{--                                <table class="items-center w-full bg-transparent border-collapse">--}}
            {{--                                    <thead class="top-15 sticky">--}}
            {{--                                    <tr>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Course Name</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Institution</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Award Type</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">Action</th>--}}
            {{--                                    </tr>--}}
            {{--                                    </thead>--}}

            {{--                                    <tbody>--}}


            {{--                                    @foreach($applicants as $applicant)--}}
            {{--                                        <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>    <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>--}}

            {{--                                    @endforeach--}}

            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            <!-- Recent Activities -->
                <!-- ./Recent Activities -->
            </div>

            <div id="payment-activity-view" class="grid grid-cols-1 hidden lg:grid-cols-1 p-4 gap-4">

                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0  border-0">
                        <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow   flex-1">
                                <div
                                    class="font-semibold flex gap-10 justify-around text-base text-2xl text-center text-gray-900  dark:text-gray-50">
                                    <div class="bg-red-400 font-bold rounded py-2 h-full w-full">Payment Activity</div>
                                </div>
                            </div>

                        </div>

                        <div class="block w-full">
                            <table id="show-course-view" class="items-center w-full bg-transparent border-collapse">
                                <thead class="top-20 sticky">
                                <tr>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Course
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Price
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Training
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Format
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Award
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Enrolled
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Capacity
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Price
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Training Start
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                        Training End
                                    </th>
                                </tr>
                                </thead>

                                <tbody>


                                <tr>

                                    <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        Web Development
                                    </td>
                                    <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $5000
                                    </td>
                                    <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex justify-center items-center">
                                            <span class="mr-2 font-bold text-center">Full Time</span>
                                        </div>
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                        Blended
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                        NVQJ Award
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                        9
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                        50
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                        $5000
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                        1/02/2021
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                        1/02/2021
                                    </td>


                                </tr>


                                </tbody>
                            </table>

                            <div id="add-course-view" class="h-full">

                                <form>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->
            {{--                    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">--}}
            {{--                        <div class="rounded-t mb-0 px-0  border-0">--}}
            {{--                            <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">--}}
            {{--                                <div class="relative w-full max-w-full flex-grow   flex-1">--}}
            {{--                                    <h3 class="font-semibold text-base  text-2xl text-center text-gray-900  dark:text-gray-50">Courses</h3>--}}
            {{--                                </div>--}}

            {{--                            </div>--}}
            {{--                            <div class="block w-full">--}}
            {{--                                <table class="items-center w-full bg-transparent border-collapse">--}}
            {{--                                    <thead class="top-15 sticky">--}}
            {{--                                    <tr>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Course Name</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Institution</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Award Type</th>--}}
            {{--                                        <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center min-w-140-px">Action</th>--}}
            {{--                                    </tr>--}}
            {{--                                    </thead>--}}

            {{--                                    <tbody>--}}


            {{--                                    @foreach($applicants as $applicant)--}}
            {{--                                        <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>    <tr>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$applicant['student'][0]['first_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                {{$applicant['student'][0]['last_nm']}}</td>--}}
            {{--                                            <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">--}}
            {{--                                                <div class="flex justify-center items-center">--}}
            {{--                                                    <span class="mr-2 font-bold text-center">{{$applicant['student'][0]['tele_nbr']}}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </td>--}}

            {{--                                            <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">--}}
            {{--                                                {{\App\Models\Course::find($applicant['course_id'])->course_nm}}--}}
            {{--                                            </td>--}}

            {{--                                        </tr>--}}

            {{--                                    @endforeach--}}

            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            <!-- Recent Activities -->
                <!-- ./Recent Activities -->
            </div>


            <div id="settings-view" class="grid grid-cols-1 hidden lg:grid-cols-1 p-4 gap-4">

                <div
                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <div class="rounded-t mb-0 px-0  border-0">
                        <div class="flex flex-wrap items-center top-0 sticky bg-gray-100   px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow   flex-1">
                                <div
                                    class="font-semibold flex gap-10 justify-around text-base text-2xl text-center text-gray-900  dark:text-gray-50">
                                    <div class="bg-orange-400  font-bold rounded py-2 h-full w-2/3">Settings</div>
                                    <button class="bg-blue-500 font-bold rounded py-2 h-full w-1/3">All Applicants XML</button>
                                </div>
                            </div>

                        </div>

                        <div class="block w-full">
                            <table id="show-course-view" class="items-center w-full bg-transparent border-collapse">
                                <thead class="top-20 sticky">
                                <tr>
                                    <th class=" bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                       ID
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        First Name
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Last Name
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Gender
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        DOB
                                    </th>

                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Telephone NBR
                                    </th>

                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                        Course
                                    </th>
                                    <th class="px-4 bg-gray-100 text-center dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                        Action
                                    </th>
                                </tr>
                                </thead>

                                <tbody>


                                @forelse($acceptedApplicants as $acceptedApplicant)
                                <tr>

                                    <td class="border-t-0 font-bold text-center align-middle border-l-0 border-r-0 text-xs  p-4 text-left">
                                        {{$acceptedApplicant['student'][0]['student_id']}}
                                    </td>
                                    <td class="border-t-0 font-bold px-4 text-center border-l-0 border-r-0 text-xs  p-4">
                                        {{$acceptedApplicant['student'][0]['first_nm']}}
                                    </td>
                                    <td class="border-t-0 px-4 text-center text-center border-l-0 border-r-0 text-xs  p-4">

                                        <div class="flex justify-center items-center">
                                            <span class="mr-2 font-bold text-center">
                                                {{$acceptedApplicant['student'][0]['last_nm']}}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
{{--                                        {{$acceptedApplicant['student'][0]['gender']}}--}}
                                        Male
                                    </td>

                                    <td class="border-t-0 font-bold px-4 align-middle border-l-0 border-r-0 text-xs p-4 text-center">
                                        {{$acceptedApplicant['student'][0]['dob']}}
                                    </td>


                                    <td class="border-t-0 font-bold align-middle border-l-0 border-r-0 text-xs  p-4 text-center">
                                        {{$acceptedApplicant['student'][0]['tele_nbr']}}
                                    </td>

                                    <td class="border-t-0 font-bold align-middle border-l-0 border-r-0 text-xs  p-4 text-center">
                                        {{\App\Models\Course::find((int)$acceptedApplicant['course_id'])->course_nm}}
                                    </td>

                                    <td class="border-t-0  font-bold  align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                       <button>
                                           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                           </svg>
                                       </button>
                                    </td>


                                </tr>
                                    @empty

                                @endforelse

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
@endsection
