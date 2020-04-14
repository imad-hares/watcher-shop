<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,500,600,700,800|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.comp.css" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    @yield('extra-css')
</head>
<body >

        @include('partials.nav-bar')
        
        <main class="main" id="main">
            @yield('content')
        </main>
        
        @include('partials.footer')

    
    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      //TABS
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab-links");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "grid";
        evt.currentTarget.className += " active";
      }

      //STICKY HEADER
      // When the user scrolls the page, execute myFunction
      window.onscroll = function() {
        stickyNav();
      };

      // Get the navbar
      var navbar = document.getElementById("navbar");
      var mobilenav = document.getElementById("mobile-nav");

      // Get the offset position of the navbar
      var sticky = navbar.offsetTop;

      // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
      function stickyNav() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky");
          mobilenav.classList.add("mobile-sticky");
        } else {
          navbar.classList.remove("sticky");
          mobilenav.classList.add("mobile-sticky");
        }
      }
    </script>
        @yield('extra-js')

</body>
</html>
