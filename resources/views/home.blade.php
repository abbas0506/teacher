@extends('layouts.basic')
@section('header')
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
                <li class="nav-link">
                    <a href="{{url('signin')}}">Login</a>
                </li>
            </ul>
        </li>

    </ul>
</section>
<!-- <section class="h-100 slider">
        <div class="slides">
            <div class="slide"><img src="" alt=""></div>
            <div class="slide"><img src="" alt=""></div>
            <div class="slide"><img src="" alt=""></div>
            <div class="slide"><img src="" alt=""></div>
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

@endsection
@section('content')
<section class="w-80">

    <h1 class="text-center top-spacer bottom-spacer">We Are ...</h1>
    <p class="text-center text-medium">
        We are a group of subject experts who have joined their hands to make both of students and teachers' life easy through technology
        solution
    </p>

    <div class="flex three-cols top-spacer bottom-spacer">
        <div class="col centered">
            <img src="/images/icons/self-motivation.png" alt="" class="icon-large">
            <h3 class="mt-2">Self Motivated</h3>
        </div>
        <div class="col centered">
            <img src="/images/icons/collaboration.png" alt="" class="icon-large">
            <h3 class="mt-2">Collaborative</h3>
        </div>
        <div class="col centered">
            <img src="/images/icons/commitment.png" alt="" class="icon-large">
            <h3 class="mt-2">Committed</h3>
        </div>
    </div>
    </div>

    </div>
</section>

<section class="bg-primary p-5">
    <div class="flex responsive bg-primary">
        <div class="col w-70">
            <h2 class="text-light">We have a big question bank</h2>
            <p class="text-smoke mt-5">Our experts have prepared a big question bank from the text books recommended for primary to intermediate clasess. We have done our best to filter out only the most popular questions from final examination point of view.</p>
        </div>
        <div class="col w-30 centered align-sm-left">
            <div>
                <div class="flex m-auto">
                    <div class="pr-4 col centered"><img src="/images/icons/mcq.png" alt="" class="icon-medium"></div>
                    <div>
                        <h3>MCQs</h3>
                        <p class="text-black-dark text-small">1000+ questions </p>
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="pr-4 col centered"><img src="/images/icons/short.png" alt="" class="icon-medium"></div>
                    <div>
                        <h3>Short Questions</h3>
                        <p class="text-black-dark text-small">1000+ questions </p>
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="pr-4 col centered"><img src="/images/icons/long.png" alt="" class="icon-medium"></div>
                    <div>
                        <h3>Long Questions</h3>
                        <p class="text-black-dark text-small">1000+ questions </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-primary-lighten">
    <div class="flex three-cols centered top-spacer responsive">
        <div class="col centered px-5">
            <img src="/images/icons/student.png" alt="" class="icon-xlarge">
            <p class="text-primary text-center mt-2">Students can prepare for their exams, interviews or evaluate their performance using self-assessment.</p>
        </div>
        <div class="col centered px-5">
            <img src="/images/icons/teacher.png" alt="" class="icon-xlarge">
            <p class="text-primary text-center mt-2">Teachers can generate single-click quiz to quickly assess their students' performance </h3>
        </div>
        <div class="col centered px-5">
            <img src="/images/icons/institution.png" alt="" class="icon-xlarge">
            <p class="text-primary text-center mt-2">Institutions can save their finance by using computer based evaluation of their students.</p>
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
                <label for="">Join our mailing list</label>
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
@endsection
@section('footer')
<section class="spacer border-top border-primary"></section>
<section id='footer' class="w-80 py-4">
    <div class="flex responsive text-s">
        <div class="col w-50">
            <h4>Our Team</h4>
            <p class="mt-2">Our team consists of subject experts, with only mission to make things easy for students and teachers.</p>
        </div>
        <div class="col w-25 pl-5 p-sm-0">
            <h4>Address</h4>
            <div class="flex mt-1 align-items-center">
                <i data-feather="map-pin" class="feather-xsmall"></i>
                <p class="pl-4">Depalpur, Pakistan</p>
            </div>
        </div>
        <div class="col w-25 pl-5 p-sm-0">
            <h4>Follow us</h4>

            <div class="flex mt-1 align-items-center">
                <i data-feather="facebook" class="feather-xsmall"></i>
                <span class="px-3"><i data-feather="linkedin" class="feather-xsmall"></i></span>
                <i data-feather="instagram" class="feather-xsmall"></i>
            </div>
        </div>
    </div>
</section>

@endsection