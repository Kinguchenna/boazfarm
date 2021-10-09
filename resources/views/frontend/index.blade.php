 @extends('frontend.templates')
 

@section('description') boaz farm and investment platform.
@endsection

 @section('title','boaz farm')
 



 @section('content')

    <body>
        <!-- Top Bar Start -->
      @include('frontend.topbar')
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        @include('frontend.navbar')
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
      @include('frontend.slider')
        <!-- Carousel End -->
        

        <!-- About Start -->
             <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{$about->image}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>{{$about->title}}</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                {!! $about->message ?? '' !!}
                            </p>
                          
                            <a class="btn btn-custom" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium  Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash-1"></i>
                            <h3>Exterior Washing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Interior Washing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Seats Washing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Window Wiping</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Wet Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Oil Changing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Brake Reparing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">25</h3>
                                <p>Products </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">350</h3>
                                <p>Engineers & Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5000</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>
Boazcity Agro-farm Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic </h3>
                                <h2><span>$</span><strong>25</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium </h3>
                                <h2><span>$</span><strong>35</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Complex </h3>
                                <h2><span>$</span><strong>49</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Location Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-header text-left">
                            <p> Boazcity Agro-farm</p>
                            <h2>Farm land & Care Points</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Ogun State Point</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Mowe State Point</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Lagos State  Point</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Ogun State  Point</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-form">
                            <h3>Request for Service</h3>
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Description" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Send Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Location End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Our Engineers & Workers</h2>
                </div>
                <div class="row">

                    @if($team)
                    @foreach($team as $team)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{$team->image}}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2> {{$team->name}} </h2>
                                <p> {{$team->profession}} </p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                  
                   
                   
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What our clients say</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-2.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-3.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-4.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Image">
                                <div class="meta-date">
                                    <span>01</span>
                                    <strong>Jan</strong>
                                    <span>2045</span>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Pellent iaculis blandit lorem, quis convall diam eleife. Nam in arcu sit amet massa ferment quis enim. Nunc  augue velit metus congue eget semper
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-folder"></i><a href="">Web Design</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Image">
                                <div class="meta-date">
                                    <span>01</span>
                                    <strong>Jan</strong>
                                    <span>2045</span>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Pellent iaculis blandit lorem, quis convall diam eleife. Nam in arcu sit amet massa ferment quis enim. Nunc  augue velit metus congue eget semper
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-folder"></i><a href="">Web Design</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" alt="Image">
                                <div class="meta-date">
                                    <span>01</span>
                                    <strong>Jan</strong>
                                    <span>2045</span>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Pellent iaculis blandit lorem, quis convall diam eleife. Nam in arcu sit amet massa ferment quis enim. Nunc  augue velit metus congue eget semper
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-folder"></i><a href="">Web Design</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->



<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="email1"placeholder="Your email address...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password1" placeholder="Your password...">
            </div>
            <button type="button" class="btn btn-info btn-block btn-round">Login</button>
          </form>
          
          <div class="text-center text-muted delimiter">or use a social network</div>
          <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fab fa-facebook"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
          </di>
        </div>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div>


        <!-- Footer Start -->

        @endsection()


        @section('script')


        @endsection
       
    </body>
</html>
