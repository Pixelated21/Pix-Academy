<link rel="stylesheet" href="{{asset("css/app.css")}}">



<div class="flex items-center justify-center">
    <div class="col-span-12 w-full">
        <div class="overflow-auto lg:overflow-visible w-full">
            <table class="table text-gray-400 border-separate space-y-6 w-full text-sm">
                <thead class="bg-gray-800 text-gray-500">
                <tr>
                    <th class="p-3">Course</th>
                    <th class="p-3 text-center">Modality</th>
                    <th class="p-3 text-center">Price</th>
                    <th class="p-3 text-center">Status</th>
                    <th class="p-3 text-center">Actidon</th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-gray-800">
                    <td class=" h-36">
                        <div class="flex relative h-full w-full align-items-center">
                            <img style="filter: brightness(40%) grayscale(10%) blur(2px)" class="bg rounded-l-xl w-full h-full object-cover object-center absolute z-0" src="{{$course->course_img}}" alt="unsplash image">
                            <div class="w-full items-center flex flex-col justify-center relative">
                                <div class="text-2xl text-center md:text-3xl text-white">Web Development</div>
                                </div>
                        </div>
                    </td>
                    <td class="p-3 text-center">
                        Blended
                    </td>
                    <td class="p-3 text-center font-bold">
                        $200.00
                    </td>
                    <td class="p-3 text-center">
                        <span class="bg-red-400 text-gray-50 rounded-md px-2 py-2">Rejected</span>
                    </td>
                    <td class="p-3 text-center ">
                        <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                            <span class="bg-pink-500 text-gray-50 rounded-md px-2 py-2">Make Payment</span>
                        </a>
                    </td>
                </tr>

                <tr class="bg-gray-800">
                    <td class=" h-36">
                        <div class="flex relative h-full w-full align-items-center">
                            <img style="filter: brightness(40%) grayscale(10%) blur(2px)" class="bg rounded-l-xl w-full h-full object-cover object-center absolute z-0" src="{{$course->course_img}}" alt="unsplash image">
                            <div class="w-full items-center flex flex-col justify-center relative">
                                <div class="text-2xl text-center md:text-3xl text-white">Web Development</div>
                                </div>
                        </div>
                    </td>
                    <td class="p-3 text-center">
                        Blended
                    </td>
                    <td class="p-3 text-center font-bold">
                        $200.00
                    </td>
                    <td class="p-3 text-center">
                        <span class="bg-green-400 text-gray-50 rounded-md px-2 py-2">Accepted</span>
                    </td>
                    <td class="p-3 text-center ">
                        <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                            <span class="bg-pink-500 text-gray-50 rounded-md px-2 py-2">Make Payment</span>
                        </a>
                    </td>
                </tr>

                </tbody>
            </table>
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

    tr td:nth-child(n+5),
    tr th:nth-child(n+5) {
        border-radius: 0 .625rem .625rem 0;
    }

    tr td:nth-child(1),
    tr th:nth-child(1) {
        border-radius: .625rem 0 0 .625rem;
    }
</style>
