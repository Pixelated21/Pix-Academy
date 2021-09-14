<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>

<div class="h-screen">
{{--    <div>--}}
{{--        <x-admin.admin_header/>--}}
{{--    </div>--}}

    <div class=" flex h-screen">
        <div class="w-1/5 h-full " >
            <x-admin.admin_sidebar/>
        </div>

        <div class="w-full">
            @yield('content')
        </div>

    </div>

</div>

</body>
</html>
