<div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                            <a href="{{route('service')}}" class="nav-item nav-link">Service</a>
                            <a href="{{route('price')}}" class="nav-item nav-link">Price</a>
                            <a href="{{route('location')}}" class="nav-item nav-link">Farming Points</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
                                <div class="dropdown-menu">
                                    <a href="{{route('blog')}}" class="dropdown-item">Blog Grid</a>
                                    <a href="{{route('single-blog')}}" class="dropdown-item">Detail Page</a>
                                    <a href="{{route('team')}}" class="dropdown-item">Team Member</a>
                                    <a href="{{route('booking')}}" class="dropdown-item">Schedule Booking</a>
                                </div>
                            </div>
                            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto" >
                            <a class="btn btn-custom" href="#" style="background-color: #5E6600;color:#fff;">Get Appointment</a>

                            &nbsp; 
                              @if(Auth::check() && Auth::user()->isAdmin()==1 || Auth::check() && Auth::user()->isAdmin()==2 )

                                <a class="" href="{{route('admin.index')}}"  style="background-color:;color:#fff;"> Dashboard </a>


                             @elseif(Auth::check() && Auth::user()->isAdmin()==0)

                                 <a class="" href="{{route('boaz')}}"  style="background-color:;color:#fff;"> <i class="fa fa-user"></i> </a>

                             @else

                                  <a class="" href="{{route('login')}}"  style="background-color:;color:#fff;"> <i class="fa fa-user"></i> </a>

                             @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>