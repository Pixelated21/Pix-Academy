
@extends("layouts.Registration_Login")

@section('content')

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

        <div class="w-full h-100">


            <h1 class="text-xl md:text-4xl font-bold leading-tight mt-12">Registration </h1>

            <form class="mt-6" action="" method="POST">
                @csrf


                <div>
                    <table>
                        <tr>
                            <td>
                                <input type="text" name="first_nm" id="first_name" placeholder="First Name" class="focus:border-pink-500 w-full px-4 py-3  rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus required>
                            </td>
                            <td>
                                <input type="text" name="last_nm" id="last_name" placeholder="Last Name" class="focus:border-pink-500 w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required>
                            </td>
                        </tr>
                    </table>

                    </div>

                <div>

                    <input
                        type="email"
                        name="email_addr"
                        id="email"

                        @if(session()->has('errors'))
                        placeholder="@error('email_addr'){{$message}}@enderror"
                        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border border-red-600 text-sm text-red-700 placeholder-error focus:border-pink-500 focus:bg-white focus:outline-none"

                        @else
                        placeholder="Enter Email Address"
                        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border  focus:border-pink-500 focus:bg-white focus:outline-none"
                        @endif
                     >

                </div>

                <div>

                    <select name="gender" id="gender"  class="text-gray-400 font-normal w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-pink-500 focus:bg-white  focus:outline-none" required>
                        <option disabled selected>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>

                </div>

                <div class="form-control py-2">
                    <input type="date"  name="dob" class="text-gray-400 font-normal w-full px-4 py-3 rounded-lg bg-gray-200  border focus:border-pink-500 focus:bg-white  focus:outline-none">
                </div>

                <div>
                    <table>
                        <tr>
                            <td>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="Enter Password"
                                    class="w-full px-4 py-3 rounded-lg bg-gray-200 border  focus:border-pink-500 focus:bg-white focus:outline-none"
                                    >

                            </td>

                            <td>
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    placeholder="Verify Password"
                                    class="w-full px-4 py-3 rounded-lg bg-gray-200 border focus:border-pink-500 focus:bg-white focus:outline-none"
                                    >

                            </td>
                        </tr>
                    </table>

                </div>

                <div class="text-right mt-2">
{{--                     TODO Forgot Password
<a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>--}}
                </div>

                <button type="submit" class="w-full block bg-pink-500 hover:bg-pink-400 focus:bg-pink-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Register</button>
            </form>

            <hr class="my-6 border-gray-300 w-full">


{{--            TODO login with google--}}
{{--            <button type="button" class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">--}}
{{--                <div class="flex items-center justify-center">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://\\www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg>--}}
{{--                    <span class="ml-4">--}}
{{--            Log in--}}
{{--            with--}}
{{--            Google</span>--}}
{{--                </div>--}}
{{--            </button>--}}

            <p class="text-center mt-8">Already Have an account?<br> <a href="{{url('/login')}}" class="text-pink-500 hover:text-pink-700 font-semibold">Login To Your Account</a></p>


        </div>
    </div>

@endsection
