<link rel="stylesheet" href="{{url('css/app.css')}}">

<div class="flex h-screen flex-col bg-gray-200">
        <x-user.nav-bar/>


<div class="flex flex-col bg-gray-300">
    <div>
        <section class="text-gray-600 body-font relative">
            <div class="absolute inset-0 bg-gray-300">
                <iframe width="100%" height="100%" style="filter: grayscale(0.2) contrast(1.2) opacity(0.4);" loading="lazy"  allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJsTVvX3g-244R6cXxaHmjtdc&key=AIzaSyA40KgtucSmu4mX1kwHy4n-8WKn9xeSOQ4"></iframe>
            </div>
            <div class="container px-5 py-12 mx-auto flex">
{{--                TODO ADD SOCIAL MEDIA ICONS--}}
                <div class="lg:w-1/3 md:w-1/2 bg-black rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                    <h2 class="text-blue-500 text-2xl text-lg mb-1 font-medium title-font">How can we help?</h2>
                @if (session()->has('message'))
                        <p class="text-center mb-5 rounded bg-green-400 py-2 text-white">Mail Sent{{session("message")}}</p>
                    @else
                        <p class="leading-relaxed mb-5 text-gray-400">We usually respond in a few hours</p>
                    @endif
{{--                    TODO make this viable--}}
{{--                     <a href="tel:8768547729">Call Us</a>--}}
                    <form action="{{route("Mail")}}" method="post">
                        @csrf
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-200">Email</label>
                        <input autofocus type="email" id="email" name="email" class="w-full bg-gray-300 focus:bg-white rounded border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" autocomplete="off">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-200">Message</label>
                        <textarea id="message" name="message" class="w-full bg-gray-300 focus:bg-white rounded border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class="text-white text-center bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded duration-300 text-lg">Submit</button>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
</div>

