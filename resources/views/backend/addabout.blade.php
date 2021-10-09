

 @extends('backend.templates')
 
  
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


@section('description') boaz farm and investment platform.
@endsection

 @section('title','boaz farm')
 



 @section('content')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('backend.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Boaz Agrolite</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{Auth::user()->name ?? ''}} </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      @include('backend.slider')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

 


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @include('backend.counter')
        <!-- /.row -->
        <!-- Main row -->


         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">About Us  </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Title</th>
                      <th>Message</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @if($about)
                      @foreach($about as $key => $about)
                      @if($loop->last)
                      <td>{{$key }}</td>
                      <td> {{$about->user->name ?? ''}} </td>
                      <td> {{Carbon\Carbon::parse($about->created_at)->format('d-m-y')}}</td>
                      <td><span class="tag tag-success">{{$about->title ?? ''}}</span></td>
                         <td>{!! $about->message ?? '' !!}</td>
                      <td>


         
                    <img src="{{asset($about->image)}}" class="img-circle elevation-2" style="height:50px;width: 50px;" alt="User Image">
 
                      </td>
                                     <td> <a href="{{route('deleteabout', $about->id)}}">Delete</a>  </td>
                      @endif
                      @endforeach
                      @endif
                      </tr>
                   
                   
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


        <div class="row">
          <!-- Left col -->
       
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- left column -->
          <div class="col-lg-10 col-sm-12 col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
     
                  <form action="{{route('sendaddabout')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="card-body">
                  <div class="container">

                    <div class="row">

                      <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">

                      <div class="col-lg-6 form-group"> 
                              <label for="exampleInputEmail1">Title </label>
                           <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>


                        <div class="col-lg-6 form-group"> 
                           <label for="exampleInputPassword1">Image</label>
                       <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="">
                      </div>
                      
                    </div>
                    
                  </div>
                                
                 

          

                  <div class="form-group">
                
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" name="message" id="summernote" rows="3"></textarea>
            </div>
                   
                </div>
                <!-- /.card-body -->

                    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
          
            <!-- /.card -->

            <!-- Input addon -->
       
            <!-- /.card -->
            <!-- Horizontal Form -->
            
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->



        <div class="row">
          <!-- Left col -->
       
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- left column -->
          <div class="col-lg-10 col-sm-12 col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
     
                  <form action="{{route('sendaddteams')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="card-body">
                  <div class="container">

                    <div class="row">

                      <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">

                      <div class="col-lg-3 form-group"> 
                        <label for="exampleInputEmail1">Team Name </label>
                           <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>

                      <div class="col-lg-3 form-group"> 
                        <label for="exampleInputEmail1">Team Profession </label>
                           <input type="text" name="profession" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>


                      <div class="col-lg-6 form-group"> 
                      <label for="exampleInputPassword1">Team Profile</label>
                       <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="">
                      </div>
                      
                    </div>
                    
                  </div>
                                
                 

          
 
                   
                </div>
                <!-- /.card-body -->

                    

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
          
            <!-- /.card -->

            <!-- Input addon -->
       
            <!-- /.card -->
            <!-- Horizontal Form -->
            
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        
          <!-- right col -->
        </div>




            <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">About Us  </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Team  Name</th>
                      <th>Team Profession</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                     @if($team)
                      @foreach($team as $key => $team)
                  
                    <tr>
                     
                      <td>{{$key }}</td>
                      <td> {{$team->user->name ?? ''}} </td>
                      <td> {{Carbon\Carbon::parse($team->created_at)->format('d-m-y')}}</td>
                      <td><span class="tag tag-success">{{$team->name ?? ''}}</span></td>
                         <td>{!! $team->profession ?? '' !!}</td>
                      <td>


         
                    <img src="{{asset($team->image)}}" class="img-circle elevation-2" style="height:50px;width: 50px;" alt="User Image">
 
                      </td>
                      <td> <a href="{{route('deleteteam', $team->id)}}">Delete</a>  </td>
                   
                  
                      </tr>

                          @endforeach
                      @endif
                   
                   
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

   @endsection


        @section('script')


        @endsection