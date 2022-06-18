<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SOT</title>
   <link rel="icon" href="{{ asset('/images/logo/favicon.ico') }}">
   <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/registration.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/responsive.css')}}" rel="stylesheet">
   <link href="{{ asset('/css/fontawesome.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/fancyinput.css') }}" rel="stylesheet">


   <script src="{{ asset('/js/feather.min.js')}}"></script>
   <script src="{{ asset('/js/app.js') }}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
   @yield('header')
   @yield('content')
   @yield('footer')
   @yield('script')

   <!-- Messenger Chat plugin Code -->
   <div id="fb-root"></div>

   <!-- Your Chat plugin code -->
   <div id="fb-customer-chat" class="fb-customerchat">
   </div>

   <script>
   feather.replace();

   // if window scrolled down, make header light
   window.onscroll = function(ev) {
      if ((window.scrollY) >= 20) {
         if (!$('#navbar').hasClass('light')) {
            $('#navbar').addClass('light');
            $('#menubars').removeClass('feather-light');

         }
      } else {
         if ($('#navbar').hasClass('light')) {
            $('#navbar').removeClass('light');
            $('#menubars').addClass('feather-light');

         }
      }
   };
   </script>
</body>

</html>