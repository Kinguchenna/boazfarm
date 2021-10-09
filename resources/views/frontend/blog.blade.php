 @extends('frontend.templates')
 

@section('description') About boaz farm and investment platform steps on how to partner.
@endsection

 @section('title','about boaz farm')
 

<style type="text/css">
    .truncate {
    display: -webkit-box;
    max-width: 200px;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

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
                        <h2>Blog Grid</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles</h2>
                </div>
                <div class="row">
                    @if($blog)
                    @foreach($blog as $blog)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Image">
                            <!--     <div class="meta-date">
                                    <span>01</span>
                                    <strong>Jan</strong>
                                    <span>2045</span>
                                </div> -->
                                    <strong>{{Carbon\Carbon::parse($blog->created_at)->format('d-m-y')}} </strong>
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('blogdetails',[$blog->id])}}"> {{$blog->title}} </a></h3>
                                <p class="truncate">
                                            


                                  

                      {!!strlen($blog->message) > 300 ? substr($blog->message,0,300)."..." : $blog->message !!}</p>
                                  
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href=""> {{$blog->user->name}} </a></p>
                                <p><i class="fa fa-folder"></i><a href=""> {{$blog->category->name}} </a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                   
           
                   
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
           @endsection()


        @section('script')


        @endsection
       
    </body>
</html>
