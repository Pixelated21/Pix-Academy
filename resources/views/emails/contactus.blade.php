<link rel="stylesheet" href="{{mix("css/app.css")}}">

<div class="h-screen w-screen flex justify-center items-center bg-black">
    <div class="w-full">
@component('mail::message')
# <span class="text-orange-500">Amber</span>-<span class="text-blue-500">HEART</span> Academy

<p class="py-10 text-gray-900 font-bold">Thank You For Contacting Us, You Will Receive A Response In A Few Hours</p>

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
    </div>
</div>
