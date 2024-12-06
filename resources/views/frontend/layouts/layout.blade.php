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


