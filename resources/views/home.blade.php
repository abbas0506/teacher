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

            <li class="menu-icon">
                <label for="menu-toggle"><i data-feather='menu' class="feather-small"></i></label>

            </li>
            <li class="site-logo">SITE LOGO</li>

            <li class="mr-auto">
                <input type="checkbox" id='menu-toggle' class="hidden">
                <ul class="nav-links">

                    <li class="close-menu">
                        <label for="menu-toggle"><i data-feather='x-circle' class="feather-large"></i></label>
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
    <!-- <section class="h-100 slider">
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
    </section> -->
    <section class="h-100">
        <img src="{{asset('/images/bg/full/1.png')}}" alt="" width="100%" height="100%">
    </section>
    <section class="w-80">

        <h1 class="text-center top-spacer bottom-spacer">We Are ...</h1>
        <p class="text-center text-m">
            A group of subject experts who have joined their hands to make your life easy through technology
            solution
        </p>

        <div class="flex three-cols top-spacer bottom-spacer">
            <div class="col centered">
                <img src="/images/icons/self-motivation.png" alt="" width="100" height="100">
                <h3 class="mt-2">Self Motivated</h3>
            </div>
            <div class="col centered">
                <img src="/images/icons/collaboration.png" alt="" width="100" height="100">
                <h3 class="mt-2">Collaborative</h3>
            </div>
            <div class="col centered">
                <img src="/images/icons/commitment.png" alt="" width="100" height="100">
                <h3 class="mt-2">Committed</h3>
            </div>
        </div>
        </div>

        </div>
    </section>

    <section class="bg-primary">
        <h2 class="top-spacer text-light text-center">We have a big question bank</h2>
        <div class="flex three-cols responsive top-spacer bottom-spacer">
            <div class="col centered border-right border-skyblue border-sm-0">
                <img src="/images/icons/mcq.png" alt="" width="120" height="100">
                <h3 class="text-light mt-2">10000+</h3>
            </div>
            <div class="col centered border-right border-skyblue border-sm-0">
                <img src="/images/icons/short.png" alt="" width="120" height="100">
                <h3 class="text-light mt-2">10000+</h3>
            </div>
            <div class="col centered">
                <img src="/images/icons/long.png" alt="" width="120" height="100">
                <h3 class="text-light mt-2">10000+</h3>
            </div>
        </div>

    </section>

    <section class="bg-primary-lighten">
        <div class="flex three-cols centered top-spacer">
            <div class="col centered">
                <img src="/images/icons/student.png" alt="" class="icon-xlarge">
                <h3 class="text-primary mt-2">Student</h3>
            </div>
            <div class="col centered">
                <img src="/images/icons/teacher.png" alt="" class="icon-xlarge">
                <h3 class="text-primary mt-2">Teacher</h3>
            </div>
            <div class="col centered">
                <img src="/images/icons/institution.png" alt="" class="icon-xlarge">
                <h3 class="text-primary mt-2">Institution</h3>
            </div>

        </div>
        <div class="flex h-20 centered top-spacer bottom-spacer">
            <h2 class="text-primary text-center">We make your life easy</h1>
        </div>
    </section>

    <section class="narrative bg-fixed">
        <!-- static background with message -->
    </section>
    <section class="w-80">
        <div class="flex centered two-cols responsive top-spacer">
            <div class="col">
                <div class="stretched-title">Paperless Assessment</div>
                <p>Paperless assessment allows you to assess your students paperlessly </p>
            </div>
            <div class="col centered">
                <img src="/images/illustrations/paperless-assessment.png" class="illustration">
            </div>
        </div>

        <div class="flex centered two-cols responsive col-reverse top-spacer">
            <div class="col centered">
                <img src="/images/illustrations/auto-quiz.png" class="illustration">
            </div>
            <div class="col">
                <div class="stretched-title">Auto Quiz Generation</div>
                <p>Paperless assessment will be conducted Paperless assessment will be conductedPaperless assessment will be conducted Paperless assessment will be conductedPaperless assessment will be conductedPaperless assessment. </p>
            </div>
        </div>
        <div class="flex centered two-cols responsive top-spacer bottom-spacer">
            <div class="col">
                <div class="stretched-title">Test History</div>
                <p>Paperless assessment will be conducted Paperless assessment will be conductedPaperless assessment will be conducted Paperless assessment will be conductedPaperless assessment will be conductedPaperless assessment. </p>
            </div>
            <div class="col centered">
                <img src="/images/illustrations/test-history.png" class="illustration">
            </div>
        </div>

    </section>
    <section>
        <div class="flex centered h-20 bg-primary">
            <h2 class="text-light text-center">" A good teacher is always adaptive "</h2>
        </div>
        <div class="flex centered responsive bg-primary-lighten top-spacer bottom-spacer">
            <div class="col w-30 centered">
                <img src="/images/illustrations/journal.png" class="illustration">
            </div>
            <div class="col w-70 centered">
                <div class="fancyinput" style="width:80%">
                    <input type="text" placeholder="Your email">
                    <label for="" style="color:#fff !important;">Would you like to subscribe our news letter?</label>
                </div>
                <button class="btn btn-primary mt-4">Subscribe</button>
            </div>
        </div>
    </section>

    <section class="w-80">
        <h2 class="text-center top-spacer">Frequenytly Asked Question</h2>
        <h3 class="top-spacer mb-2">Why should I join you?</h3>
        <p>Because, we provide you access to a large question bank </p>
        <input type="checkbox" id='faq' hidden>
        <div class="collapsible">
            <h3 class="mt-4 mb-2">Why should I join you?</h3>
            <p>Because, we provide you access to a large question bank </p>
            <h3 class="mt-4 mb-2">Why should I join you?</h3>
            <p>Because, we provide you access to a large question bank </p>
        </div>
        <div class="flex centered mt-5 bottom-spacer">
            <label for="faq">
                <div class="circular-50 bg-primary text-light icon-wrapper">
                    <i data-feather="chevron-down"></i>
                </div>
            </label>
        </div>
    </section>
    <section class="spacer border-top border-primary border-thick"></section>
    <section id='footer' class="w-80 py-5">
        <div class="flex responsive">
            <div class="col w-70">
                <h3>Our Team</h3>
                <p class="mt-2">Our team consists of subject experts as well as IT experts. We are fully motivated to make things easy for teachers and learners</p>
            </div>
            <div class="col w-30 pl-5 p-sm-0">
                <h3>Contact Us</h3>
                <div class="flex mt-2 align-items-center">
                    <i data-feather="phone" class="feather-xsmall"></i>
                    <p class="pl-4">03000373004</p>
                </div>
                <div class="flex mt-1 align-items-center">
                    <i data-feather="mail" class="feather-xsmall"></i>
                    <p class="pl-4">abbas.sscs@gmail.com</p>
                </div>
                <div class="flex mt-1 align-items-center">
                    <i data-feather="map-pin" class="feather-xsmall"></i>
                    <p class="pl-4">Depalpur, Pakistan</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        feather.replace(); //for flaticons
    </script>




</body>

</html>