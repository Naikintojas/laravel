<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/aos.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<x-app-layout>
    <x-slot name="header">
    </x-slot>

    @yield('content')
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
</x-app-layout>
