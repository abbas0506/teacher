<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/feather.min.js')}}"></script>
    <script src="{{asset('js/navbar.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="{{asset('js/slider.js')}}"></script> -->
    <title>Teacher.pk</title>
</head>

<body>
    @yield('header')
    @yield('content')
    @yield('footer')
    <script>
        feather.replace(); //for flaticons
    </script>

</body>

</html>