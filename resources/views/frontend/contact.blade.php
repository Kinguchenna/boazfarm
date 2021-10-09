 @extends('frontend.templates')
 

@section('description') contact boaz farm and  partner.
@endsection

 @section('title','contact boaz farm')
 



 @section('content')

    <body>
        <!-- Top Bar Start -->
      @include('frontend.topbar')
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        @include('frontend.navbar')
        <!-- Nav Bar End -->
        
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">


                    <div class="col-md-12" >
                        <iframe src="{{($map->map)}}" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                    <br>
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>

                <div class="row">



                    <div class="col-md-4">
                        <div class="contact-info">
                            <h2>Quick Contact Info</h2>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Opening Hour</h3>
                                    <p>Mon - Fri, 8:00 - 9:00</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Call Us</h3>
                                    <p>+012 345 6789</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="" novalidate="novalidate" action="{{url('sendcontacttoadmin')}}" method="post">

                                @csrf

                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" value="{{Auth::user()->name ?? ''}}" name="name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" value="{{Auth::user()->email ?? ''}}" name="email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" name="subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message" name="message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" id="">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
      
        <!-- Footer End -->
        
    @endsection()


        @section('script')


        @endsection
       
    </body>
</html>
