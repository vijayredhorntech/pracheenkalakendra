@push('styles')
    <style>
        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        .programmeImage
        {
            width: 100% !important;
            padding-bottom: 0px !important;
            height: 300px !important;
            object-fit: cover !important;
            border-radius: 10px !important;
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        .newsCard {
            box-shadow: 0px 0px 15px 2px #dcdbdb;
            padding: 10px 10px;
        }

        .cardHeader {
            padding: 1px 20px;
            background-color: rgb(154, 41, 18);
        }

        .cardHeader h2 {
            font-family: FELIXTI !important;
            font-weight: 600;
            font-size: 25px;
            color: white;
        }

        .cardBody {
            padding: 1px 20px;
            max-height: 400px;
            overflow-y: auto;


        }

        .announcementSection {
            display: flex;
            gap: 10px;
            align-items: center;
            padding: 5px 0px;
            border-bottom: 1px solid rgba(154, 41, 18, 0.47);

        }
        .subscriptionFormDiv
        {
            width: 800px !important;
            margin: 0px auto;
            padding: 50px 10px
        }

        .subscriptionForm
        {
            display: flex ;
        }
        .subscriptionForm input {
            border: 1px solid #d00304 !important;
            color: #b60001 !important;
            border-top-left-radius: 3px !important;
            border-bottom-left-radius: 3px !important;
            width: 600px !important;
            padding: 10px 10px !important;
        }
        .subscriptionForm input::placeholder{
            color: #b60001 !important;
        }
        .subscriptionForm input:focus{
            outline: none;
            border: 1px solid #7a0203;
            transition: all ease-in 2s;
        }
        .subscriptionForm button{
            border: 1px solid #d00304 !important;
            color: white !important;
            border-top-right-radius: 3px !important;
            border-bottom-right-radius: 3px !important;
            padding: 10px 10px !important;
            background-color: #d00304 !important;
            cursor: pointer !important;
            transition: all ease-in 0.5s !important;
        }
        .subscriptionForm button:hover{
            color: #d00304 !important;
            background-color: white !important;
            transition: all ease-in 0.5s !important;
        }


        .eventsSection {
            align-items: center;
            padding: 5px 0px;
            border-bottom: 1px solid rgba(154, 41, 18, 0.47);

        }

        .announcementDate {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 60px;
            width: 60px;
            border-radius: 5px;
            border: 1px solid rgb(154, 41, 18);
            background-color: rgb(154, 41, 18);
            color: white;
            font-family: FELIXTI !important;
            font-weight: 600;
            font-size: 13px;
            flex-shrink: 0;
        }

        .eventDate {
            color: rgb(154, 41, 18);
            font-family: FELIXTI !important;
            font-weight: 600;
            font-size: 13px;
            flex-shrink: 0;
        }

        .announcementTitle {
            padding: 0px 10px;
        }

        .announcementTitle p {
            font-family: FELIXTI !important;
            font-weight: 500;
            font-size: 18px;
        }

        .eventTitle p {
            font-family: FELIXTI !important;
            font-weight: 500;
            font-size: 18px;
        }

        .programTitle p {
            font-weight: 500;
            font-size: 28px;
        }

        .programTime p {
            font-family: FELIXTI !important;
            font-weight: 600;
            font-size: 15px;
        }

        .programVenue p {
            font-family: FELIXTI !important;
            font-weight: 600;
            font-size: 15px;
        }

        .findMoreButton {
            width: max-content;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 50px;
            border: 1px solid rgb(154, 41, 18);
            background-color: rgb(154, 41, 18);
            color: white;
            font-family: FELIXTI !important;
            font-weight: 600;
            font-size: 15px;
            flex-shrink: 0;
            padding: 10px 30px;
            transition: transform 200ms ease-in-out;
            cursor: pointer;

        }

        .findMoreButton:hover {
            transform: scale(1.1);
            transition: transform 200ms ease-in-out;

        }

        .programDetailSection {
            box-shadow: 0px 0px 15px 2px #dadada;
        }


        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }

        @media only screen and (max-width: 992px) {
            .subscriptionFormDiv
            {
                width: max-content !important;
                margin: 0px auto;
                padding: 50px 10px
            }
            .cardHeader h2 {
                font-size: 20px;
            }

            .programTitle p {
                font-weight: 500;
                font-size: 20px;
            }
            .programmeImage
            {
                width: 100% !important;
                height: 200px !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .programmeImage
            {
                width: 100% !important;
                height: 250px !important;
            }
            .subscriptionForm
            {
                display: flex ;
            }
            .subscriptionForm input {
                width: 300px;
            }
        }
        @media only screen and (max-width: 474px) {
            .programmeImage
            {
                width: 100% !important;
                height: 200px !important;
            }

            .subscriptionForm
            {
                display: flex ;
                flex-direction: column;
                gap: 10px;
            }
            .subscriptionForm input {
                width: 300px;
            }
        }
        @media only screen and (max-width: 762px) {
            .cardHeader h2 {
                font-size: 25px;
            }

        }

        @media only screen and (max-width: 440px) {
            .cardHeader h2 {
                font-size: 20px;
            }
        }

        .first-slide {
            display: block;
        }

        div#myCarousel {
            padding-top: 180px;
        }

        a.left.carousel-control, a.right.carousel-control {
            display: ;
        }

        .carousel-indicators {
            bottom: 50px;
        }

        .carousel-indicators li, .carousel-indicators .active {
            width: 15px;
            height: 15px;
            margin: 7px;
        }

        div#myCarousel a.left.carousel-control, div#myCarousel a.right.carousel-control {
            background-image: none;
        }

        .about-sec h2 {
            font-size: 28px;
            margin-bottom: 15px;
            font-weight: 700;
            margin-top: 4px;
        }

        .about-sec strong {
            font-size: 20px;
            font-weight: 500;
        }

    </style>
@endpush
@extends('frontend.layouts.layout')

@section('content')
    <!--<img class="main-image"src="img/banner22.jpg">-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators" style="bottom: 0px">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
            <li data-target="#myCarousel" data-slide-to="10"></li>
            <li data-target="#myCarousel" data-slide-to="11"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('assets/frontend/img/banner-images/banner (14).jpg')}}" alt="Los Angeles"
                     style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/copy1.jpg')}}" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/koser kutumbh.jpg')}}" alt="New york" style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/banner-images/banner (1).jpg')}}" alt="Chicago"
                     style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/banner-images/banner (11).jpg')}}" alt="New york"
                     style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/banner-images/banner (3).jpg')}}" alt="New york"
                     style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/banner-images/banner (4).jpg')}}" alt="Chicago"
                     style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/banner-images/banner (5).jpg')}}" alt="New york"
                     style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/banner-images/banner (6).jpg')}}" alt="New york"
                     style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/banner-images/banner (7).jpg')}}" alt="Chicago"
                     style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/banner-images/banner (8).jpg')}}" alt="Chicago"
                     style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('assets/frontend/img/banner-images/banner (9).jpg')}}" alt="Chicago"
                     style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <div class="statsCarousel">
            @forelse($bannerStats as $bannerStat)
                <div class=" px-2 py-3 d-flex justify-content-center flex-column align-items-center text-white"
                     style="background-color: {{$loop->iteration%2 ===0?'#960102':'#7e0202'}}">
                    <span style="font-weight: 500; font-size: 17px">{{$bannerStat->title}}</span>
                    <p style="font-size: 13px">{{$bannerStat->description}}</p>
                </div>
            @empty
                <div class="col-12 px-2 py-3 d-flex justify-content-center flex-column align-items-center text-white bg-primary">
                    <span style="font-weight: 500; font-size: 17px">No stats found</span>
                </div>
            @endforelse
    </div>

    <marquee scrollamount="8">
        <span style="color:#b70000; font-size: 20px;">Notifications:- </span>
        @foreach($notifications->take(2) as $notification)
            <a href="{{asset('storage/'. $notification->notification_file)}}" target="_blank"
               style="color:#b70000; font-size: 20px;">{{$notification->notification_title}} &nbsp &nbsp |</a>
        @endforeach
    </marquee>

    <div class="parallax">
        <div class="about_us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aboutus">
{{--                            <h3 class="cssanimation sequence leFadeInLeft">WELCOME TO PRACHEEN KALA KENDRA</h3>--}}
                                    <div style="display: flex; justify-content: space-between; padding-bottom: 20px">
                                        <h2 style="color: #b60001">WHAT'S ON</h2>

                                        <a href="{{route('events')}}">
                                            See All
                                        </a>
                                    </div>
                                    <div class="programmeCarousel">
                                        @forelse($programmes as $programme)
                                            <div style="padding-right: 15px; border-radius: 10px; overflow: hidden">
                                                <a href="{{route('view-programme',['id'=>$programme->id])}}">
                                                    <img src="{{asset('storage/'.$programme->programme_image)}}" alt="Image 1" class="programmeImage">

                                                </a>
                                            </div>
                                            @empty
                                                <p>No programmes available.</p>
                                        @endforelse
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #ececec">
        <div class="subscriptionFormDiv">
            <h2 style="color: #b60001; margin-top: 0px">Subscribe</h2>
            <form action="{{route('enquiry.create',['type'=>'subscription'])}}" method="POST" class="subscriptionForm">
                @csrf
                <input type="email" name="email" placeholder="Enter you email....">
                <button type="submit">SUBSCRIBE</button>
            </form>
            <p>
                @if(session('success'))
                    <span style="color: green">{{session('success')}}</span>
                @endif
                @if(session('error'))
                    <span style="color: red">{{session('error')}}</span>
                @endif
            </p>
        </div>
    </div>

    <div class="parallax">
        <div class="about_us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aboutus" style="margin-top: 20px">
                            <h2>ABOUT US</h2>
                            <img src="{{asset('assets/frontend/img/dvde.png')}}">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="kendra_text ">
                            <p data-animate-in="up" align="justify">Established in 1956, Pracheen Kala Kendra is one of
                                the oldest, premier and

                                prestigious organizations of the country dedicated to promotion, preservation and

                                dissemination of Indian Classical arts. At present , Pracheen Kala Kendra is a well
                                known institution imparting quality education and
                                training under ancient Gurukul parampara in the subjects of Indian Classical Music
                                including Carnatic Music (Vocal & Instrumental),
                                Classical Dances (e.g. Kathak, Bharatnatyam, Odissi Dance, etc.) and Fine Arts
                                (Painting) and conducting examinations in the field of
                                performing and visual arts for the last 60 years. Having its cultural Headquarters at
                                Chandigarh, an enormous Administrative set-up at
                                Mohali (Punjab), a zonal office for Eastern India at Kolkata, regional offices at New
                                Delhi , Bhubaneswar (Odisha), Patna, (Bihar) , Jorhat
                                (Assam), Pracheen Kala Kendra , with network of about 3800 affiliated
                                centres/institutes/schools of classical music and dance situated all over
                                India and abroad including USA, UK, Canada, Singapore, Mauritius, Nepal, Bangladesh,
                                Kuwait, UAE, South Africa, etc. and students strength of
                                about 3.00 lacs makes it the largest organization of its kind in present times. Kendra
                                is committed to provide learner's access to the classical arts irrespective
                                of their age, religion, gender and region keeping in mind the fundamental values of
                                Indian philosophy and spirituality.</p>

                            <p data-animate-in="fadeIn" data-animate-in-delay="100" align="justify">Besides this, Kendra
                                undertakes various cultural activities and organizes
                                a number of festivals of classical Music and Dance, not only in Chandigarh but across
                                various other Indian states/cities in collaboration /association
                                its affiliated centres as well as with support of the local/state government/semi
                                government cultural bodies. Holding of seminars, conferences, workshops,
                                painting exhibitions, competitions etc. are some of its other main functions. With its
                                functions and activities carried throughout the year in various parts
                                of the country, towards the fulfillment of its Aims and Objects, the Kendra is working
                                at all India level as institution of National Presence and eminence.</p>
                        </div>
                        <div class="listing">
                            <h2> QUICK FACTS</h2>
                            <ul>
                                <img src="{{asset('assets/frontend/img/icons8-done-64.png')}}">
                                <li>One of the oldest and leading cultural organizations of India.</li>
                        </div>
                        <div class="listing">
                            <img src="{{asset('assets/frontend/img/icons8-done-64.png')}}">
                            <li>Established in 1956 at Chandigarh.</li>
                        </div>
                        <div class="listing">
                            <img src="{{asset('assets/frontend/img/icons8-done-64.png')}}">
                            <li> It goes to the credit of the Kendra to put Chandigarh on the cultural map of the
                                India.
                            </li>
                        </div>
                        <div class="listing">
                            <img src="{{asset('assets/frontend/img/icons8-done-64.png')}}">
                            <li> Almost all the contemporary artists of Indian classical performing Arts have performed
                                under its aegis since its inception.
                            </li>
                        </div>
                        <div class="listing">
                            <img src="{{asset('assets/frontend/img/icons8-done-64.png')}}">
                            <li> The Kendra owns seven campuses – Chandigarh, Mohali , Kolkata, New Delhi , Bhubaneswar,
                                Patna and Jorhat , Assam.
                            </li>
                        </div>
                        <div class="listing">
                            <img src="{{asset('assets/frontend/img/icons8-done-64.png')}}">
                            <li>The Kendra has more than 3800 affiliated centres in India and abroad including USA, UK,
                                Australia, Canada, South Africa, UAE, Kuwait, Singapore, Mauritius, Kualalampur etc.
                            </li>
                        </div>
                        <div class="listing">
                            <img src="{{asset('assets/frontend/img/icons8-done-64.png')}}">
                            <li>The diplomas awarded by the Kendra are recognized by various Universities, State
                                Governments and Boards.
                            </li>
                        </div>
                        </ul>
                        <div class="about-sec">
                            <h3> FROM THE DESK OF SECRETARY,</h3>

                            <div class="quotes">
                                <p>
                                    "Good motives, sincerity, and infinite love can conquer the world. One single soul
                                    possessed of these virtues can destroy the dark designs of millions of hypocrites
                                    and brutes."<br>

                                    <strong class="single-wl">Swami Vivekananda</strong>
                                </p>
                            </div>
                            <div class="photo-p" style="float: right; margin: 10px 10px 15px 15px;">
                                <img loading="lazy" class="alignnone wp-image-570 size-full"
                                     src="{{asset('assets/frontend/img/about-img (1).jpg')}}" border="1"
                                     alt="ML-Koser,-Founder,-Pracheen-Kala-Kendra2" width="200" height="185">
                                <h5>SH. SAJAL KOSER <br>(Secretary, Pracheen Kala Kendra) </h5>
                            </div>
                            <div class="founder-content">
                                <p align="justify">
                                    Music has always been an important cultural and social factor throughout human
                                    history. As far as Indian culture is concerned it is the legacy of collective
                                    memories of our society over the centuries.<br><br>
                                    India has a great tradition of music from ancient period to the present times. The
                                    Indian classical music and arts represent India's cultural glory. Our Visual and
                                    Performing Art forms are like a bridge between the value systems of ancient India
                                    and the new generation. They represent the eternal and everlasting principles of
                                    universe and life that promote discipline, obedience and peaceful coexistence.
                                    All such forms of Indian art and music form part of our rich culture and play a key
                                    role in unifying the country and its' people. Indian classical arts have powerful
                                    effects on a person's ability to be mindful, as it makes us more emotionally aware.
                                    Art in any form also acts as an equalizer. It possesses the attributes that heal the
                                    mind, body and soul to make human being a liberated soul.
                                    <br><br>
                                    Art has the ultimate potential to bring us closer to our inner soul and realize our
                                    true divine self. World is going through an unprecedented change. We need to
                                    honestly acknowledge that happiness quotient is dipping. Our busy lifestyles are
                                    robbing us from enjoying simple aspects of life. In the present day, fast-paced
                                    lifestyle, listening to music can provide solace to mind.
                                    <br><br>
                                    The vast treasure of Indian classical forms needs to be nurtured and propagated. We
                                    must collectively encourage these Art forms to thrive and flourish.
                                    <br><br>
                                    Time and again studies have shown that children who are engaged in music and other
                                    art forms tend to have better cognitive skills and do well in academic subjects such
                                    as math and science. They improve memory, auditory skills and the attention span.
                                    <br><br>
                                    Classical Music and dance learning can be made part of curriculum for school
                                    children to ensure stress-free environment and to improve learning outcomes. We are
                                    already using technology to spread this knowledge and more students in India and
                                    abroad are learning Indian classical art forms through online resources and tutors.
                                    These efforts need to be further expanded before it's too late.The future generation
                                    must not be deprived of this priceless legacy which holds the capability to change
                                    the world.
                                </p></div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>






    <div class="progame_section position-relative " style="padding: 0px">
        <img src="{{asset('assets/frontend/img/bg.png')}}" class="side_bg d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aboutus">
                        <h2> PROGRAMME</h2>
                        <img src="{{asset('assets/frontend/img/dvde.png')}}">

                    </div>

                    <div class="pro-event">

                        <div class="monthly-program">
                            <ul style="display:flex; gap:5px; justify-content:center">


                                @forelse($programmes->take(2) as $programme)

        @if($programme->programme_image)
            @php
                // Get the file extension
                $extension = pathinfo($programme->programme_image, PATHINFO_EXTENSION);
            @endphp

            @if(in_array(strtolower($extension), ['jpg', 'jpeg', 'png']))
                 <li>
                   <img src="{{ asset('storage/' . $programme->programme_image) }}" style="width:100%">
                 </li>
            @elseif(strtolower($extension) == 'pdf')
                <embed src="{{ asset('storage/' . $programme->programme_image) }}" type="application/pdf" width="100%" height="500px">
            @endif
        @endif

@empty
    <p>No programmes available.</p>
@endforelse



                            </ul>
                        </div>

                    </div>



{{--                    @forelse($programmes->take(2) as $programme)--}}
{{--                        <div class="row programSection"--}}
{{--                             style="margin-bottom: 50px; display: flex; flex-direction: {{$loop->iteration%2==0?'row-reverse':'row'}}">--}}
{{--                            <div class="col-md-7" style="padding: 0px">--}}
{{--                                <img src="{{asset('storage/'. $programme->programme_image)}}"--}}
{{--                                     style="width:100%; height: 300px">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-5 programDetailSection"--}}
{{--                                 style="padding: 5px 10px; display: flex; flex-direction: column; justify-content: center">--}}
{{--                                <div class="programTitle" style="padding:2px 15px">--}}
{{--                                    <p>{{$programme->programme_title}}</p>--}}
{{--                                </div>--}}
{{--                                <div class="programTime" style="padding: 2px 15px">--}}
{{--                                    <p>{{\Carbon\Carbon::parse($programme->programme_date)->format('d/m/Y')}}--}}
{{--                                        At {{ \Carbon\Carbon::parse($programme->programme_time)->format('h:i A') }}</p>--}}
{{--                                </div>--}}
{{--                                <div class="programVenue" style="padding: 2px 15px">--}}
{{--                                    <p>Venue: {{$programme->programme_location}}</p>--}}
{{--                                </div>--}}
{{--                                <div style="padding: 2px 15px">--}}
{{--                                    <a href="{{route('events')}}" class="findMoreButton">--}}
{{--                                        Find Out More--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><br>--}}
{{--                    @empty--}}
{{--                    @endforelse--}}


                </div>

            </div>

        </div>
    </div>


    <!--Announcement, Events, News Section starts here-->
    <div class="progame_section position-relative " style="padding: 0px; padding-bottom: 50px">
        <div class="container">
            <div class="row">



                <div class="col-md-6" style="padding: 10px 10px">
                    <div class="newsCard">
                        <div class="cardHeader">
                            <h2>Announcement/ News</h2>
                        </div>
                        <div class="cardBody">
                            <marquee behavior="" direction="up" style="max-height: 400px"  scrollamount="5">
                                @forelse($notifications as $notifiation)
                                    <a href="{{route('announcements')}}" style="text-decoration: none"
                                       class="announcementSection">
                                        <div class="announcementDate">
                                            {{\Carbon\Carbon::parse($notifiation->notifiation_date)->format('d/m/Y')}}
                                        </div>
                                        <div class="announcementTitle">
                                            <p style="color: black">
                                                {{$notifiation->notification_title}}
                                            </p>
                                        </div>
                                    </a>
                                @empty
                                @endforelse
                            </marquee>



                        </div>
                    </div>

                </div>
                <div class="col-md-6" style="padding: 10px 10px">
                    <div class="newsCard">
                        <div class="cardHeader">
                            <h2>Students Achievements</h2>
                        </div>
                        <div class="cardBody" style="max-height: 300px; overflow-y: hidden">
                            <marquee behavior="" direction="up"  style="max-height: 400px"  scrollamount="5">
                               @forelse($achievements as $achievement)
                                <a href="{{route('studentAchievements')}}" style="text-decoration: none">
                                    <div class="eventsSection">
                                        <div class="eventTitle">
                                            <p style="color: black">
                                                {{$achievement->title}}
                                            </p>
                                        </div>
                                        <div class="eventDate">
                                            {{ \Illuminate\Support\Str::words($achievement->description, 12, '...') }}
                                        </div>
                                    </div>
                                </a>
                                @empty
                                @endforelse

                            </marquee>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--Announcement, Events, News Section ends here-->

    <!--<div class="paralex">-->
    <!--    <div class="categories ">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-12">-->
    <!--                    <div class="aboutus">-->
    <!--                        <h2>GLIMPSES OF TREASURES FROM  OUR VALUABLE  COLLECTIONS</h2>-->
    <!--                        <img src="img/dvde.png">-->
    <!---->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-4">-->
    <!--                    <div class="category_div cardItem ">-->
    <!--                        <img src="img/TST.jpg"><a href="Classical-Dance-home.php">-->
    <!--                            <h3>Classical Dance</h3></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-md-4">-->
    <!--                    <div class="category_div cardItem ">-->
    <!--                        <img src="img/m.png"><a href="Classical-Music-home.php">-->
    <!--                            <h3>Classical Music</h3></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-md-4">-->
    <!--                    <div class="category_div cardItem ">-->
    <!--                        <img src="img/k.png"> <a href="fine_arts.php">-->
    <!--                            <h3>Fine Arts</h3> </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                 <div class="col-md-6">-->
    <!--                   <div class="category_div cardItem ">-->
    <!--                    <img src="img/Gurmat Sangeet Logo Final.png"> <a href="Gurmat_Sangeet_page.php">-->
    <!--                     <h3>Gurmat Sangeet </h3></a>-->
    <!--                   </div>-->
    <!--                 </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->


    <!--<div class="parallax_1 ">
    <div class="subscribes position-relative fade">
      <img src="img/lyrs.png" class="iyes d-none">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="subscribe_bg ">
              <img src="img/k.png">
            </div>
          </div>
          <div class="col-md-6 mt-2">
            <div class="subsricbe_text mt-0 pt-0 ">
              <h2 class="mb-4 pb-2 ">Subscribe to our Newsletter</h2>
              <p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
              <button class="btn btn_usbsicbe mt-5">SUBSCRIBE <i class="fa fa-arrow-right"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>-->

@endsection

@push('scripts')
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 1000); // Change image every 2 seconds
        }
    </script>
    <script type="">
  // define some vars
var container = document.getElementById("container"),
    carousel = document.getElementById("carousel"),
    nextBtn =  document.getElementById("next"),
    prevBtn =  document.getElementById("prev"),
    effect = document.getElementById("effect"),
    images = Array.from(document.querySelectorAll('#carousel>img')),
    currentActive = 0;

// resize the carousel evry time the window is resizing
window.addEventListener('resize', containerResize);

//call containerResize to resize the carousel after load
containerResize();

// call "startEffect" to show the first slide
startEffect();

// make the next slide to current active slide and call "startEffect" function
nextBtn.onclick = function(){
    currentActive += 1;
    startEffect();

};
// make the previous slide to current active slide and call "startEffect" function
prevBtn.onclick = function(){
    currentActive -= 1;
    startEffect();
};

function containerResize(){
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;
// resize the container with 16:9 aspect ratio
   container.style.height = 9 / 16 * windowWidth+"px";
   container.style.width = windowWidth+"px";
}



function startEffect(){
// make next and prev button unclickable and hide them
    nextBtn.style.pointerEvents = 'none';
    prevBtn.style.pointerEvents = 'none';
    nextBtn.style.opacity = 0;
    prevBtn.style.opacity = 0;
// hide the next button if the current active slide is the last slide
if(currentActive == images.length-1){
nextBtn.style.display = "none";
}else{
    nextBtn.style.display = "block";
}
// hide the prev button if the current active slide is the first slide
if(currentActive == 0){
    prevBtn.style.display = "none";
}else{
    prevBtn.style.display = "block";
}
// replace the image slide after 0.5s
    setTimeout(function(){
        // remove active class from all slides
        images.forEach(function(img){
            img.classList.remove('active');
        });
        // add active slide to the new slide
        images[currentActive].classList.add("active");},500);
    //add the effect class to start the animation
    effect.classList.add("transition-effect");
    // reset and show the next & prev buttons + remove the effect class
    setTimeout(function(){
        nextBtn.style.pointerEvents = 'auto';
        prevBtn.style.pointerEvents = 'auto';
        nextBtn.style.opacity = 0.4;
        prevBtn.style.opacity = 0.4;
        effect.classList.remove("transition-effect");}, 1700);
}


    </script>
    <script>
        $(function () {

            var html = $('html');
            // Detections
            if (!("ontouchstart" in window)) {
                html.addClass("noTouch");
            }
            if ("ontouchstart" in window) {
                html.addClass("isTouch");
            }
            if ("ontouchstart" in window) {
                html.addClass("isTouch");
            }
            if (document.documentMode || /Edge/.test(navigator.userAgent)) {
                if (navigator.appVersion.indexOf("Trident") === -1) {
                    html.addClass("isEDGE");
                } else {
                    html.addClass("isIE isIE11");
                }
            }
            if (navigator.appVersion.indexOf("MSIE") !== -1) {
                html.addClass("isIE");
            }
            if (
                navigator.userAgent.indexOf("Safari") != -1 &&
                navigator.userAgent.indexOf("Chrome") == -1
            ) {
                html.addClass("isSafari");
            }

            // On Screen

            $.fn.isOnScreen = function () {
                var elementTop = $(this).offset().top,
                    elementBottom = elementTop + $(this).outerHeight(),
                    viewportTop = $(window).scrollTop(),
                    viewportBottom = viewportTop + $(window).height();
                return elementBottom > viewportTop && elementTop < viewportBottom;
            };

            function detection() {
                for (var i = 0; i < items.length; i++) {
                    var el = $(items[i]);

                    if (el.isOnScreen()) {
                        el.addClass("in-view");
                    }
                }
            }

            var items = document.querySelectorAll(
                    "*[data-animate-in], *[data-detect-viewport]"
                ),
                waiting = false,
                w = $(window);

            w.on("resize scroll", function () {
                if (waiting) {
                    return;
                }
                waiting = true;
                detection();

                setTimeout(function () {
                    waiting = false;
                }, 100);
            });

            $(document).ready(function () {
                setTimeout(function () {
                    detection();
                }, 500);

                for (var i = 0; i < items.length; i++) {
                    var d = 0,
                        el = $(items[i]);
                    if (items[i].getAttribute("data-animate-in-delay")) {
                        d = items[i].getAttribute("data-animate-in-delay") / 1000 + "s";
                    } else {
                        d = 0;
                    }
                    el.css("transition-delay", d);
                }
            });
        });

    </script>
    <script>

        window.onload = function () {
            animateSequence();
            animateRandom();
        };

        function animateSequence() {
            var a = document.getElementsByClassName('sequence');
            for (var i = 0; i < a.length; i++) {
                var $this = a[i];
                var letter = $this.innerHTML;
                letter = letter.trim();
                var str = '';
                var delay = 100;
                for (l = 0; l < letter.length; l++) {
                    if (letter[l] != ' ') {
                        str += '<span style="animation-delay:' + delay + 'ms; -moz-animation-delay:' + delay + 'ms; -webkit-animation-delay:' + delay + 'ms; ">' + letter[l] + '</span>';
                        delay += 150;
                    } else
                        str += letter[l];
                }
                $this.innerHTML = str;
            }
        }

        function animateRandom() {
            var a = document.getElementsByClassName('random');
            for (var i = 0; i < a.length; i++) {
                var $this = a[i];
                var letter = $this.innerHTML;
                letter = letter.trim();
                var delay = 70;
                var delayArray = new Array;
                var randLetter = new Array;
                for (j = 0; j < letter.length; j++) {
                    while (1) {
                        var random = getRandomInt(0, (letter.length - 1));
                        if (delayArray.indexOf(random) == -1)
                            break;
                    }
                    delayArray[j] = random;
                }
                for (l = 0; l < delayArray.length; l++) {
                    var str = '';
                    var index = delayArray[l];
                    if (letter[index] != ' ') {
                        str = '<span style="animation-delay:' + delay + 'ms; -moz-animation-delay:' + delay + 'ms; -webkit-animation-delay:' + delay + 'ms; ">' + letter[index] + '</span>';
                        randLetter[index] = str;
                    } else
                        randLetter[index] = letter[index];
                    delay += 80;
                }
                randLetter = randLetter.join("");
                $this.innerHTML = randLetter;
            }
        }

        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    </script>
    <script>
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;

        function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
                playerVars: {'autoplay': 1, 'controls': 1, 'autohide': 1, 'wmode': 'opaque'},
                videoId: 'JW5meKfy3fY',
                events: {
                    'onReady': onPlayerReady
                }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            event.target.mute();
        }
    </script>
@endpush

