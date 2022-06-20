<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/feather.min.js')}}"></script>
    <script src="{{asset('js/navbar.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/slider.js')}}"></script>
    <!-- <script src="{{asset('js/carousel.js')}}"></script> -->
    <title>Home</title>
</head>

<body>
    <section id='navbar'>
        <ul class="navbar">
            <li class="menu-icon" onclick="toggleMenu()"><i data-feather='menu' class="feather-small"></i></li>
            <li class="site-logo">SITE LOGO</li>
            <li class="mr-auto">
                <ul class="nav-links">
                    <li class="close-menu"><i data-feather='x-circle' class="feather-large" onclick="hidemenu()"></i>
                    </li>
                    <li class="nav-link">Home</li>
                    <li class="nav-link">Blog</li>
                    <li class="nav-link">About Us</li>
                    <li class="nav-link">Contact Us</li>
                    <li class="nav-link">Login</li>
                </ul>
            </li>

        </ul>
    </section>
    <section class="slider">
        <div class="slides">
            <div class="slide"><img src="{{asset('/images/bg/full/1.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('/images/bg/full/2.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('/images/bg/full/3.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('/images/bg/full/4.png')}}" alt=""></div>
        </div>
        <div class="dots">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>
    <section class="section-80">
        <div class="text-center text-xl text-thin text-black-dark mb-50">Who We Are?</div>
        <p class="text-center text-m">
            We are a group of subject experts who have joined their hands to make your life easy through technology
            solution
        </p>
    </section> 03055326988

    <section>
        <div class="flex responsive">
            <div class="w-50 text-danger">
                <h3>Heading</h3>
                <p>Hello it is my template.Hello it is my template hello it is my template hello it is my template hello
                    it is my template hello it is my template hello it is my template hello it is my template hello it
                    is my template hello it is my template hello it is my template hello it is my template hello it is
                    my template hello it is my template hello it is my template hello it is my template hello it is my
                    template hello it is my template hello it is my template hello it is my template hello
                    it is my
                    template hello
                    it</p>
            </div>
            <div class="w-50 p-5">
                <h3>Heading</h3>
                <p>Hello it is my template.Hello it is my template hello it is my template hello it is my template hello
                    it is my template hello it is my template hello it is my template hello it is my template hello it
                    is my template hello it is my template hello it is my template hello it is my template hello it is
                    my template hello it is my template hello it is my template hello it is my template hello it is my
                    template hello it is my template hello it is my template hello it is my template hello
                    it is my
                    template hello
                    it</p>
            </div>
        </div>

    </section>
    <section>
        <div class="flex responsive text-center">
            <div class="w-33 p-5">
                <h3>Heading</h3>
                <p>Hello it is my template.Hello it is my template hello it is my template hello it is my template hello
                    it is my template hello it is my template hello it is my template hello it is my template hello it
                    is my template hello it is my template hello it is my template hello it is my template hello it is
                    my template hello it is my template hello it is my template hello it is my template hello it is my
                    template hello it is my template hello it is my template hello it is my template hello
                    it is my
                    template hello
                    it</p>
            </div>
            <div class="w-33 p-5">
                <h3>Heading</h3>
                <p>Hello it is my template.Hello it is my template hello it is my template hello it is my template hello
                    it is my template hello it is my template hello it is my template hello it is my template hello it
                    is my template hello it is my template hello it is my template hello it is my template hello it is
                    my template hello it is my template hello it is my template hello it is my template hello it is my
                    template hello it is my template hello it is my template hello it is my template hello
                    it is my
                    template hello
                    it</p>
            </div>
            <div class="w-33 p-5">
                <h3>Heading</h3>
                <div class="flexbox-50 centered">
                    amazing
                </div>
                <p>Hello it is my template.Hello it is my template hello it is my template hello it is my template hello
                    it is my template hello it is my template hello it is my template hello it is my template hello it
                    is my template hello it is my template hello it is my template hello it is my template hello it is
                    my template hello it is my template hello it is my template hello it is my template hello it is my
                    template hello it is my template hello it is my template hello it is my template hello
                    it is my
                    template hello
                    it</p>
            </div>
        </div>

    </section>
    <section class="message background-image-fixed">
        <p>no one can hide this message</p>
    </section>

    <script>
    feather.replace(); //for flaticons
    </script>
</body>

</html>