<!doctype html>
<html lang="en">
<head>
    <script defer src="{{asset("js/qualification_table_controller.js")}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>



    <header>
        <x-user.nav-bar/>
    </header>

    <div class="flex mt-2 justify-center ">
        <h1 class="text-4xl font-bold">Application</h1>
    </div>

    <div>
        <form>
            <table>
                <tr>
                    <td>
                        <input type="text">
                    </td>
                </tr>
            </table>
        </form>
    </div>


    <!-- component -->


<div>
<x-user.footer/>
</div>


</body>

</html>

