<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
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
          background-color: #000;
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
          width: 2300px;
          height: 700px;
          overflow: hidden;
        }

        .left-panel {
          padding: 40px;
          text-align: center;
        }

        .left-panel .logo {
          font-size: 48px;
          font-weight: bold;
          margin-bottom: 20px;
        }

        .left-panel .tagline {
          font-size: 16px;
          color: #136885;
        }

        .right-panel {
          background-color: #073B4C;
          padding: 40px;
          width: 500px;
          height: 600px;
        }

        .form-group {
          margin-bottom: 20px;
        }

        .form-group label {
          display: block;
          font-size: 14px;
          color: #a0aec0;
          margin-bottom: 5px;
        }

        .form-group input {
          width: 100%;
          padding: 10px;
          border-radius: 4px;
          border: none;
          background-color: #1d2b38;
          color: #fff;
        }

        .btn {
          display: inline-block;
          padding: 10px 20px;
          background-color: #22c55e;
          color: #fff;
          border-radius: 4px;
          text-decoration: none;
          transition: background-color 0.3s ease;
        }

        .btn:hover {
          background-color: #16a34a;
        }
      </style>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
