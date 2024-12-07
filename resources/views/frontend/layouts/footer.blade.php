

<footer>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
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
            <div class="col-lg-3 col-md-6 col-12">
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
            <div class="col-lg-3 col-md-6 col-12">
                <div class="mages">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.4505958149493!2d76.70690911513087!3d30.70573058164654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feef36a00596f%3A0xbaacf98aa704bd07!2sPracheen%20Kala%20Kendra!5e0!3m2!1sen!2sin!4v1665655327513!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="middle_footer">
                    <h6>Contact Us</h6>
                    <p>
                        @if(session('success'))
                            <span style="color: green">*{{session('success')}}</span>
                        @endif
                        @if(session('error'))
                            <span style="color: white">*{{session('error')}}</span>
                        @endif
                    </p>
                    <form action="{{route('enquiry.create',['type'=>'enquiry'])}}" method="POST">
                        @csrf
                        <div style="width: 100%; display: flex ; flex-direction: column">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter you name...." style=" width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #b60001; border-radius: 5px; color: black;">
                            @error('name')
                                <span style="color: white">*{{$message}}</span>
                            @enderror
                        </div>
                        <div style="width: 100%; display: flex ; flex-direction: column">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Enter you email...." style=" width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #b60001; border-radius: 5px; color: black;">
                            @error('email')
                            <span style="color: white">*{{$message}}</span>
                            @enderror
                        </div>
                        <div style="width: 100%; display: flex ; flex-direction: column">
                            <label for="">Phone</label>
                            <input type="number" name="mobile" placeholder="Enter you phone...." style=" width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #b60001; border-radius: 5px; color: black;">
                            @error('mobile')
                            <span style="color: white">*{{$message}}</span>
                            @enderror
                        </div>
                        <div style="width: 100%; display: flex ; flex-direction: column">
                            <label for="">Message</label>
                            <textarea type="number" name="subject" placeholder="Enter you message...." rows="3" style=" width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #b60001; border-radius: 5px; color: black;">
                            </textarea>
                            @error('subject')
                            <span style="color: white">*{{$message}}</span>
                            @enderror
                        </div>
                        <div style="display: flex; justify-content: end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
