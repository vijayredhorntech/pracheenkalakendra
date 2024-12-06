<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left_footer">
                    <img src="{{asset('assets/frontend/img/logos(W).png')}}" class="flogo">
                    <p>Pracheen Kala Kendra, Chandigarh is the premier educational organization which is doing yeoman service for the promotion, preservation and dissemination of Indian classical arts of music, dance and fine arts (painting) since its inception in 1956.</p>
                    <div class="socila_icons text-start">
                        @php
                            $socials = App\Models\SocialLink::all();
                        @endphp
                        @foreach($socials as $social)
                            <a href="{{$social->link}}" style="background-color: #b60001; color: white; padding: 5px; margin-right: 5px; border-radius: 5px;">
                                <i class="fa fa-{{$social->icon}}"></i>
                            </a>
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="middle_footer">
                    <h6>Quick Links</h6>
                    <ul>
                        <li><a href="/" style="text-decoration:none; color:#fff;">Home</a></li>
                        <li><a href="/page/administrative-wing" style="text-decoration:none; color:#fff;">Administration</a></li>
                        <li><a href="/page/department-of-gurmat-sangeet" style="text-decoration:none; color:#fff;">Academics</a></li>
                        <li><a href="/page/examinations" style="text-decoration:none; color:#fff;">Examinations</a></li>
                        <li><a href="/page/affiliation" style="text-decoration:none; color:#fff;">Affiliation & Recognition</a></li>
                        <li><a href="/page/guest-house" style="text-decoration:none; color:#fff;">Facilities</a></li>
                        <li><a href="/page/special-programmes-various-states-2024" style="text-decoration:none; color:#fff;">Gallery</a></li>
                        <li><a  aria-current="page" href="/page/contact-us" style="text-decoration:none; color:#fff;">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mages">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.4505958149493!2d76.70690911513087!3d30.70573058164654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feef36a00596f%3A0xbaacf98aa704bd07!2sPracheen%20Kala%20Kendra!5e0!3m2!1sen!2sin!4v1665655327513!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="footrss">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Copyright © 2022 Pracheen Kala Kendra. All Rights Reserved. | Powered By <a href="http://himsoftsolution.com/" style="text-decoration:none; color:#fff;">Him Soft Solution</a></h3>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=24ce269e4aa85f0e9ae6a79afc68ee09856dae64'></script>
    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1029928/t/5"></script>
</section>
