<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>  @yield('title')  </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="@yield('desciption')" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        @toastr_css
    </head>

    <body>
        <!-- Top Bar Start -->
   
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        
        <!-- Carousel End -->
        

        <!-- About Start -->
    
        <!-- About End -->

            @yield('content')

        <!-- Service Start -->
        
        <!-- Service End -->
        
        
        <!-- Facts Start -->
         
        <!-- Facts End -->
        
        
        <!-- Price Start -->
      
        <!-- Price End -->
        
        
        <!-- Location Start -->
   
        <!-- Location End -->


        <!-- Team Start -->
     
        <!-- Team End -->
        
        
        <!-- Testimonial Start -->
       
        <!-- Testimonial End -->


        <!-- Blog Start -->
         
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            @php
                             $map = App\Models\Map::orderByRaw('id DESC')->limit(1)->first();
                            $link = App\Models\Link::orderByRaw('id DESC')->limit(1)->first();
                            @endphp

                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a class="btn" href="{{$link->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a class="btn" href="{{$link->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href="{{$link->youtube}}"><i class="fab fa-youtube"></i></a>
                                <a class="btn" href="{{$link->instagram}}"><i class="fab fa-instagram"></i></a>
                                <a class="btn" href="{{$link->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Our Service</a>
                            <a href="">Service Points</a>
                            <a href="">Pricing Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Full Name">
                                <input class="form-control" placeholder="Email">
                                <button class="btn btn-custom">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">  Boazcity Agro-farm </a>, All Right Reserved. Designed By <a href="https://ainhub.com">AinHUB </a></p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
         @jquery
    @toastr_js
    @toastr_render
    </body>
</html>
