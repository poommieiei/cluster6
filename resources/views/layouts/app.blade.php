<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&family=Inder&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body style="background-color: #2F2C2C">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            background-color: #136885;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 1000px;
            height: 600px;
            padding: 0px;
            overflow: hidden;
        }

        .left-panel {
            padding: 40px;
            width: 500px;
            height: 600px;
            text-align: center;
        }

        .right-panel {
            background-color: #073B4C;
            padding: 40px;
            width: 500px;
            height: 600px;
        }

        .form-group {
            margin-bottom: 30px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 15px 15px 15px 50px;
            /* Adjusted padding */
            border-radius: 30px;
            /* Increased border-radius */
            border: none;
            background-color: #1d2b38;
            /* Updated background color */
            color: #ffffff;
            font-size: 16px;
            /* Increased font size */
        }

        .form-group label {
            position: absolute;
            top: 50%;
            left: 20px;
            /* Adjusted left position */
            transform: translateY(-50%);
            color: #a0aec0;
            /* Updated color */
            font-size: 16px;
            /* Increased font size */
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .form-group input:focus+label,
        .form-group input:not(:placeholder-shown)+label {
            top: 0;
            left: 15px;
            /* Adjusted left position */
            padding: 5px 10px;
            background-color: #073B4C;
            /* Updated background color */
            font-size: 12px;
            /* Decreased font size */
            border-radius: 20px;
            /* Added border-radius */
        }

        .form-container {
            display: flex;
            flex-direction: column;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            /* Optional: Add some top margin for spacing */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #06D6A0;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;

        }

        .btn:hover {
            background-color: #4ab195;

        }
    </style>

    @yield('content')

    </div>
</body>

</html>
