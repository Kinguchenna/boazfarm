 @extends('frontend.templates')
 
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
 
 <style type="text/css">
     body {
 background-image: url("paper.gif");
 background-color: ;
}
 </style>



<section class="vh-100" style="background-color: #5E6600;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                
                     <input id="name" id="form2Example17" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="User Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <!-- <label class="form-label" for="form2Example17">User Name </label> -->
                  </div>

                  <div class="form-outline mb-4">
                     <input id="email"  id="form2Example27" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="User Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                   
                    <!-- <label class="form-label" for="form2Example27">User Email</label> -->
                  </div>



                      <div class="form-outline mb-4"> 

                   
                    <!-- <label class="form-label" for="form2Example27">User Password</label> -->


                       <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="User Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     </div>



                      <div class="form-outline mb-4"> 

                   
                    <!-- <label class="form-label" for="form2Example27">Confirm Password</label> -->


                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     </div>



                    


                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                  </div>

                   @if (Route::has('password.request'))
                  <a class="small text-muted" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                 </a>
                  @endif

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account? <a href="{{route('login')}}" style="color: #393f81;">Login here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


 




      @endsection


        @section('script')


        @endsection
       
    </body>
</html>




