<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
<link rel="alternate" type="application/rss+xml" title="Simplest Web" href="https://simplestweb.in/rss.xml" /><link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<title>HowToComputerLife</title>
</head>
<body>
   @include('layouts.navbar')

    @yield('content')


    @include('layouts.footer')
</body>
</html>