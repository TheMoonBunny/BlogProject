<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="Simplest Web" href="https://simplestweb.in/rss.xml" /><link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

    <title>HowToComputerLife</title>
</head>
<body>
   
   @include('layouts.navbar')

    @yield('content')


    @include('layouts.footer')
</body>
</html>