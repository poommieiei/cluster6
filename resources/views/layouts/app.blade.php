<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>API Documentation & Tools</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Viga&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inder&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
{{-- 65160218 css --}}

<body style="background-color: #f2f2f2">
    <style>
        .container {
            background-color: #073B4C;
            border-radius: 25px;
            width: 1000px;
            height: 600px;
            padding: 0px;
            margin: 60px;
            transform: translateY(5%);
        }

        .left-container {
            background-color: #136885;
            border-radius: 25px 25px 0px 25px;
            width: 500px;
            display: flex;
            justify-content: center;
        }

        .right-container {
            background-color: #073B4C;
            width: 500px;
            border-radius: 25px;
            display: flex;
            justify-content: center;
        }

        .outer-frame {
            background-color: #0B5269;
            border-radius: 25px;
            width: 400px;
            height: 500px;
            margin-top: 50px;
            transform: translateX(13%);
        }

        .inner-frame {
            background-color: #136885;
            border-radius: 25px;
            width: 400px;
            height: 450px;
            margin-top: 50px;
            right: 5%;
            justify-content: center;
        }

        .left-rectangle {
            background-color: #136885;
            width: 70px;
            height: 25px;
            margin-top: 575px;
            transform: translateX(60px);

        }

        .right-rectangle {
            background-color: #073B4C;
            width: 55px;
            height: 80px;
            border-radius: 25px;
            margin-top: 520px;
            transform: translateX(-400px);
        }
    </style>



    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>
