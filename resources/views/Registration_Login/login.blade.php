@extends("layouts.Registration_Login")

@section('content')

        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center ">


            <div class="w-full h-100">

                @if(session()->has('errors'))
                <div class="alert alert-error">
                    <div class="flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                        </svg>
                        <label>@error('email_addr'){{$message}}@enderror</label>
                    </div>
                </div>
                @endif

                <h1 class="text-xl md:text-4xl font-bold leading-tight mt-12">Log into your account</h1>

                <form class="mt-6" action="{{url('login')}}" method="POST">
                    @csrf
                    <div>

                        <input type="email"
                               name="email_addr"
                               id="login-email"
                               autofocus
                               autocomplete="false"
                               required
                               placeholder="Enter Email Address"
                               class="focus:border-blue-600  w-full px-4 py-3 duration-75 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        >
                    </div>

                    <div class=" mt-4">
                        <div class="relative ">

                        @if(session()->has('errors'))
                            @error('password'){{$message}}@enderror
                        @endif
                        <input type="password"
                               name="password"
                               id="pwdView"
                               required
                               placeholder="Enter Password"
                               minlength="6"
                               class="focus:border-blue-600  w-full px-4 py-3  rounded-lg bg-gray-200  border focus:border-blue-500 focus:bg-white focus:outline-none"
                               >
                            <button
                                id="viewPwdBtn"
                                type="button"
                                class="absolute focus:outline-none top-0 p-2 h-full right-0 rounded-l-none btn btn-ghost hover:bg-transparent">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg
                                >
                            </button>


                            <button
                                id="hidePwdBtn"
                                type="button"
                                class="absolute top-0 right-0 p-2 h-full focus:outline-none rounded-l-none btn btn-ghost hover:bg-transparent">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </svg>

                            </button>
                    </div>
                    </div>

                    <div class="text-right mt-2">
{{-- TODO                       <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>--}}
                    </div>

                    <button type="submit" class="w-full block bg-orange-500 hover:bg-orange-600 focus:bg-orange-500 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Log In</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">

{{--                TODO Login With Google--}}
{{--                <button type="button" class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">--}}
{{--                    <div class="flex items-center justify-center">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg>--}}
{{--                        <span class="ml-4">--}}
{{--            Log in--}}
{{--            with--}}
{{--            Google</span>--}}
{{--                    </div>--}}
{{--                </button>--}}


                <p class="mt-8 text-center">Need an account? <a href="{{url('/register')}}" class="text-orange-500 hover:text-orange-600 font-semibold"><br>Create an
                        account</a></p>

{{--                <div class="bg-pink-300 py-2 lg:rounded-box">Testing</div>--}}

            </div>
        </div>

@endsection
