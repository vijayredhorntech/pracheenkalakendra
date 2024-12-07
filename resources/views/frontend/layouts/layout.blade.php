<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/frontend/img/favicons.png')}}"
          style="object-fit:contain;">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
    <!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">-->
    <link href="http://fonts.cdnfonts.com/css/arial" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/fonts/ELEPHNT.TTF')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/fonts/ELEPHNTI.TTF')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/fonts/FELIXTI.TTF')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <title>Pracheen Kala Kendra</title>
    <style>
        ul.nav-menu {
            position: absolute;
            float: left;
            left: 100%;
            width: 100%;
            background: #fff;
            display: none;
            top: 0;
            list-style: none;
            padding-left: 10px;
        }

        .main-mainu:hover ul.nav-menu {
            display: block;
        }

        ul.nav-menu li {
            position: relative;
            top: 0;
        }

        #closeNavBtn {
            position: absolute;
            right: 10px;
            top: 10px;
            display: none;
        }

        @media (max-width: 992px) {
            #navbarNavDropdown {
                display: none;
            }

            .navbar-toggler {
                display: block !important;
                position: absolute;
                right: 10px;
                top: 10px;
            }

            #navList {
                display: none;
            }


        }

        .show {
            display: block !important;
        }

        .hide {
            display: none !important;
        }

        .display {
            display: flex !important;
            flex-direction: column !important;
        }

        .listMargin {
            margin-left: 20px;
        }


    </style>

    <style>

        .navbar {
            position: relative;
        }

        .nav-list {
            display: flex;
            justify-content: center;
            gap: 2rem;
            list-style: none;
            margin: 0px auto;

        }

        .nav-item {
            position: relative;
        }
        .nav-link {
            color: #000;
            font-weight: 500 !important;
            text-decoration: none;
            padding: 0rem 1rem;
            border-right:  1px solid #dadada;
            font-size: 18px !important;
            transition: background-color 0.3s;
        }

        /* First level dropdown */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            width: max-content;
            padding: 0px 1rem;
            max-width: 1000px;
            z-index: 1000;
        }

        .nav-item:hover .dropdown-content {
            display: flex;
            gap: 2rem;
        }

        .dropdown-column {
            padding: 0px !important;
            flex: 1;
        }

        .column-title {
            font-weight: 500 !important;
            font-size: 17px;
            border-bottom: 1px solid #dadada;
            padding: 0.5rem 1rem  !important;
            background-color:  #b60001;
            color: white;

        }

        /* Second level - Column items */
        .submenu {
            list-style: none;
            margin-top: 0.5rem;
        }

        .submenu-item {
            position: relative;
            margin-bottom: 0.5rem;

        }
        .submenu-item .submenu-link {
            color: #666;
            text-decoration: none;
            display: block;
            transition: color 0.3s;
            padding:0.5rem 0px;
            font-size: 16px !important;
            border-bottom:  1px solid #dadada;
        }


        /* Third level - Nested items */
        .nested-submenu {
            list-style: none;
            margin-left: 0.5rem;
            margin-top: 1rem;
            display: none;
        }
        .submenu-item:hover .nested-submenu {
            display: block;
        }

        .nested-submenu-item {
            margin-bottom: 0.3rem;
        }

        .nested-submenu-item .submenu-link {
            font-size: 15px !important;
            color: black;
            padding: 0.3rem 0;
        }

        /* Hover effects */
        .nav-link:hover {
            background-color: #444;
        }

        .submenu-link:hover {
            color: #b60001;
        }

        /* Mobile styles */
        @media (max-width: 992px) {
            .dropdown-content {
                max-width: 300px;
            }
            .nav-list {
                flex-direction: column;
                gap: 0;
            }

            .dropdown-content {
                flex-direction: column;
            }

            .dropdown-column {
                margin-bottom: 1rem;
                padding: 0.5rem;
                border-bottom: 1px solid #eee;
            }

            .dropdown-column:last-child {
                border-bottom: none;
            }

            .nav-item:hover .dropdown-content {
                display: none;
            }

            .nav-item.active .dropdown-content {
                display: block;
            }
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.innerWidth <= 991) {
                const navLinks = document.querySelectorAll('.nav-item > .nav-link');

                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        const parentItem = this.parentElement;
                        const dropdownContent = parentItem.querySelector('.dropdown-content');

                        if (dropdownContent) {
                            e.preventDefault();
                            parentItem.classList.toggle('active');
                        }
                    });
                });
            }
        });
    </script>
    @stack('styles')
</head>
<body>



@include('frontend.layouts.header')
@yield('content')
@include('frontend.layouts.footer')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script>
    $('#audio-control').click(function(){
        if( $("#myVideo").prop('muted') ) {
            $("#myVideo").prop('muted', false);
            $(this).text('Mute');
            // or toggle class, style it with a volume icon sprite, change background-position
        } else {
            $("#myVideo").prop('muted', true);
            $(this).text('Unmute');
        }
    });
</script>
<script type="">
        (function($) {
  var s,
  spanizeLetters = {
    settings: {
      letters: $('.js-spanize'),
    },
    init: function() {
      s = this.settings;
      this.bindEvents();
    },
    bindEvents: function(){
      s.letters.html(function (i, el) {
        //spanizeLetters.joinChars();
        var spanizer = $.trim(el).split("");
        return '<span>' + spanizer.join('</span><span>') + '</span>';
      });
    },
  };
  spanizeLetters.init();
})(jQuery);
      </script>
<script type="">
        const slides = document.querySelectorAll('.slide');
const controls = document.querySelectorAll('.control');
let activeSlide = 0;
let prevActive = 0;

changeSlides();
let int = setInterval(changeSlides, 4000);

function changeSlides() {
  slides[prevActive].classList.remove('active');
  controls[prevActive].classList.remove('active');

  slides[activeSlide].classList.add('active');
  controls[activeSlide].classList.add('active');

  prevActive = activeSlide++;

  if(activeSlide >= slides.length) {
    activeSlide = 0;
  }

  console.log(prevActive, activeSlide);
}

controls.forEach(control => {
  control.addEventListener('click', () => {
    let idx = [...controls].findIndex(c => c === control);
    activeSlide = idx;

    changeSlides();

    clearInterval(int);
    int = setInterval(changeSlides, 4000);
  });
});
      </script>
<script type="">
        $(document).ready(function() {

    /* Every time the window is scrolled ... */
    $(window).scroll( function(){

        /* Check the location of each desired element */
        $('.fade').each( function(i){

            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){

                $(this).animate({'opacity':'1'},500);

            }

        });

    });

});
      </script>
<script>
    $(function(){
        //the shrinkHeader variable is where you tell the scroll effect to start.
        var shrinkHeader = 70;
        $(window).scroll(function() {
            var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $('.head_nav').addClass('smaller');
            }
            else {
                $('.head_nav').removeClass('smaller');
            }
        });
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }
    });
</script>
<script>
    function openNav() {
        var element = document.getElementById("navbarNavDropdown");
        element.classList.add("show");
        var element = document.getElementById("openNavBtn");
        element.classList.add("hide");
        var element = document.getElementById("closeNavBtn");
        element.classList.add("show");
        var element = document.getElementById("navList");
        element.classList.add("show");
        element.classList.add("display");

    }

    function closeNav() {
        var element = document.getElementById("navbarNavDropdown");
        element.classList.remove("show");
        var element = document.getElementById("openNavBtn");
        element.classList.remove("hide");
        var element = document.getElementById("closeNavBtn");
        element.classList.remove("show");
        var element = document.getElementById("navList");
        element.classList.remove("show");
        element.classList.remove("display");
    }
</script>

@stack('scripts')
</body>
</html>


